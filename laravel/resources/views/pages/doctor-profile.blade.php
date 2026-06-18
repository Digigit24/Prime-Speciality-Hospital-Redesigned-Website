@extends('layouts.app')

@section('title', 'Dr. Pankaj Bhalerao - Consultant Laparoscopy & General Surgeon in Pune')
@section('meta_description', 'Meet Dr. Pankaj Bhalerao, a leading laparoscopic, general, and GI surgeon in Moshi, Pune. 10+ years experience, fellow of MASI, BJ Medical College alumni.')

@section('content')
<!-- Header Banner -->
<section style="background: var(--color-surface); padding-block: var(--space-4); border-bottom: 1px solid var(--color-border);">
    <div class="vc-container">
        <nav style="display: flex; gap: var(--space-2); font-size: var(--text-caption); color: var(--color-text-subtle);">
            <a href="{{ route('home') }}" style="text-decoration: none;">Home</a>
            <span>/</span>
            <span style="color: var(--color-text); font-weight: 600;">Dr. Pankaj Bhalerao</span>
        </nav>
    </div>
</section>

<!-- Doctor Main Section -->
<section class="vc-section vc-scroll-reveal">
    <div class="vc-container" style="display: grid; grid-template-columns: 0.9fr 1.1fr; gap: var(--space-12); align-items: flex-start;">
        <!-- Image & Details Card -->
        <div class="vc-stack vc-reveal-left" style="gap: var(--space-6);">
            <div style="border-radius: var(--radius-xl); overflow: hidden; border: 1px solid var(--color-border-strong); box-shadow: var(--shadow-md); background: #fff;">
                <img src="{{ asset('assets/drpankajbhalerao.jpeg') }}" alt="Dr. Pankaj Bhalerao" class="vc-reveal-image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
            
            <div class="vc-card vc-fade-in-scale" style="background: #fff; border-color: var(--color-border-strong);">
                <h3 style="margin-top: 0; font-family: var(--font-display); font-size: var(--text-body-lg); border-bottom: 1px solid var(--color-border); padding-bottom: 0.5rem; margin-bottom: var(--space-3);">Specialities</h3>
                <div class="vc-cluster" style="gap: var(--space-2);">
                    <span class="vc-badge">Laparoscopy</span>
                    <span class="vc-badge">Hernia Surgery</span>
                    <span class="vc-badge">Laser Piles Treatment</span>
                    <span class="vc-badge">GI Surgery</span>
                    <span class="vc-badge">Colorectal Surgery</span>
                    <span class="vc-badge">General Surgery</span>
                </div>
            </div>
        </div>

        <!-- Bio Details -->
        <div class="vc-stack vc-reveal-right" style="gap: var(--space-6);">
            <div>
                <span class="vc-eyebrow">Consultant Surgeon</span>
                <h1 style="font-family: var(--font-display); font-size: var(--text-h1); font-weight: 800; color: var(--color-text); margin: 0; line-height: 1.1;">
                    Dr. Pankaj Bhalerao
                </h1>
                <p style="font-size: var(--text-body-lg); color: var(--color-action); font-weight: 700; margin-top: 0.5rem;">
                    MBBS, MS (General Surgery), FMAS
                </p>
            </div>
            
            <div class="vc-stack" style="gap: var(--space-4); border-top: 1px solid var(--color-border); padding-top: var(--space-4);">
                <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h4);">About the Doctor</h3>
                <p style="color: var(--color-text-muted); font-size: var(--text-body-md); line-height: 1.65; margin: 0;">
                    Dr. Pankaj Bhalerao is a highly skilled General, Laparoscopic, Gastrointestinal, and Laser Piles Surgeon practicing in Pimpri-Chinchwad, Pune. With over 10 years of surgical experience, he offers compassionate care and high-precision treatments to his patients at Vedant Multispeciality Hospital and Prime Speciality Hospital.
                </p>
                <p style="color: var(--color-text-muted); font-size: var(--text-body-md); line-height: 1.65; margin: 0;">
                    He completed his MBBS from Maharashtra University of Health Sciences, Nashik in 2008 (studies conducted at B.J. Medical College, Pune) and achieved his MS in General Surgery from Maharashtra University of Health Sciences, Nashik in 2012 (conducted at B.J. Medical College, Pune). He is a prestigious Fellow of Minimal Access Surgeons of India (FMAS).
                </p>
            </div>

            <!-- Achievements & Credentials -->
            <div class="vc-stack" style="gap: var(--space-4); border-top: 1px solid var(--color-border); padding-top: var(--space-4);">
                <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h4);">Achievements & Experience</h3>
                <ul class="vc-service-body" style="list-style: none; padding-left: 0; margin: 0; display: flex; flex-direction: column; gap: var(--space-2);">
                    <li style="position: relative; padding-left: var(--space-6); color: var(--color-text-muted); font-size: var(--text-body-md);">
                        <span style="position: absolute; left: 0; color: var(--color-care); font-weight: 800;">✓</span>
                        Active Fellow of Minimal Access Surgeons of India (FMAS)
                    </li>
                    <li style="position: relative; padding-left: var(--space-6); color: var(--color-text-muted); font-size: var(--text-body-md);">
                        <span style="position: absolute; left: 0; color: var(--color-care); font-weight: 800;">✓</span>
                        Alumni of the prestigious B.J. Medical College, Pune
                    </li>
                    <li style="position: relative; padding-left: var(--space-6); color: var(--color-text-muted); font-size: var(--text-body-md);">
                        <span style="position: absolute; left: 0; color: var(--color-care); font-weight: 800;">✓</span>
                        More than 10 years of active surgical practice with 1,500+ successful operations
                    </li>
                    <li style="position: relative; padding-left: var(--space-6); color: var(--color-text-muted); font-size: var(--text-body-md);">
                        <span style="position: absolute; left: 0; color: var(--color-care); font-weight: 800;">✓</span>
                        Expertise in advanced sutureless laser operations for piles and fistulas (allowing patients to go home same day)
                    </li>
                </ul>
            </div>

            <!-- Actions -->
            <div class="vc-cluster" style="border-top: 1px solid var(--color-border); padding-top: var(--space-6);">
                <a class="vc-btn vc-btn--primary vc-btn--lg" href="https://wa.me/919422668921" target="_blank">
                    Connect on WhatsApp
                </a>
                <a class="vc-btn vc-btn--outline vc-btn--lg" href="tel:+919422668921">
                    Call: +91 94226 68921
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call to action booking form -->
<section class="vc-section vc-scroll-reveal" style="background: var(--color-surface); border-top: 1px solid var(--color-border);">
    <div class="vc-container" style="max-width: 45rem; margin-inline: auto; text-align: center;">
        <div class="vc-stack" style="gap: var(--space-4);">
            <h2 class="vc-title">Schedule a Consultation with Dr. Pankaj Bhalerao</h2>
            <p class="vc-lede">Request an appointment at our Moshi clinic or ask a surgical question.</p>
            
            <form action="{{ route('contact.store') }}" method="POST" class="vc-card vc-stack vc-fade-in-scale" style="background: #fff; border: 1px solid var(--color-border-strong); text-align: left; margin-top: var(--space-6); box-shadow: var(--shadow-md);">
                @csrf
                <input type="hidden" name="page_source" value="doctor_profile_page">
                
                <div class="vc-grid" style="grid-template-columns: repeat(2, 1fr); gap: var(--space-4); width: 100%;">
                    <label class="vc-field">
                        <span class="vc-label">Patient Name <span style="color: var(--red-700);">*</span></span>
                        <input class="vc-input" name="name" placeholder="Full name" required value="{{ old('name') }}">
                    </label>
                    <label class="vc-field">
                        <span class="vc-label">Phone Number <span style="color: var(--red-700);">*</span></span>
                        <input class="vc-input" name="phone" placeholder="e.g. +91 74474 41426" required value="{{ old('phone') }}">
                    </label>
                </div>
                
                <label class="vc-field" style="width: 100%;">
                    <span class="vc-label">Email Address <span style="color: var(--red-700);">*</span></span>
                    <input class="vc-input" type="email" name="email" placeholder="email@example.com" required value="{{ old('email') }}">
                </label>

                <input type="hidden" name="message_prefix" value="Doctor Profile Consultation">
                
                <label class="vc-field" style="width: 100%;">
                    <span class="vc-label">Your message or preferred date <span style="color: var(--red-700);">*</span></span>
                    <textarea class="vc-textarea" name="message" placeholder="Provide symptoms or booking slot preferences..." required>Preferred Slot: Requesting consultation slot with Dr. Pankaj Bhalerao.</textarea>
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
                    Book Consultation <span>→</span>
                </button>
            </form>
        </div>
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
