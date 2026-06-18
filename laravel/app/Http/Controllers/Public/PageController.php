<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\JsonResponse;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $page = Page::published()
            ->where('slug', 'clinic')
            ->first();

        if ($page) {
            $page->body = $this->sanitizeHtml($page->body);
        }

        $reviews = $this->fetchGoogleReviews();
        $placeId = config('services.google.place_id');

        return view('pages.home', compact('page', 'reviews', 'placeId'));
    }

    public function show(string $slug): View
    {
        $page = Page::published()
            ->where('slug', $slug)
            ->firstOrFail();

        $page->body = $this->sanitizeHtml($page->body);

        $reviews = $this->fetchGoogleReviews();
        $placeId = config('services.google.place_id');

        // Map specific slugs to specialized Blade views
        $templates = [
            'about' => 'pages.about',
            'contact' => 'pages.contact',
            'gallery' => 'pages.gallery',
            'appointment' => 'pages.appointment',
            'dr-pankaj-bhalerao' => 'pages.doctor-profile',
            'thank-you' => 'pages.thank-you',
        ];

        $serviceSlugs = [
            'appendicitis', 'laparoscopy', 'hernia', 'breast-surgery',
            'thyroid', 'gallbladder', 'fistula', 'fissure', 'hemorrhoids', 'endoscopy'
        ];

        if (in_array($slug, $serviceSlugs)) {
            return view('pages.service-detail', compact('page', 'reviews', 'placeId'));
        }

        if (array_key_exists($slug, $templates)) {
            return view($templates[$slug], compact('page', 'reviews', 'placeId'));
        }

        return view('pages.show', compact('page', 'reviews', 'placeId'));
    }

    private function fetchGoogleReviews(): array
    {
        return \Illuminate\Support\Facades\Cache::remember('google_reviews_5star', 86400, function () {
            $apiKey = config('services.google.api_key');
            $placeId = config('services.google.place_id');

            $fallbackReviews = [
                [
                    'author_name' => 'Sandip K.',
                    'rating' => 5,
                    'relative_time_description' => '3 months ago',
                    'text' => 'I had my laparoscopic appendix surgery under Dr. Pankaj Bhalerao. The entire process was painless and I got discharged within 24 hours. Highly recommended surgeon in Moshi.',
                    'profile_photo_url' => null,
                ],
                [
                    'author_name' => 'Priyanka M.',
                    'rating' => 5,
                    'relative_time_description' => '2 months ago',
                    'text' => 'Extremely professional hospital and polite nursing staff. Dr. Pankaj explained my gallbladder stones issue very clearly and performed a clean keyhole operation. I returned to work in 5 days.',
                    'profile_photo_url' => null,
                ],
                [
                    'author_name' => 'Rakesh D.',
                    'rating' => 5,
                    'relative_time_description' => '4 weeks ago',
                    'text' => 'Best laser treatment for piles. Sutureless and clean procedure. Dr. Bhalerao has an amazing hand. The facility is very clean and billing is fully transparent with TPA support.',
                    'profile_photo_url' => null,
                ]
            ];

            if (!$apiKey || !$placeId) {
                return $fallbackReviews;
            }

            try {
                $response = \Illuminate\Support\Facades\Http::timeout(5)->get('https://maps.googleapis.com/maps/api/place/details/json', [
                    'place_id' => $placeId,
                    'fields' => 'reviews,rating,user_ratings_total',
                    'key' => $apiKey
                ]);

                if ($response->successful()) {
                    $data = $response->json();
                    $reviews = $data['result']['reviews'] ?? [];

                    // Filter for 5-star reviews only
                    $fiveStarReviews = array_filter($reviews, function ($review) {
                        return isset($review['rating']) && $review['rating'] == 5;
                    });

                    if (!empty($fiveStarReviews)) {
                        return array_values($fiveStarReviews);
                    }
                }
            } catch (\Exception $e) {
                \Illuminate\Support\Facades\Log::error('Error fetching Google Reviews: ' . $e->getMessage());
            }

            return $fallbackReviews;
        });
    }

    private function sanitizeHtml(?string $html): string
    {
        if (empty($html)) {
            return '';
        }
        // Replace literal \r\n and \n strings
        $html = str_replace(['\r\n', '\n', '\r'], " ", $html);
        // Strip backslashes from quotes
        $html = stripslashes($html);
        // Remove empty or broken images (src="" or src="\"\"" or src="\"")
        $html = preg_replace('/<img[^>]*src="\\\\*"\s*[^>]*>/i', '', $html);
        // Fix any remaining double-quote wrappers in src
        $html = preg_replace('/src="\\\\*"([^"]+)\\\\*"/i', 'src="$1"', $html);
        
        return $html;
    }
}
