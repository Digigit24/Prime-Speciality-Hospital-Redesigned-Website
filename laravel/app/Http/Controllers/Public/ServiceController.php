<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\JsonResponse;

class ServiceController extends Controller
{
    public function index(): JsonResponse
    {
        $services = Service::published()
            ->ordered()
            ->get();

        return response()->json($services);
    }

    public function show(string $slug): JsonResponse
    {
        $service = Service::published()
            ->where('slug', $slug)
            ->firstOrFail();

        return response()->json($service);
    }
}
