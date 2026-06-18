<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class NewsletterController extends Controller
{
    public function store(NewsletterRequest $request): JsonResponse
    {
        $subscriber = NewsletterSubscriber::firstOrCreate(
            ['email' => $request->validated('email')],
            [
                'subscribed_at' => now(),
                'is_active' => true,
            ]
        );

        if (! $subscriber->wasRecentlyCreated) {
            return response()->json([
                'message' => 'You are already subscribed.',
                'data' => $subscriber,
            ]);
        }

        return response()->json([
            'message' => 'You have been subscribed successfully.',
            'data' => $subscriber,
        ], Response::HTTP_CREATED);
    }
}
