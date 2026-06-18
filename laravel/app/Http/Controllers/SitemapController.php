<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [];

        $urls[] = $this->url(URL::route('home'), now(), '1.0', 'daily');
        $urls[] = $this->url(URL::route('blog.index'), now(), '0.9', 'weekly');
        $urls[] = $this->url(URL::route('services.index'), now(), '0.9', 'weekly');

        foreach (Post::published()->latest('published_at')->get() as $post) {
            $urls[] = $this->url(
                URL::route('blog.show', $post->slug),
                $post->updated_at,
                '0.8',
                'monthly'
            );
        }

        foreach (Service::published()->ordered()->get() as $service) {
            $urls[] = $this->url(
                URL::route('services.show', $service->slug),
                $service->updated_at,
                '0.8',
                'monthly'
            );
        }

        foreach (Page::published()->get() as $page) {
            $urls[] = $this->url(
                URL::route('pages.show', $page->slug),
                $page->updated_at,
                '0.7',
                'monthly'
            );
        }

        $xml = $this->buildXml($urls);

        return response($xml, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }

    private function buildXml(array $urls): string
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

        foreach ($urls as $url) {
            $xml .= '  <url>'."\n";
            $xml .= '    <loc>'.e($url['loc']).'</loc>'."\n";
            $xml .= '    <lastmod>'.e($url['lastmod']).'</lastmod>'."\n";
            $xml .= '    <changefreq>'.e($url['changefreq']).'</changefreq>'."\n";
            $xml .= '    <priority>'.e($url['priority']).'</priority>'."\n";
            $xml .= '  </url>'."\n";
        }

        $xml .= '</urlset>';

        return $xml;
    }

    private function url(string $loc, $lastmod, string $priority, string $changefreq): array
    {
        return [
            'loc' => $loc,
            'lastmod' => $lastmod ? $lastmod->toIso8601String() : now()->toIso8601String(),
            'priority' => $priority,
            'changefreq' => $changefreq,
        ];
    }
}
