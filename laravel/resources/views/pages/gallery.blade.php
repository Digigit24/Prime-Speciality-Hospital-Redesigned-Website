@extends('layouts.app')

@section('title', 'Hospital Gallery - Prime Speciality Hospital Moshi Pune')
@section('meta_description', 'Explore Prime Speciality Hospital consultation rooms, operation theatre, recovery wards, ICU, reception, diagnostics, and pharmacy.')

@section('content')
<div class="vc-breadcrumbs">
    <div class="vc-container"><nav><a href="{{ route('home') }}">Home</a><span>/</span><strong>Gallery</strong></nav></div>
</div>

<section class="vc-section vc-page-atmosphere">
    <div class="vc-container">
        <div class="vc-section-heading">
            <span class="vc-eyebrow">Our Facility</span>
            <h1 style="margin:0;font:800 var(--text-h1)/1.06 var(--font-display);letter-spacing:-.04em">A closer look at Prime Speciality Hospital.</h1>
            <p class="vc-lede">Consulting, surgery, monitoring, recovery, diagnostics, and pharmacy services are coordinated within our Moshi facility.</p>
        </div>

        @php
            $gallery = [
                ['WhatsApp-Image-2023-12-15-at-1.16.36-PM-2.jpeg','Consulting Chamber','A private environment for examination and treatment planning.'],
                ['WhatsApp-Image-2023-12-15-at-1.16.37-PM.jpeg','Operation Theatre','A surgical setup supporting high-definition laparoscopy and monitored procedures.'],
                ['WhatsApp-Image-2023-12-15-at-1.16.38-PM-1.jpeg','Patient Recovery Ward','Clean, monitored spaces for post-operative recovery and family support.'],
                ['WhatsApp-Image-2023-12-15-at-1.16.38-PM.jpeg','Reception Lobby','A clear arrival and registration point for patients and attendants.'],
                ['WhatsApp-Image-2023-12-15-at-1.16.36-PM-1.jpeg','Intensive Care Unit','Monitoring and critical-care support for patients who require closer observation.'],
                ['WhatsApp-Image-2023-12-15-at-1.16.37-PM-1.jpeg','Diagnostics and Pharmacy','Integrated support for investigations, reports, prescriptions, and medicines.'],
            ];
        @endphp

        <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:var(--space-6)" class="vc-gallery-grid">
            @foreach($gallery as [$file,$title,$text])
                <article class="vc-card vc-fade-in-scale" style="padding:0;overflow:hidden;background:rgb(255 255 255 / 92%);border-color:var(--color-border-strong);box-shadow:var(--shadow-md)">
                    <img src="https://primespecialityhospital.in/wp-content/uploads/2023/12/{{ $file }}" alt="{{ $title }}" loading="lazy" style="width:100%;aspect-ratio:4/3;object-fit:cover" onerror="this.src='{{ asset('assets/prime_hospital_facade.png') }}'">
                    <div style="padding:var(--space-5,1.25rem)"><h2 style="margin:0 0 var(--space-2);font:700 var(--text-h5)/1.25 var(--font-display)">{{ $title }}</h2><p style="margin:0;color:var(--color-text-muted);font-size:var(--text-body-sm)">{{ $text }}</p></div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<x-google-reviews :reviews="$reviews" title="Care Beyond the Facility" description="The environment matters, but patient communication, treatment quality, and recovery support matter more." />
<x-page-cta page-source="gallery_page_cta" title="Schedule a Hospital" accent="Visit" description="Request a consultation or speak with our reception team before visiting the facility." />

<style>
@media(max-width:900px){.vc-gallery-grid{grid-template-columns:repeat(2,minmax(0,1fr))!important}}
@media(max-width:600px){.vc-gallery-grid{grid-template-columns:1fr!important}}
</style>
@endsection
