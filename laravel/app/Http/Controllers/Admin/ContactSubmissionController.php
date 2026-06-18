<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use Illuminate\Http\JsonResponse;

class ContactSubmissionController extends Controller
{
    public function index(): JsonResponse
    {
        $submissions = ContactSubmission::orderByDesc('created_at')->paginate(25);

        return response()->json($submissions);
    }

    public function show(ContactSubmission $contactSubmission): JsonResponse
    {
        if (! $contactSubmission->is_read) {
            $contactSubmission->update(['is_read' => true]);
        }

        return response()->json($contactSubmission);
    }

    public function destroy(ContactSubmission $contactSubmission): JsonResponse
    {
        $contactSubmission->delete();

        return response()->json(['message' => 'Contact submission deleted successfully.']);
    }
}
