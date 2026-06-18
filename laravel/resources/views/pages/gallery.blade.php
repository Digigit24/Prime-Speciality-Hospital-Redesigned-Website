@extends('layouts.app')

@section('title', 'Hospital Gallery - Prime Speciality Hospital Moshi Pune')
@section('meta_description', 'View images of Prime Speciality Hospital in Moshi, Pune. Explore our advanced operation theatres, recovery rooms, and clean environment.')

@section('content')
<!-- Header Banner -->
<section style="background: var(--color-surface); padding-block: var(--space-4); border-bottom: 1px solid var(--color-border);">
    <div class="vc-container">
        <nav style="display: flex; gap: var(--space-2); font-size: var(--text-caption); color: var(--color-text-subtle);">
            <a href="{{ route('home') }}" style="text-decoration: none;">Home</a>
            <span>/</span>
            <span style="color: var(--color-text); font-weight: 600;">Gallery</span>
        </nav>
    </div>
</section>

<!-- Gallery Section -->
<section class="vc-section vc-scroll-reveal">
    <div class="vc-container">
        <div class="vc-stack" style="align-items: center; text-align: center; margin-bottom: var(--space-12);">
            <span class="vc-eyebrow">Our Facility</span>
            <h1 style="font-family: var(--font-display); font-size: var(--text-h1); font-weight: 800; color: var(--color-text); margin: 0; line-height: 1.1;">
                Prime Speciality Hospital Gallery
            </h1>
            <p class="vc-lede">Explore our modern operation theatres, patient wards, consulting chambers, and healthcare setup in Moshi.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-6);">
            <!-- Image 1 -->
            <div class="vc-card vc-fade-in-scale" style="padding: 0; overflow: hidden; border-color: var(--color-border-strong); background: #fff;">
                <div style="aspect-ratio: 4/3; background: #eaeaea; overflow: hidden; position: relative;">
                    <img src="https://primespecialityhospital.in/wp-content/uploads/2023/12/WhatsApp-Image-2023-12-15-at-1.16.36-PM-2.jpeg" alt="Consulting Room" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='https://placehold.co/600x450?text=Consulting+Room'">
                </div>
                <div style="padding: var(--space-4);">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700;">Consulting Chamber</h3>
                    <p style="font-size: var(--text-caption); color: var(--color-text-muted); margin-top: 0.25rem;">Clean and private patient consultation desk.</p>
                </div>
            </div>

            <!-- Image 2 -->
            <div class="vc-card vc-fade-in-scale" style="padding: 0; overflow: hidden; border-color: var(--color-border-strong); background: #fff;">
                <div style="aspect-ratio: 4/3; background: #eaeaea; overflow: hidden; position: relative;">
                    <img src="https://primespecialityhospital.in/wp-content/uploads/2023/12/WhatsApp-Image-2023-12-15-at-1.16.37-PM.jpeg" alt="Operation Theatre" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='https://placehold.co/600x450?text=Operation+Theatre'">
                </div>
                <div style="padding: var(--space-4);">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700;">Operation Theatre (OT)</h3>
                    <p style="font-size: var(--text-caption); color: var(--color-text-muted); margin-top: 0.25rem;">Equipped with high-precision laparoscopic imaging.</p>
                </div>
            </div>

            <!-- Image 3 -->
            <div class="vc-card vc-fade-in-scale" style="padding: 0; overflow: hidden; border-color: var(--color-border-strong); background: #fff;">
                <div style="aspect-ratio: 4/3; background: #eaeaea; overflow: hidden; position: relative;">
                    <img src="https://primespecialityhospital.in/wp-content/uploads/2023/12/WhatsApp-Image-2023-12-15-at-1.16.38-PM-1.jpeg" alt="In-patient Recovery Wards" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='https://placehold.co/600x450?text=Recovery+Wards'">
                </div>
                <div style="padding: var(--space-4);">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700;">Patient Recovery Ward</h3>
                    <p style="font-size: var(--text-caption); color: var(--color-text-muted); margin-top: 0.25rem;">Spacious, sanitized in-patient recovery environment.</p>
                </div>
            </div>

            <!-- Image 4 -->
            <div class="vc-card vc-fade-in-scale" style="padding: 0; overflow: hidden; border-color: var(--color-border-strong); background: #fff;">
                <div style="aspect-ratio: 4/3; background: #eaeaea; overflow: hidden; position: relative;">
                    <img src="https://primespecialityhospital.in/wp-content/uploads/2023/12/WhatsApp-Image-2023-12-15-at-1.16.38-PM.jpeg" alt="Reception Lobby" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='https://placehold.co/600x450?text=Reception+Lobby'">
                </div>
                <div style="padding: var(--space-4);">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700;">Reception Lobby</h3>
                    <p style="font-size: var(--text-caption); color: var(--color-text-muted); margin-top: 0.25rem;">A clean, welcoming lobby desk for registrations.</p>
                </div>
            </div>

            <!-- Image 5 -->
            <div class="vc-card vc-fade-in-scale" style="padding: 0; overflow: hidden; border-color: var(--color-border-strong); background: #fff;">
                <div style="aspect-ratio: 4/3; background: #eaeaea; overflow: hidden; position: relative;">
                    <img src="https://primespecialityhospital.in/wp-content/uploads/2023/12/WhatsApp-Image-2023-12-15-at-1.16.36-PM-1.jpeg" alt="ICU Setup" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='https://placehold.co/600x450?text=ICU+Setup'">
                </div>
                <div style="padding: var(--space-4);">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700;">Intensive Care Unit (ICU)</h3>
                    <p style="font-size: var(--text-caption); color: var(--color-text-muted); margin-top: 0.25rem;">Equipped for critical support and post-op monitoring.</p>
                </div>
            </div>

            <!-- Image 6 -->
            <div class="vc-card vc-fade-in-scale" style="padding: 0; overflow: hidden; border-color: var(--color-border-strong); background: #fff;">
                <div style="aspect-ratio: 4/3; background: #eaeaea; overflow: hidden; position: relative;">
                    <img src="https://primespecialityhospital.in/wp-content/uploads/2023/12/WhatsApp-Image-2023-12-15-at-1.16.37-PM-1.jpeg" alt="Diagnostics Desk" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='https://placehold.co/600x450?text=Diagnostics+Desk'">
                </div>
                <div style="padding: var(--space-4);">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700;">Pathology & Pharmacy</h3>
                    <p style="font-size: var(--text-caption); color: var(--color-text-muted); margin-top: 0.25rem;">Integrated service desk for diagnostics and medicines.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Appointment CTA -->
<section class="vc-section vc-scroll-reveal" style="background: var(--color-surface); border-top: 1px solid var(--color-border);">
    <div class="vc-container" style="text-align: center;">
        <div class="vc-stack" style="align-items: center; max-width: 36rem; margin-inline: auto; gap: var(--space-4);">
            <h2 class="vc-title">Schedule a Visit Today</h2>
            <p class="vc-lede">Request an appointment online or contact our reception desk to visit our facility in Moshi.</p>
            <a class="vc-btn vc-btn--primary" href="{{ url('/appointment') }}">Book Appointment</a>
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
        footer .vc-container {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        section .vc-container div[style*="grid-template-columns: repeat(3"] {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }
    @media (max-width: 600px) {
        section .vc-container div[style*="grid-template-columns: repeat(3"] {
            grid-template-columns: 1fr !important;
        }
    }
</style>
@endsection
