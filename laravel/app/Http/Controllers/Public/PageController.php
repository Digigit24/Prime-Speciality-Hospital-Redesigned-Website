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

        return view('pages.home', compact('page'));
    }

    public function show(string $slug): View
    {
        $page = Page::published()
            ->where('slug', $slug)
            ->firstOrFail();

        $page->body = $this->sanitizeHtml($page->body);

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
            return view('pages.service-detail', compact('page'));
        }

        if (array_key_exists($slug, $templates)) {
            return view($templates[$slug], compact('page'));
        }

        return view('pages.show', compact('page'));
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
