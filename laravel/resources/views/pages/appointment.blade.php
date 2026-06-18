@extends('layouts.app')

@section('title', 'Book Appointment - Prime Speciality Hospital Moshi')
@section('meta_description', 'Request a surgical consultation or diagnostic slot at Prime Speciality Hospital. Secure booking, quick response from coordinators.')

@section('content')
<!-- Header Banner -->
<section style="background: var(--color-surface); padding-block: var(--space-4); border-bottom: 1px solid var(--color-border);">
    <div class="vc-container">
        <nav style="display: flex; gap: var(--space-2); font-size: var(--text-caption); color: var(--color-text-subtle);">
            <a href="{{ route('home') }}" style="text-decoration: none;">Home</a>
            <span>/</span>
            <span style="color: var(--color-text); font-weight: 600;">Book Appointment</span>
        </nav>
    </div>
</section>

<!-- Appointment Container -->
<section class="vc-section">
    <div class="vc-container" style="display: grid; grid-template-columns: 0.9fr 1.1fr; gap: var(--space-12); align-items: start;">
        <!-- Left Sidebar: Reassurance & Helpline -->
        <div class="vc-stack" style="gap: var(--space-6);">
            <div>
                <span class="vc-eyebrow">Secure Booking</span>
                <h1 style="font-family: var(--font-display); font-size: var(--text-h1); font-weight: 800; color: var(--color-text); margin: 0; line-height: 1.1;">
                    Book your consultation.
                </h1>
                <p class="vc-lede" style="margin-top: var(--space-2);">Fill in the form to request a consult. A medical care coordinator will contact you to confirm the time slot.</p>
            </div>
            
            <div class="vc-card" style="background: var(--color-surface); border-color: var(--color-border-strong);">
                <h3 style="margin-top: 0; font-family: var(--font-display); font-size: var(--text-body-lg); margin-bottom: var(--space-2);">Helpline Callout</h3>
                <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin-bottom: var(--space-3);">
                    For emergency cases or immediate confirmations, please call the clinic desk directly:
                </p>
                <a href="tel:7447441426" class="vc-btn vc-btn--secondary" style="width: 100%;">
                    Call: +91 7447441426
                </a>
            </div>

            <!-- Guidelines block -->
            <div style="font-size: var(--text-caption); color: var(--color-text-subtle); line-height: 1.5; padding: var(--space-3); border-radius: var(--radius-sm); border: 1px solid var(--color-border); background: var(--color-surface);">
                <strong>Important Notice:</strong> online scheduling request is checked periodically. If you require urgent surgical intervention (e.g. acute appendicitis pain), please visit the hospital emergency department directly or call the emergency contact number immediately.
            </div>
        </div>

        <!-- Right: Registration Form -->
        <form action="{{ route('contact.store') }}" method="POST" class="vc-card vc-stack" style="background: #fff; border: 1px solid var(--color-border-strong); padding: var(--space-8); box-shadow: var(--shadow-md);">
            @csrf
            <input type="hidden" name="page_source" value="appointment_page">

            <h3 style="margin-top: 0; font-family: var(--font-display); font-size: var(--text-h4); border-bottom: 1px solid var(--color-border); padding-bottom: 0.5rem; margin-bottom: var(--space-4);">Request Consultation Slot</h3>

            <label class="vc-field">
                <span class="vc-label">Patient Name <span style="color: var(--red-700);">*</span></span>
                <input class="vc-input" name="name" placeholder="Full name" required value="{{ old('name') }}">
            </label>

            <div class="vc-grid" style="grid-template-columns: repeat(2, 1fr); gap: var(--space-4);">
                <label class="vc-field">
                    <span class="vc-label">Phone Number <span style="color: var(--red-700);">*</span></span>
                    <input class="vc-input" name="phone" placeholder="+91-xxxxx-xxxxx" required value="{{ old('phone') }}">
                </label>
                <label class="vc-field">
                    <span class="vc-label">Email Address <span style="color: var(--red-700);">*</span></span>
                    <input class="vc-input" type="email" name="email" placeholder="email@example.com" required value="{{ old('email') }}">
                </label>
            </div>

            <label class="vc-field">
                <span class="vc-label">Surgical Speciality / Procedure Required</span>
                <select class="vc-select" name="message_prefix">
                    <option value="General Consultation">General / Diagnostics Consultation</option>
                    <option value="Laparoscopic Surgery">Laparoscopic Surgery (Appendix, Gallstone)</option>
                    <option value="Laser Piles Surgery">Laser Piles / Fissure / Fistula Surgery</option>
                    <option value="Hernia Repair">Hernia Mesh Repair</option>
                    <option value="Breast / Thyroid Surgery">Breast / Thyroid Surgery</option>
                    <option value="Gastrointestinal Surgery">Gastrointestinal (GI) Surgery</option>
                    <option value="Endoscopy">Upper Endoscopy</option>
                </select>
            </label>

            <label class="vc-field">
                <span class="vc-label">Symptoms & preferred date/time <span style="color: var(--red-700);">*</span></span>
                <textarea class="vc-textarea" name="message" placeholder="Please list details about symptoms, preferred consultation date, and past medical history..." required>{{ old('message') }}</textarea>
            </label>

            @if($errors->any())
                <div class="vc-alert vc-alert--error" style="font-size: var(--text-body-sm); padding: var(--space-3);">
                    <strong>Errors in details:</strong>
                    <ul style="margin: 0; padding-left: var(--space-4);">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button class="vc-btn vc-btn--primary" type="submit" style="width: 100%;">
                Submit Appointment Request <span>→</span>
            </button>
        </form>
    </div>
</section>

<style>
    @media (max-width: 900px) {
        .vc-section .vc-container {
            grid-template-columns: 1fr !important;
        }
        .vc-grid {
            grid-template-columns: 1fr !important;
        }
    }
</style>
@endsection
