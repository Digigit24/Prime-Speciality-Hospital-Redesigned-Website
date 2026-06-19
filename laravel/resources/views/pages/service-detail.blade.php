@extends('layouts.app')

@php
    $treatment = config('treatments.'.$page->slug, config('treatments.laparoscopy'));
@endphp

@section('title', $page->title . ' Treatment in Moshi, Pune | Prime Speciality Hospital')
@section('meta_description', $page->meta_description ?? $treatment['summary'])

@section('content')
<div class="vc-breadcrumbs">
    <div class="vc-container">
        <nav aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>/</span>
            <a href="{{ route('home') }}#treatments-section">Treatments</a>
            <span>/</span>
            <strong>{{ $treatment['title'] }}</strong>
        </nav>
    </div>
</div>

<section class="vc-treatment-hero">
    <div class="vc-container vc-treatment-hero__grid">
        <div class="vc-stack vc-treatment-hero__copy">
            <span class="vc-eyebrow">{{ $treatment['eyebrow'] }}</span>
            <h1>Advanced <span>{{ $treatment['title'] }}</span> Care</h1>
            <p class="vc-treatment-hero__summary">{{ $treatment['summary'] }}</p>

            <div class="vc-treatment-hero__highlights">
                @foreach($treatment['highlights'] as $highlight)
                    <div class="vc-treatment-hero__highlight">{{ $highlight }}</div>
                @endforeach
            </div>

            <div class="vc-cluster">
                <a href="#booking-section" class="vc-btn vc-btn--primary vc-btn--lg">Book Appointment</a>
                <a href="tel:+917447441426" class="vc-btn vc-btn--outline vc-btn--lg">Speak to Our Team</a>
            </div>
        </div>

        <div class="vc-treatment-hero__visual vc-reveal-right">
            <img
                src="{{ asset($treatment['image']) }}"
                alt="{{ $treatment['image_alt'] }}"
                fetchpriority="high"
            >
            <div class="vc-treatment-hero__badge">Specialist-led surgical care</div>
        </div>
    </div>
</section>

<div class="vc-container vc-treatment-stats">
    <div class="vc-treatment-stats__grid">
        @foreach($treatment['facts'] as $label => $value)
            <div class="vc-treatment-stat">
                <span>{{ $label }}</span>
                <strong>{{ $value }}</strong>
            </div>
        @endforeach
    </div>
</div>

<section class="vc-section vc-treatment-section vc-treatment-section--atmosphere">
    <div class="vc-container vc-treatment-intro">
        <div class="vc-treatment-intro__lead vc-reveal-left">
            <span class="vc-eyebrow">Understanding the Condition</span>
            <h2 class="vc-title">{{ $treatment['overview_title'] }}</h2>
            <p>{{ $treatment['overview'] }}</p>
        </div>

        <div class="vc-treatment-points">
            @foreach($treatment['points'] as $point)
                <article class="vc-treatment-point vc-fade-in-scale">
                    <strong>{{ $point['title'] }}</strong>
                    <p>{{ $point['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="vc-section vc-treatment-section vc-treatment-section--soft">
    <div class="vc-container">
        <div class="vc-section-heading">
            <span class="vc-eyebrow">When to Seek Assessment</span>
            <h2 class="vc-title">Symptoms and warning signs</h2>
            <p class="vc-lede">Symptoms can overlap with other conditions. A clinical examination is needed for diagnosis and treatment planning.</p>
        </div>

        <div class="vc-treatment-signs">
            @foreach($treatment['signs'] as $sign)
                <div class="vc-treatment-sign vc-fade-in-scale">{{ $sign }}</div>
            @endforeach
        </div>
    </div>
</section>

<section class="vc-section vc-treatment-section">
    <div class="vc-container">
        <div class="vc-section-heading">
            <span class="vc-eyebrow">Your Care Pathway</span>
            <h2 class="vc-title">From diagnosis to recovery</h2>
            <p class="vc-lede">Every treatment plan is adjusted to the diagnosis, severity, medical history, and individual recovery needs.</p>
        </div>

        <div class="vc-treatment-pathway">
            @foreach($treatment['pathway'] as $index => $step)
                <article class="vc-treatment-pathway__step {{ $index === 0 ? 'vc-reveal-left' : ($index === 2 ? 'vc-reveal-right' : 'vc-fade-in-scale') }}">
                    <span>0{{ $index + 1 }}</span>
                    <h3>{{ $step['title'] }}</h3>
                    <p>{{ $step['text'] }}</p>
                </article>
            @endforeach
        </div>

        <div class="vc-medical-note">
            <strong>Medical review notice:</strong>
            This page provides general education and does not replace a consultation. Procedure choice, timing, hospital stay, and recovery vary according to diagnosis and patient health.
        </div>
    </div>
</section>

<section class="vc-section vc-treatment-section vc-treatment-section--atmosphere">
    <div class="vc-container">
        <div class="vc-section-heading">
            <span class="vc-eyebrow">Clear Answers</span>
            <h2 class="vc-title">Frequently asked questions</h2>
        </div>

        <div class="vc-treatment-faqs">
            @foreach($treatment['faqs'] as $faq)
                <details class="vc-fade-in-scale">
                    <summary>{{ $faq['q'] }}</summary>
                    <p>{{ $faq['a'] }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>

<x-google-reviews
    :reviews="$reviews"
    title="Patient Experiences at Prime"
    description="Feedback from patients who received surgical and diagnostic care under our team."
/>

<x-location-map compact />

<x-page-cta
    id="booking-section"
    :page-source="'treatment_page_'.$page->slug"
    title="Book Your"
    accent="Specialist Assessment"
    :description="'Request a consultation for '.$treatment['title'].' with our surgical team in Moshi.'"
    :treatment="$treatment['title']"
/>
@endsection
