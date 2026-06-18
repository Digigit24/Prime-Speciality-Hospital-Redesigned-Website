@extends('layouts.app')

@section('title', 'Contact Us - Prime Speciality Hospital Moshi Pune')
@section('meta_description', 'Get directions, phone numbers, and operational hours for Prime Speciality Hospital in Moshi, PCMC. Book a consult online.')

@section('content')
<!-- Header Banner -->
<section style="background: var(--color-surface); padding-block: var(--space-4); border-bottom: 1px solid var(--color-border);">
    <div class="vc-container">
        <nav style="display: flex; gap: var(--space-2); font-size: var(--text-caption); color: var(--color-text-subtle);">
            <a href="{{ route('home') }}" style="text-decoration: none;">Home</a>
            <span>/</span>
            <span style="color: var(--color-text); font-weight: 600;">Contact Us</span>
        </nav>
    </div>
</section>

<!-- Contact Grid -->
<section class="vc-section vc-scroll-reveal">
    <div class="vc-container" style="display: grid; grid-template-columns: 1fr 1.2fr; gap: var(--space-12); align-items: start;">
        <!-- Contact Information Cards -->
        <div class="vc-stack vc-reveal-left" style="gap: var(--space-6);">
            <div>
                <span class="vc-eyebrow">Get Connected</span>
                <h1 style="font-family: var(--font-display); font-size: var(--text-h1); font-weight: 800; color: var(--color-text); margin: 0; line-height: 1.1;">
                    We are here to help.
                </h1>
                <p class="vc-lede" style="margin-top: var(--space-2);">Reach out for appointments, surgery scheduling, or insurance package approvals.</p>
            </div>
            
            <!-- Address Card -->
            <div class="vc-card" style="background: #fff; border-color: var(--color-border-strong); display: flex; gap: var(--space-4); align-items: start;">
                <span class="vc-icon" style="width: 2.5rem; height: 2.5rem; flex-shrink: 0; font-size: 1rem;">📍</span>
                <div>
                    <h3 style="margin: 0 0 var(--space-2); font-family: var(--font-display); font-size: var(--text-h6); font-weight: 700;">Hospital Address</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.6; margin: 0;">
                        Prime Speciality Hospital, Nisarg Vatika, Phase 2, Dehu - Moshi Road, Near Ramdev Dhaba, Borahadewadi, Moshi, Pimpri-Chinchwad, Pune 412105
                    </p>
                </div>
            </div>

            <!-- Phone & Mail Card -->
            <div class="vc-card" style="background: #fff; border-color: var(--color-border-strong); display: flex; gap: var(--space-4); align-items: start;">
                <span class="vc-icon vc-icon--care" style="width: 2.5rem; height: 2.5rem; flex-shrink: 0; font-size: 1rem;">📞</span>
                <div>
                    <h3 style="margin: 0 0 var(--space-2); font-family: var(--font-display); font-size: var(--text-h6); font-weight: 700;">Phone & Mail</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.6; margin: 0;">
                        <strong>Mobile:</strong> <a href="tel:7447441426" style="text-decoration:none; color:inherit;">+91-7447441426</a> / <a href="tel:9422668921" style="text-decoration:none; color:inherit;">9422668921</a><br>
                        <strong>Email:</strong> <a href="mailto:idrpankajnbhalerao@gmail.com" style="text-decoration:none; color:inherit;">idrpankajnbhalerao@gmail.com</a>
                    </p>
                </div>
            </div>

            <!-- Working Hours Card -->
            <div class="vc-card" style="background: #fff; border-color: var(--color-border-strong); display: flex; gap: var(--space-4); align-items: start;">
                <span class="vc-icon" style="width: 2.5rem; height: 2.5rem; flex-shrink: 0; font-size: 1rem; background: var(--blue-500)">⏰</span>
                <div>
                    <h3 style="margin: 0 0 var(--space-2); font-family: var(--font-display); font-size: var(--text-h6); font-weight: 700;">Hours of Operation</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.6; margin: 0;">
                        <strong>Monday - Saturday:</strong> 05:00 pm - 09:00 pm<br>
                        <em>Closed on Sundays (except Emergency)</em>
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Form Card -->
        <div class="vc-stack vc-reveal-right" style="gap: var(--space-6);">
            <form action="{{ route('contact.store') }}" method="POST" class="vc-card vc-stack" style="background: #fff; border: 1px solid var(--color-border-strong); padding: var(--space-8); box-shadow: var(--shadow-md);">
                @csrf
                <input type="hidden" name="page_source" value="contact_us_page">
                
                <h3 style="margin-top:0; font-family: var(--font-display); font-size: var(--text-h4); border-bottom: 1px solid var(--color-border); padding-bottom: 0.5rem; margin-bottom: var(--space-4);">Send Us a Message</h3>

                <label class="vc-field">
                    <span class="vc-label">Full Name <span style="color: var(--red-700);">*</span></span>
                    <input class="vc-input" name="name" placeholder="Your full name" required value="{{ old('name') }}">
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
                    <span class="vc-label">Subject / Purpose</span>
                    <select class="vc-select" name="message_prefix">
                        <option value="General Query">General Query / Question</option>
                        <option value="Appointment Request">Appointment Request</option>
                        <option value="Surgical Consultation">Surgical Consultation</option>
                        <option value="Insurance / Cashless approval">Insurance / Cashless TPA Approval</option>
                    </select>
                </label>

                <label class="vc-field">
                    <span class="vc-label">Message details <span style="color: var(--red-700);">*</span></span>
                    <textarea class="vc-textarea" name="message" placeholder="Provide details about your query..." required>{{ old('message') }}</textarea>
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
                    Submit Message <span>→</span>
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Location Map Section -->
<section class="vc-section" style="background: var(--color-surface); border-top: 1px solid var(--color-border);">
    <div class="vc-container">
        <div class="vc-stack" style="align-items: center; text-align: center; margin-bottom: var(--space-8);">
            <span class="vc-eyebrow">Hospital Location</span>
            <h2 class="vc-title">Find Us on Google Maps</h2>
            <p class="vc-lede">Located conveniently on Dehu-Moshi Road in Moshi, Pimpri-Chinchwad, Pune. Easy parking facilities available.</p>
        </div>

        <div style="width:100%; border: 1px solid var(--color-border-strong); border-radius: var(--radius-xl); overflow:hidden; box-shadow: var(--shadow-sm); height: 26rem; background:#fff;">
            <!-- Interactive iframe or static redirect -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.8078651874254!2d73.83404557579737!3d18.672522764952403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c75a40bbcc99%3A0xe2128e469c8f1eb3!2sPrime%20Speciality%20Hospital!5e0!3m2!1sen!2sin!4v1705600000000!5m2!1sen!2sin" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div style="text-align: center; margin-top: var(--space-4);">
            <a href="https://maps.app.goo.gl/yP95pQ1J8uT2gT4c6" target="_blank" class="vc-btn vc-btn--outline" style="display:inline-flex; align-items:center; gap:0.25rem;">
                Open in Google Maps App ↗
            </a>
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
