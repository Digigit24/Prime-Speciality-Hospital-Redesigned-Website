@extends('layouts.app')

@section('title', 'Thank You - Prime Speciality Hospital')
@section('meta_description', 'Your request has been received by Prime Speciality Hospital.')

@section('content')
<section class="vc-section vc-page-atmosphere" style="min-height:72vh;display:grid;align-items:center">
    <div class="vc-container" style="max-width:48rem;text-align:center">
        <div class="vc-card vc-stack vc-fade-in-scale" style="align-items:center;gap:var(--space-6);padding:clamp(2rem,7vw,5rem);border-color:var(--color-border-strong);background:rgb(255 255 255 / 92%);box-shadow:var(--shadow-xl)">
            <img src="{{ asset('assets/icons/icon-shield.svg') }}" alt="" style="width:5rem;height:5rem">
            <span class="vc-eyebrow">Request Received</span>
            <h1 style="margin:0;font:800 var(--text-h1)/1.1 var(--font-display)">Thank you. Our team will contact you shortly.</h1>
            <p class="vc-lede">Keep your phone available for appointment confirmation. For urgent concerns, call the hospital directly.</p>
            <div class="vc-cluster" style="justify-content:center">
                <a href="tel:+917447441426" class="vc-btn vc-btn--primary">Call Hospital</a>
                <a href="{{ route('home') }}" class="vc-btn vc-btn--outline">Return Home</a>
            </div>
        </div>
    </div>
</section>
@endsection
