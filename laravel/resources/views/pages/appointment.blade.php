@extends('layouts.app')

@section('title', 'Book Appointment - Prime Speciality Hospital Moshi')
@section('meta_description', 'Request a surgical consultation or diagnostic appointment at Prime Speciality Hospital in Moshi, Pune.')

@section('content')
<div class="vc-breadcrumbs">
    <div class="vc-container"><nav><a href="{{ route('home') }}">Home</a><span>/</span><strong>Book Appointment</strong></nav></div>
</div>

<section class="vc-section vc-page-atmosphere">
    <div class="vc-container">
        <div class="vc-section-heading">
            <span class="vc-eyebrow">Secure Booking</span>
            <h1 style="margin:0;font:800 var(--text-h1)/1.06 var(--font-display);letter-spacing:-.04em">Plan your consultation with confidence.</h1>
            <p class="vc-lede">Submit a request online. Our coordinator will call to confirm the doctor, date, time, and any records you should bring.</p>
        </div>
        <div class="vc-treatment-pathway">
            <article class="vc-treatment-pathway__step vc-reveal-left"><span>01</span><h3>Send Request</h3><p>Share your contact details, symptoms, and preferred appointment timing.</p></article>
            <article class="vc-treatment-pathway__step vc-fade-in-scale"><span>02</span><h3>Coordinator Call</h3><p>Our team confirms the appropriate specialist and available consultation slot.</p></article>
            <article class="vc-treatment-pathway__step vc-reveal-right"><span>03</span><h3>Visit Prepared</h3><p>Bring relevant reports, prescriptions, scans, and insurance documents if applicable.</p></article>
        </div>
        <div class="vc-medical-note"><strong>Urgent symptoms:</strong> Severe abdominal pain, heavy bleeding, breathing difficulty, repeated vomiting, or sudden worsening should not wait for an online response. Call the hospital or seek emergency care.</div>
    </div>
</section>

<x-page-cta page-source="appointment_page" title="Request Your" accent="Appointment" description="Choose a department and preferred date. Our team will confirm the final consultation slot by phone." />
<x-location-map compact />
@endsection
