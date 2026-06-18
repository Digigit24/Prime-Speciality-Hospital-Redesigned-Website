<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index(): JsonResponse
    {
        $posts = Post::with(['category', 'author', 'tags'])
            ->orderByDesc('created_at')
            ->paginate(25);

        return response()->json($posts);
    }

    public function store(StorePostRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $tags = $validated['tags'] ?? [];
        unset($validated['tags']);

        $post = Post::create($validated);
        $post->tags()->sync($tags);
        $post->load(['category', 'author', 'tags']);

        return response()->json($post, Response::HTTP_CREATED);
    }

    public function show(Post $post): JsonResponse
    {
        return response()->json($post->load(['category', 'author', 'tags']));
    }

    public function update(UpdatePostRequest $request, Post $post): JsonResponse
    {
        $validated = $request->validated();
        $tags = $validated['tags'] ?? [];
        unset($validated['tags']);

        $post->update($validated);
        $post->tags()->sync($tags);
        $post->load(['category', 'author', 'tags']);

        return response()->json($post);
    }

    public function destroy(Post $post): JsonResponse
    {
        $post->delete();

        return response()->json(['message' => 'Post deleted successfully.']);
    }
}
