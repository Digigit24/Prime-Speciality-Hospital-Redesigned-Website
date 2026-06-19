@extends('layouts.app')

@section('title', 'About Us - Prime Speciality Hospital & Dr. Pankaj Bhalerao Moshi Pune')
@section('meta_description', 'Meet Dr. Pankaj Bhalerao and explore Prime Speciality Hospital in Moshi, PCMC. Advanced laparoscopy, laser surgery, ICU, diagnostics, and daycare care.')

@section('content')
<div class="vc-breadcrumbs">
    <div class="vc-container"><nav><a href="{{ route('home') }}">Home</a><span>/</span><strong>About Us</strong></nav></div>
</div>

<section class="vc-section vc-page-atmosphere" id="doctor-section">
    <div class="vc-container" style="display:grid;grid-template-columns:.86fr 1.14fr;gap:var(--space-12);align-items:center">
        <div class="vc-stack vc-reveal-left">
            <div style="overflow:hidden;border:1px solid var(--color-border-strong);border-radius:var(--radius-xl);background:#fff;box-shadow:var(--shadow-xl)">
                <img src="{{ asset('assets/drpankajbhalerao.jpeg') }}" alt="Dr. Pankaj Bhalerao" class="vc-reveal-image" style="width:100%;aspect-ratio:4/4.5;object-fit:cover;object-position:center top">
            </div>
        </div>
        <div class="vc-stack vc-reveal-right" style="gap:var(--space-6)">
            <span class="vc-eyebrow">Primary Consultant Surgeon</span>
            <h1 style="margin:0;font:800 var(--text-h1)/1.06 var(--font-display);letter-spacing:-.04em">Dr. Pankaj Bhalerao</h1>
            <p style="margin:0;color:var(--color-action);font-size:var(--text-body-lg);font-weight:800">MBBS, MS (General Surgery), FMAS</p>
            <p class="vc-lede">General, laparoscopic, gastrointestinal, and laser surgeon with more than 10 years of clinical experience in Pimpri-Chinchwad, Pune.</p>
            <p style="margin:0;color:var(--color-text-muted)">Dr. Bhalerao trained at B.J. Medical College and Sassoon General Hospital, Pune, and is a Fellow of the Association of Minimal Access Surgeons of India. His practice focuses on precise diagnosis, minimally invasive surgery, transparent counselling, and guided recovery.</p>
            <div class="vc-cluster">
                <span class="vc-badge">Laparoscopy</span>
                <span class="vc-badge">Hernia Repair</span>
                <span class="vc-badge">Laser Proctology</span>
                <span class="vc-badge">GI Surgery</span>
                <span class="vc-badge">General Surgery</span>
            </div>
            <div class="vc-cluster">
                <a href="#booking-section" class="vc-btn vc-btn--primary">Book Consultation</a>
                <a href="tel:+917447441426" class="vc-btn vc-btn--outline">Call Hospital</a>
            </div>
        </div>
    </div>
</section>

<section class="vc-section vc-scroll-reveal" style="padding-block:var(--space-10);background:#0b1736;color:#fff">
    <div class="vc-container vc-stats-grid">
        @foreach([['10+','Years of Experience'],['1,500+','Successful Surgeries'],['20+','Specialised Procedures'],['98%','Patient Satisfaction']] as [$value,$label])
            <div class="vc-stat" style="flex-direction:column;text-align:center">
                <strong class="vc-stat__value" style="color:var(--blue-400)">{{ $value }}</strong>
                <span class="vc-stat__label" style="color:var(--gray-300)">{{ $label }}</span>
            </div>
        @endforeach
    </div>
</section>

<section class="vc-section vc-treatment-section vc-treatment-section--atmosphere" id="hospital-section">
    <div class="vc-container vc-treatment-intro">
        <div class="vc-treatment-intro__lead vc-reveal-left">
            <span class="vc-eyebrow">Prime Speciality Hospital</span>
            <h2 class="vc-title">Surgical care under one roof</h2>
            <p>Our Moshi facility combines consultation, diagnostics, modular operation theatre support, ICU monitoring, private recovery, pharmacy, and insurance coordination.</p>
        </div>
        <div class="vc-reveal-right" style="overflow:hidden;border:1px solid var(--color-border-strong);border-radius:var(--radius-xl);box-shadow:var(--shadow-xl)">
            <img src="{{ asset('assets/prime_hospital_facade.png') }}" alt="Prime Speciality Hospital facility" style="width:100%;aspect-ratio:4/3;object-fit:cover">
        </div>
    </div>

    <div class="vc-container" style="margin-top:var(--space-12)">
        <div class="vc-treatment-points">
            @foreach([
                ['Modern Surgical Setup','High-definition laparoscopy and laser systems support precise minimally invasive procedures.'],
                ['Complete Diagnostics','Clinical assessment, laboratory support, scans, endoscopy, and surgical planning are coordinated together.'],
                ['Patient-First Recovery','Daycare pathways, pain control, private recovery, and clear post-operative instructions support safer healing.'],
                ['Transparent Coordination','Our team assists with scheduling, admission, pharmacy, billing, and eligible cashless insurance processes.']
            ] as [$title,$text])
                <article class="vc-treatment-point vc-fade-in-scale"><strong>{{ $title }}</strong><p>{{ $text }}</p></article>
            @endforeach
        </div>
    </div>
</section>

<x-google-reviews
    :reviews="$reviews"
    title="Our Patients Say It Best"
    description="Verified feedback from patients who received laparoscopic, laser, and general surgical care."
/>

<x-location-map />

<x-page-cta
    page-source="about_page_cta"
    title="Schedule Your"
    accent="Consultation"
    description="Meet our surgical team and receive a clear diagnosis, treatment plan, and recovery pathway."
/>

<style>
@media(max-width:900px){
    #doctor-section>.vc-container{grid-template-columns:1fr!important}
}
</style>
@endsection
