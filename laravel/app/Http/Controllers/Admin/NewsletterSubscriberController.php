<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NewsletterSubscriberController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = NewsletterSubscriber::query();

        if ($request->has('active')) {
            $query->where('is_active', $request->boolean('active'));
        }

        $subscribers = $query->orderByDesc('created_at')->paginate(25);

        return response()->json($subscribers);
    }

    public function show(NewsletterSubscriber $newsletterSubscriber): JsonResponse
    {
        return response()->json($newsletterSubscriber);
    }

    public function update(Request $request, NewsletterSubscriber $newsletterSubscriber): JsonResponse
    {
        $validated = $request->validate([
            'is_active' => ['required', 'boolean'],
        ]);

        $newsletterSubscriber->update($validated);

        return response()->json($newsletterSubscriber);
    }

    public function destroy(NewsletterSubscriber $newsletterSubscriber): JsonResponse
    {
        $newsletterSubscriber->delete();

        return response()->json(['message' => 'Subscriber deleted successfully.']);
    }
}
