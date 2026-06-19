@extends('layouts.app')

@section('title', 'Contact Us - Prime Speciality Hospital Moshi Pune')
@section('meta_description', 'Contact Prime Speciality Hospital in Moshi for appointments, surgery scheduling, directions, and insurance support.')

@section('content')
<div class="vc-breadcrumbs">
    <div class="vc-container"><nav><a href="{{ route('home') }}">Home</a><span>/</span><strong>Contact Us</strong></nav></div>
</div>

<section class="vc-section vc-page-atmosphere">
    <div class="vc-container" style="display:grid;grid-template-columns:.9fr 1.1fr;gap:var(--space-12);align-items:start">
        <div class="vc-stack vc-reveal-left" style="gap:var(--space-6)">
            <span class="vc-eyebrow">Get Connected</span>
            <h1 style="margin:0;font:800 var(--text-h1)/1.06 var(--font-display);letter-spacing:-.04em">We are here to help.</h1>
            <p class="vc-lede">Contact us for consultation scheduling, hospital admission, diagnostics, surgery planning, or eligible cashless insurance coordination.</p>

            <div class="vc-treatment-points">
                <article class="vc-treatment-point"><strong>Hospital Address</strong><p>Dehu-Moshi Road, Near Ramdev Dhaba, Borhadewadi, Moshi, Pune 412105.</p></article>
                <article class="vc-treatment-point"><strong>Phone Numbers</strong><p><a href="tel:+917447441426">+91 74474 41426</a><br><a href="tel:+919422668921">+91 94226 68921</a></p></article>
                <article class="vc-treatment-point"><strong>Consultation Hours</strong><p>Monday to Saturday, 5:00 PM to 9:00 PM. Emergency admission support is available 24/7.</p></article>
                <article class="vc-treatment-point"><strong>Email</strong><p><a href="mailto:idrpankajnbhalerao@gmail.com">idrpankajnbhalerao@gmail.com</a></p></article>
            </div>
        </div>

        <form action="{{ route('contact.store') }}" method="POST" class="vc-booking-form-card vc-stack vc-reveal-right" style="border:1px solid var(--color-border-strong);background:rgb(255 255 255 / 94%);box-shadow:var(--shadow-xl)">
            @csrf
            <input type="hidden" name="page_source" value="contact_us_page">
            <h2 style="margin:0 0 var(--space-3);font:800 var(--text-h4)/1.2 var(--font-display)">Send Us a Message</h2>
            <label class="vc-field"><span class="vc-label">Full Name <span class="vc-required">*</span></span><input class="vc-input" name="name" required value="{{ old('name') }}"></label>
            <div class="vc-shared-cta__form-grid">
                <label class="vc-field"><span class="vc-label">Phone Number <span class="vc-required">*</span></span><input class="vc-input" name="phone" required value="{{ old('phone') }}"></label>
                <label class="vc-field"><span class="vc-label">Email Address <span class="vc-required">*</span></span><input class="vc-input" type="email" name="email" required value="{{ old('email') }}"></label>
            </div>
            <label class="vc-field">
                <span class="vc-label">Purpose</span>
                <select class="vc-select" name="message_prefix">
                    <option value="General Query">General Query</option>
                    <option value="Appointment Request">Appointment Request</option>
                    <option value="Surgical Consultation">Surgical Consultation</option>
                    <option value="Insurance Support">Insurance Support</option>
                </select>
            </label>
            <label class="vc-field"><span class="vc-label">Message <span class="vc-required">*</span></span><textarea class="vc-textarea" name="message" required>{{ old('message') }}</textarea></label>
            @if($errors->any())
                <div class="vc-alert vc-alert--error"><strong>Please check your details.</strong></div>
            @endif
            <button class="vc-btn vc-btn--primary" type="submit">Submit Message</button>
        </form>
    </div>
</section>

<x-location-map />
<x-google-reviews :reviews="$reviews" title="Trusted by Patients Across PCMC" description="Recent patient experiences with our surgical, diagnostic, and hospital support teams." />
<x-page-cta page-source="contact_page_cta" title="Prefer to Book" accent="Directly?" description="Use our quick appointment form and a care coordinator will contact you to confirm the slot." />

<style>
@media(max-width:900px){.vc-page-atmosphere>.vc-container{grid-template-columns:1fr!important}}
</style>
@endsection
