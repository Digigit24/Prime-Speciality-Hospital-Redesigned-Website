@extends('layouts.app')

@section('title', 'Thank You - Appointment Request Received | Prime Speciality Hospital')

@section('content')
<section class="vc-section" style="min-height: 70vh; display: grid; align-items: center;">
    <div class="vc-container" style="max-width: 38rem; text-align: center;">
        <div class="vc-stack" style="gap: var(--space-6); align-items: center;">
            <!-- Success Icon -->
            <div class="vc-icon vc-icon--care" style="width: 5rem; height: 5rem; font-size: 2.25rem; margin-inline: auto;">
                ✓
            </div>
            
            <div>
                <h1 style="font-family: var(--font-display); font-size: var(--text-h1); font-weight: 800; color: var(--color-text); margin: 0; line-height: 1.15;">
                    Request Received Successfully!
                </h1>
                <p class="vc-lede" style="margin-top: var(--space-3); font-size: var(--text-body-lg); margin-inline: auto;">
                    Thank you for reaching out to Prime Speciality Hospital.
                </p>
            </div>

            <!-- Confirmation message details -->
            <div class="vc-card" style="background: var(--color-surface); border-color: var(--color-border-strong); text-align: left; padding: var(--space-6); width: 100%;">
                <h3 style="margin-top: 0; font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700; color: var(--color-text);">Next Steps</h3>
                <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.6; margin: 0;">
                    1. A medical coordinator is reviewing your consultation parameters.<br>
                    2. We will contact you at the phone number provided within <strong>24 hours</strong> to confirm a suitable appointment time slot.<br>
                    3. For emergency inquiries or immediate bookings, please dial the helpline directly.
                </p>
            </div>

            <!-- Call Info -->
            <div class="vc-stack" style="width: 100%; gap: var(--space-3);">
                <a href="tel:7447441426" class="vc-btn vc-btn--primary" style="width: 100%;">
                    Call Helpline: +91 7447441426
                </a>
                <a href="{{ route('home') }}" class="vc-btn vc-btn--outline" style="width: 100%;">
                    Return to Homepage
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
