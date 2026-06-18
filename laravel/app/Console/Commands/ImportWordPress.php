<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ImportWordPress extends Command
{
    protected $signature = 'wp:import
                            {file? : Path to the WordPress SQL dump}
                            {--path= : Alias for file path}';

    protected $description = 'Import posts, pages, categories, tags, and users from a WordPress SQL dump.';

    private array $users = [];
    private array $terms = [];
    private array $categories = [];
    private array $tags = [];
    private array $posts = [];
    private array $attachments = [];
    private array $postmeta = [];
    private array $termTaxonomies = [];
    private array $termRelationships = [];
    private array $options = [];

    public function handle(): int
    {
        $path = $this->argument('file') ?: $this->option('path') ?: base_path('../wordpressdump.sql');

        if (! File::exists($path)) {
            $this->error("SQL dump not found: {$path}");

            return self::FAILURE;
        }

        $this->info('Parsing WordPress SQL dump...');
        $this->parseDump($path);

        $this->info('Importing users...');
        $this->importUsers();

        $this->info('Importing categories and tags...');
        $this->importTerms();

        $this->info('Importing attachments...');
        $this->importAttachments();

        $this->info('Importing posts...');
        $this->importPosts();

        $this->info('Importing pages...');
        $this->importPages();

        $this->info('Importing services...');
        $this->importServices();

        $this->info('Done.');

        return self::SUCCESS;
    }

    private function parseDump(string $path): void
    {
        $handle = fopen($path, 'r');

        if (! $handle) {
            throw new \RuntimeException("Unable to open {$path}");
        }

        while (($line = fgets($handle)) !== false) {
            $line = trim($line);

            if (str_starts_with($line, 'INSERT INTO `wp_users`')) {
                foreach ($this->parseInsertLine($line, 'wp_users') as $row) {
                    $this->users[$row['ID']] = $row;
                }
            } elseif (str_starts_with($line, 'INSERT INTO `wp_terms`')) {
                foreach ($this->parseInsertLine($line, 'wp_terms') as $row) {
                    $this->terms[$row['term_id']] = $row;
                }
            } elseif (str_starts_with($line, 'INSERT INTO `wp_term_taxonomy`')) {
                foreach ($this->parseInsertLine($line, 'wp_term_taxonomy') as $row) {
                    $this->termTaxonomies[$row['term_taxonomy_id']] = $row;
                }
            } elseif (str_starts_with($line, 'INSERT INTO `wp_term_relationships`')) {
                foreach ($this->parseInsertLine($line, 'wp_term_relationships') as $row) {
                    $this->termRelationships[$row['object_id']][] = $row;
                }
            } elseif (str_starts_with($line, 'INSERT INTO `wp_posts`')) {
                foreach ($this->parseInsertLine($line, 'wp_posts') as $row) {
                    if ($row['post_type'] === 'attachment') {
                        $this->attachments[$row['ID']] = $row;
                    } else {
                        $this->posts[$row['ID']] = $row;
                    }
                }
            } elseif (str_starts_with($line, 'INSERT INTO `wp_postmeta`')) {
                foreach ($this->parseInsertLine($line, 'wp_postmeta') as $row) {
                    $this->postmeta[$row['post_id']][$row['meta_key']] = $row['meta_value'];
                }
            } elseif (str_starts_with($line, 'INSERT INTO `wp_options`')) {
                foreach ($this->parseInsertLine($line, 'wp_options') as $row) {
                    $this->options[$row['option_name']] = $row['option_value'];
                }
            }
        }

        fclose($handle);
    }

    private function parseInsertLine(string $line, string $table): array
    {
        $prefix = "INSERT INTO `{$table}` VALUES";
        if (! str_starts_with($line, $prefix)) {
            return [];
        }

        $body = substr($line, strlen($prefix));
        $body = rtrim($body, ';');

        $columns = $this->columnsForTable($table);
        $rows = [];

        foreach ($this->splitTuples($body) as $tuple) {
            $values = $this->parseTuple($tuple);
            if (count($values) !== count($columns)) {
                continue;
            }
            $rows[] = array_combine($columns, $values);
        }

        return $rows;
    }

    private function splitTuples(string $body): array
    {
        $tuples = [];
        $depth = 0;
        $inQuote = false;
        $escape = false;
        $current = [];

        foreach (str_split($body) as $ch) {
            if ($escape) {
                $current[] = $ch;
                $escape = false;
                continue;
            }

            if ($ch === '\\') {
                $current[] = $ch;
                $escape = true;
                continue;
            }

            if ($ch === '"') {
                $inQuote = ! $inQuote;
                $current[] = $ch;
                continue;
            }

            if (! $inQuote) {
                if ($ch === '(') {
                    if ($depth === 0) {
                        $current = ['('];
                    } else {
                        $current[] = $ch;
                    }
                    $depth++;
                    continue;
                }

                if ($ch === ')') {
                    $depth--;
                    $current[] = $ch;
                    if ($depth === 0) {
                        $tuples[] = implode('', $current);
                        $current = [];
                    }
                    continue;
                }

                if ($ch === ',' && $depth === 0) {
                    continue;
                }
            }

            $current[] = $ch;
        }

        return $tuples;
    }

    private function parseTuple(string $tuple): array
    {
        $tuple = trim($tuple);
        if (str_starts_with($tuple, '(') && str_ends_with($tuple, ')')) {
            $tuple = substr($tuple, 1, -1);
        }

        $values = str_getcsv($tuple, ',', '"', '\\');

        return array_map(fn ($value) => $this->unescapeMysql($value), $values);
    }

    private function unescapeMysql(?string $value): string
    {
        if ($value === null) {
            return '';
        }

        if (! str_starts_with($value, '"') || ! str_ends_with($value, '"')) {
            return $value;
        }

        $inner = substr($value, 1, -1);
        $inner = str_replace('\\"', '"', $inner);
        $inner = str_replace('\\\\', '\\', $inner);
        $inner = str_replace('\\n', "\n", $inner);
        $inner = str_replace('\\r', "\r", $inner);
        $inner = str_replace('\\t', "\t", $inner);
        $inner = str_replace('\\0', "\0", $inner);
        $inner = str_replace('\\Z', "\x1a", $inner);
        $inner = str_replace("\\'", "'", $inner);

        return $inner;
    }

    private function columnsForTable(string $table): array
    {
        return match ($table) {
            'wp_users' => ['ID', 'user_login', 'user_pass', 'user_nicename', 'user_email', 'user_url', 'user_registered', 'user_activation_key', 'user_status', 'display_name'],
            'wp_terms' => ['term_id', 'name', 'slug', 'term_group'],
            'wp_term_taxonomy' => ['term_taxonomy_id', 'term_id', 'taxonomy', 'description', 'parent', 'count'],
            'wp_term_relationships' => ['object_id', 'term_taxonomy_id', 'term_order'],
            'wp_posts' => ['ID', 'post_author', 'post_date', 'post_date_gmt', 'post_content', 'post_title', 'post_excerpt', 'post_status', 'comment_status', 'ping_status', 'post_password', 'post_name', 'to_ping', 'pinged', 'post_modified', 'post_modified_gmt', 'post_content_filtered', 'post_parent', 'guid', 'menu_order', 'post_type', 'post_mime_type', 'comment_count'],
            'wp_postmeta' => ['meta_id', 'post_id', 'meta_key', 'meta_value'],
            'wp_options' => ['option_id', 'option_name', 'option_value', 'autoload'],
            default => [],
        };
    }

    private function importUsers(): void
    {
        foreach ($this->users as $wpUser) {
            User::updateOrCreate(
                ['wp_id' => $wpUser['ID']],
                [
                    'name' => $wpUser['display_name'] ?: $wpUser['user_login'],
                    'username' => $wpUser['user_login'],
                    'email' => $wpUser['user_email'],
                    'password' => bcrypt(Str::random(32)),
                    'email_verified_at' => $wpUser['user_registered'],
                ]
            );
        }

        $this->info('Imported '.count($this->users).' users.');
    }

    private function importTerms(): void
    {
        $categoryCount = 0;
        $tagCount = 0;

        foreach ($this->termTaxonomies as $taxonomy) {
            $term = $this->terms[$taxonomy['term_id']] ?? null;

            if (! $term) {
                continue;
            }

            if ($taxonomy['taxonomy'] === 'category') {
                Category::updateOrCreate(
                    ['wp_id' => $term['term_id']],
                    [
                        'name' => $term['name'],
                        'slug' => $term['slug'] ?: Str::slug($term['name']),
                        'description' => $taxonomy['description'],
                    ]
                );
                $this->categories[$taxonomy['term_taxonomy_id']] = $term['term_id'];
                $categoryCount++;
            } elseif ($taxonomy['taxonomy'] === 'post_tag') {
                Tag::updateOrCreate(
                    ['wp_id' => $term['term_id']],
                    [
                        'name' => $term['name'],
                        'slug' => $term['slug'] ?: Str::slug($term['name']),
                        'description' => $taxonomy['description'],
                    ]
                );
                $this->tags[$taxonomy['term_taxonomy_id']] = $term['term_id'];
                $tagCount++;
            }
        }

        $this->info("Imported {$categoryCount} categories and {$tagCount} tags.");
    }

    private function importAttachments(): void
    {
        foreach ($this->attachments as $attachment) {
            $this->attachments[$attachment['ID']] = $attachment['guid'];
        }

        $this->info('Indexed '.count($this->attachments).' attachments.');
    }

    private function importPosts(): void
    {
        $count = 0;
        $categoryMap = Category::pluck('id', 'wp_id')->all();
        $tagMap = Tag::pluck('id', 'wp_id')->all();
        $userMap = User::pluck('id', 'wp_id')->all();

        foreach ($this->posts as $post) {
            if ($post['post_type'] !== 'post' || $post['post_status'] !== 'publish') {
                continue;
            }

            $model = Post::updateOrCreate(
                ['wp_id' => $post['ID']],
                [
                    'author_id' => $userMap[$post['post_author']] ?? null,
                    'title' => $post['post_title'],
                    'slug' => $post['post_name'] ?: Str::slug($post['post_title']),
                    'excerpt' => $this->excerpt($post['post_excerpt'], $post['post_content']),
                    'body' => $post['post_content'],
                    'meta_title' => null,
                    'meta_description' => null,
                    'featured_image' => $this->featuredImage($post['ID']),
                    'status' => 'publish',
                    'published_at' => $post['post_date'],
                ]
            );

            $categoryId = $this->resolveTerm($post['ID'], $this->categories, $categoryMap);
            if ($categoryId) {
                $model->update(['category_id' => $categoryId]);
            }

            $tagIds = $this->resolveTerms($post['ID'], $this->tags, $tagMap);
            if (! empty($tagIds)) {
                $model->tags()->sync($tagIds);
            }

            $count++;
        }

        $this->info("Imported {$count} posts.");
    }

    private function importPages(): void
    {
        $count = 0;

        foreach ($this->posts as $post) {
            if ($post['post_type'] !== 'page' || $post['post_status'] !== 'publish') {
                continue;
            }

            Page::updateOrCreate(
                ['wp_id' => $post['ID']],
                [
                    'title' => $post['post_title'],
                    'slug' => $post['post_name'] ?: Str::slug($post['post_title']),
                    'body' => $post['post_content'],
                    'meta_title' => null,
                    'meta_description' => null,
                    'status' => 'publish',
                    'published_at' => $post['post_date'],
                ]
            );

            $count++;
        }

        $this->info("Imported {$count} pages.");
    }

    private function importServices(): void
    {
        $count = 0;

        foreach ($this->posts as $post) {
            if ($post['post_type'] !== 'service' || $post['post_status'] !== 'publish') {
                continue;
            }

            Service::updateOrCreate(
                ['wp_id' => $post['ID']],
                [
                    'title' => $post['post_title'],
                    'slug' => $post['post_name'] ?: Str::slug($post['post_title']),
                    'body' => $post['post_content'],
                    'meta_title' => null,
                    'meta_description' => null,
                    'icon' => null,
                    'order' => $post['menu_order'] ?? 0,
                    'status' => 'publish',
                ]
            );

            $count++;
        }

        $this->info("Imported {$count} services.");
    }

    private function excerpt(?string $excerpt, string $content): ?string
    {
        if (! empty($excerpt)) {
            return $excerpt;
        }

        $text = strip_tags($content);

        return Str::limit($text, 300);
    }

    private function featuredImage(int $postId): ?string
    {
        $thumbnailId = $this->postmeta[$postId]['_thumbnail_id'] ?? null;

        if ($thumbnailId && isset($this->attachments[$thumbnailId])) {
            return $this->attachments[$thumbnailId];
        }

        return null;
    }

    private function resolveTerm(int $objectId, array $termTaxonomyMap, array $modelMap): ?int
    {
        $relationships = $this->termRelationships[$objectId] ?? [];

        foreach ($relationships as $relation) {
            $termTaxonomyId = $relation['term_taxonomy_id'];
            if (isset($termTaxonomyMap[$termTaxonomyId])) {
                $wpTermId = $termTaxonomyMap[$termTaxonomyId];
                return $modelMap[$wpTermId] ?? null;
            }
        }

        return null;
    }

    private function resolveTerms(int $objectId, array $termTaxonomyMap, array $modelMap): array
    {
        $ids = [];
        $relationships = $this->termRelationships[$objectId] ?? [];

        foreach ($relationships as $relation) {
            $termTaxonomyId = $relation['term_taxonomy_id'];
            if (isset($termTaxonomyMap[$termTaxonomyId])) {
                $wpTermId = $termTaxonomyMap[$termTaxonomyId];
                if (isset($modelMap[$wpTermId])) {
                    $ids[] = $modelMap[$wpTermId];
                }
            }
        }

        return array_unique($ids);
    }
}
