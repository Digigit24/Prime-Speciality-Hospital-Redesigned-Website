@extends('layouts.app')

@section('title', 'Dr. Pankaj Bhalerao - Consultant Laparoscopy & General Surgeon in Pune')
@section('meta_description', 'Meet Dr. Pankaj Bhalerao, laparoscopic, general, GI, and laser surgeon in Moshi, Pune with 10+ years of surgical experience.')

@section('content')
<div class="vc-breadcrumbs">
    <div class="vc-container"><nav><a href="{{ route('home') }}">Home</a><span>/</span><strong>Dr. Pankaj Bhalerao</strong></nav></div>
</div>

<section class="vc-section vc-page-atmosphere">
    <div class="vc-container" style="display:grid;grid-template-columns:.82fr 1.18fr;gap:var(--space-12);align-items:center">
        <div class="vc-reveal-left" style="overflow:hidden;border:1px solid var(--color-border-strong);border-radius:var(--radius-xl);background:#fff;box-shadow:var(--shadow-xl)">
            <img src="{{ asset('assets/drpankajbhalerao.jpeg') }}" alt="Dr. Pankaj Bhalerao" style="width:100%;aspect-ratio:4/4.7;object-fit:cover;object-position:center top">
        </div>
        <div class="vc-stack vc-reveal-right" style="gap:var(--space-6)">
            <span class="vc-eyebrow">Consultant Surgeon</span>
            <h1 style="margin:0;font:800 var(--text-h1)/1.06 var(--font-display);letter-spacing:-.04em">Dr. Pankaj Bhalerao</h1>
            <p style="margin:0;color:var(--color-action);font-size:var(--text-body-lg);font-weight:800">MBBS, MS (General Surgery), FMAS</p>
            <p class="vc-lede">Specialist in general surgery, laparoscopy, gastrointestinal surgery, hernia repair, and laser proctology.</p>
            <div class="vc-treatment-points">
                <article class="vc-treatment-point"><strong>Clinical Experience</strong><p>More than 10 years of active surgical practice with 1,500+ completed operations.</p></article>
                <article class="vc-treatment-point"><strong>Medical Training</strong><p>MBBS and MS General Surgery through Maharashtra University of Health Sciences with training at B.J. Medical College, Pune.</p></article>
                <article class="vc-treatment-point"><strong>Minimal Access Focus</strong><p>Fellow of Minimal Access Surgeons of India with experience in camera-guided and daycare procedures.</p></article>
                <article class="vc-treatment-point"><strong>Patient Communication</strong><p>Clear explanation of diagnosis, available options, risks, expected recovery, and follow-up needs.</p></article>
            </div>
            <div class="vc-cluster">
                <a href="#booking-section" class="vc-btn vc-btn--primary vc-btn--lg">Book Consultation</a>
                <a href="https://wa.me/919422668921" target="_blank" rel="noopener" class="vc-btn vc-btn--outline vc-btn--lg">WhatsApp</a>
            </div>
        </div>
    </div>
</section>

<section class="vc-section vc-treatment-section vc-treatment-section--soft">
    <div class="vc-container">
        <div class="vc-section-heading">
            <span class="vc-eyebrow">Areas of Expertise</span>
            <h2 class="vc-title">Specialist surgical care</h2>
            <p class="vc-lede">Consultation and surgery are planned around the diagnosis, patient health, and least invasive safe option.</p>
        </div>
        <div class="vc-treatment-signs">
            @foreach(['Laparoscopic appendix and gallbladder surgery','Open and laparoscopic hernia repair','Laser treatment for piles, fistula, and fissure','Upper GI endoscopy and digestive evaluation','Breast and thyroid surgical assessment','General and emergency surgical care'] as $item)
                <div class="vc-treatment-sign vc-fade-in-scale">{{ $item }}</div>
            @endforeach
        </div>
    </div>
</section>

<x-google-reviews :reviews="$reviews" title="Patient Feedback" description="Experiences shared by patients treated under Dr. Pankaj Bhalerao and the Prime team." />

<x-page-cta
    page-source="doctor_profile_page"
    title="Consult Dr. Pankaj"
    accent="Bhalerao"
    description="Request a specialist opinion, diagnostic review, or surgical consultation at Prime Speciality Hospital."
/>

<style>
@media(max-width:900px){
    .vc-page-atmosphere>.vc-container{grid-template-columns:1fr!important}
}
</style>
@endsection
