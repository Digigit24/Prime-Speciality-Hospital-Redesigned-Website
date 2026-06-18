@extends('layouts.app')

@section('title', 'Prime Speciality Hospital - Dr. Pankaj Bhalerao | Laparoscopy & GI Surgery')

@section('content')
<!-- Hero Section -->
<section class="vc-hero" style="min-height: 42rem; padding-block: var(--space-12); border-bottom: 1px solid var(--color-border); display: flex; align-items: center;">
    <div class="vc-container vc-hero__grid" style="grid-template-columns: 1.15fr 0.85fr; gap: var(--space-12); align-items: center;">
        
        <!-- Left Side: Hero content -->
        <div class="vc-stack" style="gap: var(--space-6);">
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--green-50); border: 1px solid var(--green-200); padding: 0.35rem 0.75rem; border-radius: var(--radius-round); width: fit-content;">
                <span style="width: 0.5rem; height: 0.5rem; background: var(--green-500); border-radius: 50%;"></span>
                <span style="font-size: var(--text-caption); font-weight: 700; color: var(--green-800); text-transform: uppercase; letter-spacing: 0.05em;">Advanced Care. Personalised for You.</span>
            </div>
            
            <h1 style="margin: 0; font-family: var(--font-display); font-size: clamp(2.75rem, 5vw, 4.5rem); line-height: 1.05; font-weight: 800; color: var(--color-text); letter-spacing: -0.04em;">
                ADVANCED SURGERY.<br>
                <span style="color: var(--color-action); background: linear-gradient(90deg, var(--blue-600), var(--blue-400)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">SIMPLIFIED.</span>
            </h1>
            
            <p class="vc-lede" style="font-size: var(--text-body-xl); line-height: 1.6; max-width: 32rem; color: var(--color-text-muted);">
                Minimally invasive care designed around faster recovery and patient comfort. Guided by over a decade of clinical excellence under Dr. Pankaj Bhalerao.
            </p>
            
            <div class="vc-cluster" style="gap: var(--space-4); margin-top: 0.5rem;">
                <a class="vc-btn vc-btn--primary vc-btn--lg" href="#booking-section" style="box-shadow: 0 10px 25px rgba(7, 94, 230, 0.25);">
                    Book Appointment <span style="margin-left: 0.25rem;">➔</span>
                </a>
                <a class="vc-btn vc-btn--outline vc-btn--lg" href="#treatments-section" style="border-color: var(--blue-300); color: var(--color-action);">
                    Explore Treatments <span style="margin-left: 0.25rem;">➔</span>
                </a>
            </div>
            
            <!-- Patient Trust Metrics -->
            <div style="display: flex; align-items: center; gap: var(--space-4); border-top: 1px solid var(--color-border); padding-top: var(--space-4); margin-top: var(--space-4);">
                <!-- Avatars overlapping -->
                <div style="display: flex; align-items: center; margin-right: 0.25rem;">
                    <div style="width: 2.25rem; height: 2.25rem; border-radius: 50%; border: 2px solid #fff; overflow: hidden; background: var(--blue-50); margin-left: 0; z-index: 5; display: flex; align-items: center; justify-content: center; padding: 0.35rem;">
                        <img src="{{ asset('assets/icons/icon-doctor.svg') }}" style="width: 100%; height: 100%; object-fit: contain;" alt="Doctor Icon">
                    </div>
                    <div style="width: 2.25rem; height: 2.25rem; border-radius: 50%; border: 2px solid #fff; overflow: hidden; background: var(--green-50); margin-left: -0.5rem; z-index: 4; display: flex; align-items: center; justify-content: center; padding: 0.35rem;">
                        <img src="{{ asset('assets/icons/icon-shield.svg') }}" style="width: 100%; height: 100%; object-fit: contain;" alt="Shield Icon">
                    </div>
                    <div style="width: 2.25rem; height: 2.25rem; border-radius: 50%; border: 2px solid #fff; overflow: hidden; background: var(--blue-50); margin-left: -0.5rem; z-index: 3; display: flex; align-items: center; justify-content: center; padding: 0.35rem;">
                        <img src="{{ asset('assets/icons/icon-hospital.svg') }}" style="width: 100%; height: 100%; object-fit: contain;" alt="Hospital Icon">
                    </div>
                    <div style="width: 2.25rem; height: 2.25rem; border-radius: 50%; border: 2px solid #fff; overflow: hidden; background: var(--blue-600); color: #fff; margin-left: -0.5rem; z-index: 2; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; font-weight: 700;">
                        +15k
                    </div>
                </div>
                <div style="line-height: 1.25;">
                    <div style="display: flex; align-items: center; gap: 0.25rem;">
                        <strong style="font-size: var(--text-body-sm); color: var(--color-text);">15,000+ Happy Patients</strong>
                        <span style="color: #f59e0b; font-size: 0.9rem;">★★★★★</span>
                    </div>
                    <span style="font-size: var(--text-caption); color: var(--color-text-muted);">Verified clinical feedback & Google Reviews</span>
                </div>
            </div>
        </div>
        
        <!-- Right Side: Clinician & Biomorphic Aura -->
        <div class="vc-hero__visual vc-home-hero-art">
            <img
                class="vc-home-hero-art__aura"
                src="{{ asset('assets/hero/svg/hero-blob-frame.svg') }}"
                alt=""
                aria-hidden="true"
            >

            <div class="vc-home-hero-art__portrait">
                <img
                    src="{{ asset('assets/drpankajbhalerao.jpeg') }}"
                    alt="Dr. Pankaj Bhalerao, consultant laparoscopic and general surgeon"
                >
            </div>

            <div class="vc-home-hero-art__specialty vc-home-hero-art__specialty--top" aria-hidden="true">
                <span class="vc-home-hero-art__specialty-icon">◇</span>
                <span><strong>Laparoscopy</strong><small>Minimally invasive</small></span>
            </div>

            <div class="vc-home-hero-art__specialty vc-home-hero-art__specialty--side" aria-hidden="true">
                <span class="vc-home-hero-art__specialty-icon vc-home-hero-art__specialty-icon--care">✓</span>
                <span><strong>Faster recovery</strong><small>Patient-first care</small></span>
            </div>

            <div class="vc-home-hero-art__doctor-label">
                <strong>Dr. Pankaj Bhalerao</strong>
                <span>MS (General Surgery), FMAS</span>
            </div>

            <!-- Outer Orbit Ring -->
            <div class="vc-orbit vc-home-hero-art__legacy" style="position: relative; width: min(100%, 28rem); aspect-ratio: 1; border: 1.5px solid rgba(35, 116, 242, 0.25); border-radius: 50%; background: radial-gradient(circle, rgba(255, 255, 255, 0.9) 0%, rgba(219, 234, 254, 0.3) 60%, transparent 100%); display: flex; align-items: center; justify-content: center; box-shadow: var(--shadow-md);">
                
                <!-- Inner Ring -->
                <div style="position: absolute; width: 85%; height: 85%; border: 1px dashed rgba(22, 179, 100, 0.25); border-radius: 50%;"></div>
                
                <!-- Doctor Image Container -->
                <div style="position: relative; width: 75%; height: 75%; border-radius: 50%; overflow: hidden; border: 6px solid #fff; box-shadow: var(--shadow-lg); background: var(--gray-50);">
                    <img src="{{ asset('assets/drpankajbhalerao.jpeg') }}" alt="Dr. Pankaj Bhalerao" style="width: 100%; height: 100%; object-fit: cover; object-position: top center;">
                </div>

                <!-- Floating Specialty Badge 1 (Top Left) -->
                <div style="position: absolute; top: 5%; left: 5%; background: #fff; border: 1px solid var(--color-border-strong); padding: 0.5rem 0.75rem; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); display: flex; align-items: center; gap: 0.5rem; z-index: 10;">
                    <img src="{{ asset('assets/icons/icon-laparoscopy.svg') }}" style="width: 1.5rem; height: 1.5rem; object-fit: contain;" alt="Laparoscopy Icon">
                    <div style="line-height: 1.1;">
                        <strong style="display: block; font-size: var(--text-caption); color: var(--color-text);">Laparoscopy</strong>
                        <span style="font-size: 0.65rem; color: var(--color-text-subtle);">Minimally Invasive</span>
                    </div>
                </div>

                <!-- Floating Specialty Badge 2 (Bottom Right) -->
                <div style="position: absolute; bottom: 8%; right: 2%; background: #fff; border: 1px solid var(--color-border-strong); padding: 0.5rem 0.75rem; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); display: flex; align-items: center; gap: 0.5rem; z-index: 10;">
                    <img src="{{ asset('assets/icons/icon-piles.svg') }}" style="width: 1.5rem; height: 1.5rem; object-fit: contain;" alt="Laser Surgery Icon">
                    <div style="line-height: 1.1;">
                        <strong style="display: block; font-size: var(--text-caption); color: var(--color-text);">Laser Surgery</strong>
                        <span style="font-size: 0.65rem; color: var(--color-text-subtle);">Same Day Discharge</span>
                    </div>
                </div>

                <!-- Floating Doctor Label (Bottom Center) -->
                <div style="position: absolute; bottom: -5%; background: rgba(255, 255, 255, 0.95); border: 1px solid var(--color-border-strong); padding: 0.65rem 1.25rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); text-align: center; backdrop-filter: blur(8px); z-index: 15; min-width: 16rem;">
                    <strong style="display: block; font-size: var(--text-body-sm); color: var(--color-text);">Dr. Pankaj Bhalerao</strong>
                    <span style="display: block; font-size: var(--text-caption); color: var(--color-text-muted); font-weight: 500;">MS (General Surgery), FMAS</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Baseline Dark Stats Strip -->
<section class="vc-section vc-scroll-reveal" style="background: #0b1736; border-bottom: 1px solid rgba(255,255,255,0.1); padding-block: var(--space-8); color: #fff;">
    <div class="vc-container vc-stats-grid">
        <div style="text-align: center; display: flex; flex-direction: column; gap: var(--space-1);">
            <strong style="font-size: var(--text-display-lg); font-family: var(--font-display); line-height: 1; color: var(--blue-400);">10+</strong>
            <span style="font-size: var(--text-body-sm); color: var(--gray-300); font-weight: 500;">Years of Experience</span>
        </div>
        <div style="text-align: center; display: flex; flex-direction: column; gap: var(--space-1);">
            <strong style="font-size: var(--text-display-lg); font-family: var(--font-display); line-height: 1; color: var(--blue-400);">1,500+</strong>
            <span style="font-size: var(--text-body-sm); color: var(--gray-300); font-weight: 500;">Successful Surgeries</span>
        </div>
        <div style="text-align: center; display: flex; flex-direction: column; gap: var(--space-1);">
            <strong style="font-size: var(--text-display-lg); font-family: var(--font-display); line-height: 1; color: var(--blue-400);">20+</strong>
            <span style="font-size: var(--text-body-sm); color: var(--gray-300); font-weight: 500;">Specialised Procedures</span>
        </div>
        <div style="text-align: center; display: flex; flex-direction: column; gap: var(--space-1);">
            <strong style="font-size: var(--text-display-lg); font-family: var(--font-display); line-height: 1; color: var(--green-400);">98%</strong>
            <span style="font-size: var(--text-body-sm); color: var(--gray-300); font-weight: 500;">Patient Satisfaction</span>
        </div>
    </div>
</section>

<!-- About Doctor / Hospital Section -->
<section class="vc-section" style="padding-block: var(--space-16);">
    <div class="vc-container" style="display: grid; grid-template-columns: 1fr 1.2fr; gap: var(--space-12); align-items: center;">
        <div style="position: relative;" class="vc-reveal-left">
            <div style="border-radius: var(--radius-xl); overflow: hidden; border: 1px solid var(--color-border-strong); box-shadow: var(--shadow-md);">
                <img src="{{ asset('assets/prime_hospital_facade.png') }}" alt="Prime Speciality Hospital Facility" class="vc-reveal-image" style="width: 100%; height: auto; display: block;">
            </div>
        </div>
        <div class="vc-stack vc-reveal-right" style="gap: var(--space-6);">
            <h2 class="vc-title">Exceptional Care, Every Patient, Everyday.</h2>
            <p style="color: var(--color-text-muted); font-size: var(--text-body-md); line-height: 1.65; margin: 0;">
                Prime Speciality Hospital is the leading centre for advanced surgical treatments in Moshi, Bhosari, and Pimpri Chinchwad. Our facility is designed to support patient diagnostic scans and surgical operations under one roof, featuring a modern modular Operation Theatre, ICU setups, private recovery wards, in-house pathology, and a round-the-clock pharmacy.
            </p>
            <p style="color: var(--color-text-muted); font-size: var(--text-body-md); line-height: 1.65; margin: 0;">
                Our primary consultant, <strong>Dr. Pankaj Bhalerao</strong>, MS (General Surgery) from BJ Medical College Pune, FMAS, has over 10 years of experience in gastrointestinal laparoscopy and laser proctology, offering safe daycare options for piles and gallstones.
            </p>
            <div class="vc-cluster">
                <a class="vc-btn vc-btn--primary" href="{{ url('/about#doctor-section') }}">Consult Surgeon Credentials</a>
                <a class="vc-btn vc-btn--outline" href="{{ url('/about#hospital-section') }}">About Hospital Facility</a>
            </div>
        </div>
    </div>
</section>

<!-- Treatments Grid Section -->
<section class="vc-section vc-scroll-reveal" id="treatments-section" style="background: var(--color-surface); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border); padding-block: var(--space-20);">
    <div class="vc-container">
        <div class="vc-stack" style="align-items: center; text-align: center; margin-bottom: var(--space-12);">
            <span class="vc-eyebrow">Clinical Expertise</span>
            <h2 class="vc-title">Surgical Treatments We Provide</h2>
            <p class="vc-lede">Click on any procedure below to review clinical details, duration, recovery periods, and FAQs.</p>
        </div>

        <!-- Featured Treatments (Hierarchy Level 1) -->
        <div class="vc-featured-grid">
            <!-- Treatment 1: Laparoscopy (Featured) -->
            <article class="vc-card vc-reveal-left" style="background: linear-gradient(135deg, #fff 0%, var(--blue-50) 100%); border-color: var(--blue-200); display:flex; flex-direction:column; justify-content:space-between; height: 100%; padding: var(--space-8);">
                <div class="vc-stack" style="gap: var(--space-4);">
                    <img src="{{ asset('assets/icons/icon-laparoscopy.svg') }}" alt="Laparoscopy Icon" style="width: 4rem; height: 4rem; object-fit: contain;">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h4); font-weight: 800; color: var(--blue-900);">Laparoscopy</h3>
                    <p style="font-size: var(--text-body-md); color: var(--color-text-muted); line-height: 1.6; margin: 0;">
                        Minimally invasive keyhole surgeries utilizing advanced digital high-definition camera monitors to diagnose and remove diseased organs with exceptionally minor scarring, shorter hospital stays, and faster returns to active life.
                    </p>
                </div>
                <a href="{{ url('/laparoscopy') }}" class="vc-btn vc-btn--primary vc-btn--sm" style="width: fit-content; margin-top: var(--space-6);">Learn More ➔</a>
            </article>

            <!-- Treatment 2: Hernia Surgery (Featured) -->
            <article class="vc-card vc-fade-in-scale" style="background: linear-gradient(135deg, #fff 0%, var(--blue-50) 100%); border-color: var(--blue-200); display:flex; flex-direction:column; justify-content:space-between; height: 100%; padding: var(--space-8);">
                <div class="vc-stack" style="gap: var(--space-4);">
                    <img src="{{ asset('assets/icons/icon-hernia.svg') }}" alt="Hernia Surgery Icon" style="width: 4rem; height: 4rem; object-fit: contain;">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h4); font-weight: 800; color: var(--blue-900);">Hernia Surgery</h3>
                    <p style="font-size: var(--text-body-md); color: var(--color-text-muted); line-height: 1.6; margin: 0;">
                        Advanced tension-free mesh reinforcement for inguinal, umbilical, and incisional hernia repairs. We utilize laparoscopic keyhole methods to place medical-grade support mesh, minimizing post-operative pain and recurrence risk.
                    </p>
                </div>
                <a href="{{ url('/hernia') }}" class="vc-btn vc-btn--primary vc-btn--sm" style="width: fit-content; margin-top: var(--space-6);">Learn More ➔</a>
            </article>
        </div>

        <!-- Secondary Treatments (Hierarchy Level 2) -->
        <div class="vc-secondary-grid">
            <!-- Treatment 3: Laser Piles -->
            <article class="vc-card vc-reveal-right" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <img src="{{ asset('assets/icons/icon-piles.svg') }}" alt="Laser Piles Icon" style="width: 3.25rem; height: 3.25rem; object-fit: contain;">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Laser Piles</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Sutureless daycare laser treatment for hemorrhoids. Zero cuts, minimal bleeding, and same-day discharge.
                    </p>
                </div>
                <a href="{{ url('/hemorrhoids') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700; color: var(--color-action);">Learn More ➔</a>
            </article>

            <!-- Treatment 4: Gallbladder Stone -->
            <article class="vc-card vc-reveal-left" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <img src="{{ asset('assets/icons/icon-gallbladder.svg') }}" alt="Gallbladder Icon" style="width: 3.25rem; height: 3.25rem; object-fit: contain;">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Gallbladder</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Laparoscopic removal of the gallbladder (cholecystectomy) to resolve stones without open incisions.
                    </p>
                </div>
                <a href="{{ url('/gallbladder') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700; color: var(--color-action);">Learn More ➔</a>
            </article>

            <!-- Treatment 5: Appendicitis -->
            <article class="vc-card vc-fade-in-scale" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <img src="{{ asset('assets/icons/icon-appendicitis.svg') }}" alt="Appendicitis Icon" style="width: 3.25rem; height: 3.25rem; object-fit: contain;">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Appendicitis</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Emergency keyhole appendectomy to extract inflamed appendix tissues before rupture complications.
                    </p>
                </div>
                <a href="{{ url('/appendicitis') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700; color: var(--color-action);">Learn More ➔</a>
            </article>

            <!-- Treatment 6: Endoscopy -->
            <article class="vc-card vc-reveal-right" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <img src="{{ asset('assets/icons/icon-endoscopy.svg') }}" alt="Endoscopy Icon" style="width: 3.25rem; height: 3.25rem; object-fit: contain;">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Endoscopy</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Diagnostic visualization of the upper GI tract, stomach, and esophagus using flexible camera scopes.
                    </p>
                </div>
                <a href="{{ url('/endoscopy') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700; color: var(--color-action);">Learn More ➔</a>
            </article>

            <!-- Treatment 7: Breast Surgery -->
            <article class="vc-card vc-reveal-left" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <img src="{{ asset('assets/icons/icon-breast.svg') }}" alt="Breast Surgery Icon" style="width: 3.25rem; height: 3.25rem; object-fit: contain;">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Breast Surgery</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Surgical removal of lumps, cysts, and benign or malignant breast tumors with high aesthetic care.
                    </p>
                </div>
                <a href="{{ url('/breast-surgery') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700; color: var(--color-action);">Learn More ➔</a>
            </article>

            <!-- Treatment 8: Thyroid Surgery -->
            <article class="vc-card vc-fade-in-scale" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <img src="{{ asset('assets/icons/icon-thyroid.svg') }}" alt="Thyroid Surgery Icon" style="width: 3.25rem; height: 3.25rem; object-fit: contain;">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Thyroid Surgery</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Surgical thyroidectomy for goiters, nodules, and tumors with cosmetic collarline sutures.
                    </p>
                </div>
                <a href="{{ url('/thyroid') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700; color: var(--color-action);">Learn More ➔</a>
            </article>

            <!-- Treatment 9: Fistula Treatment -->
            <article class="vc-card vc-reveal-right" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <img src="{{ asset('assets/icons/icon-fistula.svg') }}" alt="Fistula Treatment Icon" style="width: 3.25rem; height: 3.25rem; object-fit: contain;">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Fistula Care</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Advanced laser closure (FiLaC) and seton procedures to heal complex anal fistulas safely.
                    </p>
                </div>
                <a href="{{ url('/fistula') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700; color: var(--color-action);">Learn More ➔</a>
            </article>

            <!-- Treatment 10: Fissure Treatment -->
            <article class="vc-card vc-reveal-left" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <img src="{{ asset('assets/icons/icon-fissure.svg') }}" alt="Fissure Treatment Icon" style="width: 3.25rem; height: 3.25rem; object-fit: contain;">
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Fissure Care</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Sphincterotomy and post-op healing recovery plans to resolve painful tears and fissures.
                    </p>
                </div>
                <a href="{{ url('/fissure') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700; color: var(--color-action);">Learn More ➔</a>
            </article>
        </div>
    </div>
</section>

<!-- Timeline / Patient Journey -->
<section class="vc-section vc-scroll-reveal" style="padding-block: var(--space-16);">
    <div class="vc-container">
        <div class="vc-stack" style="align-items: center; text-align: center; margin-bottom: var(--space-12);">
            <!-- Eyebrow removed to avoid repetition -->
            <h2 class="vc-title">Your Journey to <span style="color: var(--color-care);">Better Health</span></h2>
            <p class="vc-lede">We simplify consultation scheduling, diagnostics scans, and daycare surgeries.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-6); position: relative;">
            <div class="desktop-only vc-reveal-line" style="position: absolute; top: 2.25rem; left: 10%; right: 10%; height: 2px; border-top: 2px dashed var(--color-border-strong); z-index: 1;"></div>
            
            <div class="vc-stack vc-reveal-left" style="align-items: center; text-align: center; gap: var(--space-4); position: relative; z-index: 2;">
                <div style="width: 4rem; height: 4rem; border-radius: 50%; background: var(--blue-500); color: #fff; display: grid; place-items: center; font-size: 1.25rem; font-weight: 800; box-shadow: var(--shadow-md);">01</div>
                <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700; color: var(--color-text);">Consultation</h3>
                <p style="font-size: var(--text-caption); color: var(--color-text-muted); max-width: 20ch; margin:0;">Talk to our expert and get evaluated.</p>
            </div>
            
            <div class="vc-stack vc-reveal-left" style="align-items: center; text-align: center; gap: var(--space-4); position: relative; z-index: 2;">
                <div style="width: 4rem; height: 4rem; border-radius: 50%; background: var(--green-500); color: #fff; display: grid; place-items: center; font-size: 1.25rem; font-weight: 800; box-shadow: var(--shadow-md);">02</div>
                <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700; color: var(--color-text);">Diagnosis</h3>
                <p style="font-size: var(--text-caption); color: var(--color-text-muted); max-width: 20ch; margin:0;">Advanced scans for accurate diagnostics.</p>
            </div>
            
            <div class="vc-stack vc-reveal-right" style="align-items: center; text-align: center; gap: var(--space-4); position: relative; z-index: 2;">
                <div style="width: 4rem; height: 4rem; border-radius: 50%; background: var(--blue-500); color: #fff; display: grid; place-items: center; font-size: 1.25rem; font-weight: 800; box-shadow: var(--shadow-md);">03</div>
                <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700; color: var(--color-text);">Treatment</h3>
                <p style="font-size: var(--text-caption); color: var(--color-text-muted); max-width: 20ch; margin:0;">Personalised laparoscopic or laser care.</p>
            </div>
            
            <div class="vc-stack vc-reveal-right" style="align-items: center; text-align: center; gap: var(--space-4); position: relative; z-index: 2;">
                <div style="width: 4rem; height: 4rem; border-radius: 50%; background: var(--green-500); color: #fff; display: grid; place-items: center; font-size: 1.25rem; font-weight: 800; box-shadow: var(--shadow-md);">04</div>
                <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700; color: var(--color-text);">Recovery</h3>
                <p style="font-size: var(--text-caption); color: var(--color-text-muted); max-width: 20ch; margin:0;">Guided post-op recovery and follow-ups.</p>
            </div>
        </div>
    </div>
</section>

@if(!empty($reviews))
<!-- Google Reviews Section -->
<section class="vc-section vc-scroll-reveal" style="background: var(--color-surface); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border); padding-block: var(--space-20);">
    <div class="vc-container">
        <div class="vc-stack" style="align-items: center; text-align: center; margin-bottom: var(--space-12);">
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: #fff; border: 1px solid var(--blue-200); padding: 0.35rem 0.75rem; border-radius: var(--radius-round); width: fit-content; margin-bottom: 0.5rem; box-shadow: var(--shadow-xs);">
                <span style="color: #f59e0b; font-weight: 800; font-size: var(--text-caption);">★★★★★</span>
                <span style="font-size: var(--text-caption); font-weight: 700; color: var(--blue-800); text-transform: uppercase; letter-spacing: 0.05em;">5.0 Rating on Google Reviews</span>
            </div>
            <h2 class="vc-title">What Our Patients Say</h2>
            <p class="vc-lede">Verified 5-star clinical feedback from patients who underwent laparoscopic and laser proctology procedures.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: var(--space-6);">
            @foreach(array_slice($reviews, 0, 3) as $review)
                <article class="vc-card vc-fade-in-scale" style="background: #fff; border: 1px solid var(--color-border-strong); padding: var(--space-6); display: flex; flex-direction: column; justify-content: space-between; transition: transform var(--duration-base) var(--ease-enter), box-shadow var(--duration-base); cursor: default; border-radius: var(--radius-lg);" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='var(--shadow-md)';" onmouseout="this.style.transform='none'; this.style.boxShadow='none';">
                    <div class="vc-stack" style="gap: var(--space-4);">
                        <div style="display: flex; align-items: center; gap: var(--space-3);">
                            <div style="width: 2.75rem; height: 2.75rem; border-radius: 50%; background: var(--blue-50); color: var(--blue-600); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: var(--text-body-md); overflow: hidden; border: 1px solid var(--blue-100);">
                                @if(!empty($review['profile_photo_url']))
                                    <img src="{{ $review['profile_photo_url'] }}" alt="{{ $review['author_name'] }}" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.style.display='none';">
                                @endif
                                <span>{{ substr($review['author_name'] ?? 'P', 0, 1) }}</span>
                            </div>
                            <div style="line-height: 1.25;">
                                <strong style="font-size: var(--text-body-sm); color: var(--color-text); display: block;">{{ $review['author_name'] }}</strong>
                                <span style="font-size: var(--text-caption); color: var(--color-text-subtle);">{{ $review['relative_time_description'] ?? 'Verified Patient' }}</span>
                            </div>
                        </div>
                        
                        <div style="color: #f59e0b; font-size: 0.95rem; display: flex; gap: 0.1rem;">
                            @for($i = 0; $i < ($review['rating'] ?? 5); $i++)
                                ★
                            @endfor
                        </div>

                        <p style="font-size: var(--text-body-sm); line-height: 1.6; color: var(--color-text-muted); margin: 0; font-style: italic;">
                            "{{ $review['text'] }}"
                        </p>
                    </div>

                    <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid var(--color-gray-100); padding-top: var(--space-3); margin-top: var(--space-4); font-size: var(--text-caption); color: var(--color-text-subtle);">
                        <span style="display: inline-flex; align-items: center; gap: 0.25rem;">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="#4285F4">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                            </svg>
                            Google Review
                        </span>
                        <span style="color: var(--green-600); font-weight: 700;">Verified ✓</span>
                    </div>
                </article>
            @endforeach
        </div>
        
        @if(!empty($placeId))
            <div style="text-align: center; margin-top: var(--space-8);">
                <a href="https://search.google.com/local/writereview?placeid={{ $placeId }}" target="_blank" class="vc-btn vc-btn--outline" style="display:inline-flex; align-items:center; gap:0.25rem;">
                    Write a Google Review ↗
                </a>
            </div>
        @endif
    </div>
</section>
@endif

<!-- Google Maps GMB Embed Section -->
<section class="vc-section vc-scroll-reveal" style="padding-block: var(--space-16);">
    <div class="vc-container">
        <div class="vc-grid" style="grid-template-columns: 0.9fr 1.1fr; gap: var(--space-12); align-items: center;">
            <!-- Left Info Panel -->
            <div class="vc-stack" style="gap: var(--space-6);">
                <div>
                    <h2 class="vc-title" style="font-size: var(--text-display-md); line-height: 1.1; margin:0;">
                        Find Us in <span style="color: var(--color-action);">Moshi, Pune</span>
                    </h2>
                    <p class="vc-lede" style="font-size: var(--text-body-md); margin-top: var(--space-3);">
                        Prime Speciality Hospital is conveniently located near Moshi Road with spacious parking, complete diagnostics scans, and pharmacy services.
                    </p>
                </div>
                
                <div class="vc-stack" style="gap: var(--space-4); background: var(--color-surface); padding: var(--space-6); border: 1px solid var(--color-border-strong); border-radius: var(--radius-lg);">
                    <div style="display: flex; gap: var(--space-3); align-items: start;">
                        <div style="width: 2.25rem; height: 2.25rem; flex-shrink: 0; display: flex; align-items: center; justify-content: center; background: var(--blue-50); border-radius: 50%;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="var(--blue-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="width: 1rem; height: 1rem;">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div>
                            <strong style="display: block; font-size: var(--text-body-sm); color: var(--color-text);">Hospital Address</strong>
                            <span style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5;">
                                Dehu - Moshi Road, Near Ramdev Dhaba, Borahadewadi, Moshi, Pimpri-Chinchwad, Pune 412105
                            </span>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: var(--space-3); align-items: start;">
                        <div style="width: 2.25rem; height: 2.25rem; flex-shrink: 0; display: flex; align-items: center; justify-content: center; background: var(--blue-50); border-radius: 50%;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="var(--blue-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="width: 1rem; height: 1rem;">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div>
                            <strong style="display: block; font-size: var(--text-body-sm); color: var(--color-text);">Working Hours</strong>
                            <span style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5;">
                                Mon - Sat: 05:00 PM - 09:00 PM<br>
                                <em style="font-size: var(--text-caption);">Emergency Admission: 24/7 Available</em>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="vc-cluster">
                    @if(!empty($placeId))
                        <a href="https://maps.google.com/?q=place_id:{{ $placeId }}" target="_blank" class="vc-btn vc-btn--primary">
                            Get Directions ↗
                        </a>
                    @else
                        <a href="https://maps.app.goo.gl/yP95pQ1J8uT2gT4c6" target="_blank" class="vc-btn vc-btn--primary">
                            Get Directions ↗
                        </a>
                    @endif
                    <a href="tel:+917447441426" class="vc-btn vc-btn--outline">Call Reception Desk</a>
                </div>
            </div>
            
            <!-- Right Map Embed -->
            <div style="width:100%; border: 1px solid var(--color-border-strong); border-radius: var(--radius-xl); overflow:hidden; box-shadow: var(--shadow-sm); height: 26rem; background:#fff; position: relative;">
                @php
                    $apiKey = config('services.google.api_key');
                    $placeId = config('services.google.place_id');
                    $embedUrl = ($apiKey && $placeId) 
                        ? "https://www.google.com/maps/embed/v1/place?key={$apiKey}&q=place_id:{$placeId}"
                        : "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.8078651874254!2d73.83404557579737!3d18.672522764952403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c75a40bbcc99%3A0xe2128e469c8f1eb3!2sPrime%20Speciality%20Hospital!5e0!3m2!1sen!2sin!4v1705600000000!5m2!1sen!2sin";
                @endphp
                <iframe 
                    src="{{ $embedUrl }}" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Accordion Section -->
<section class="vc-section vc-scroll-reveal" style="background: var(--color-surface); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border); padding-block: var(--space-20);">
    <div class="vc-container" style="max-width: 52rem;">
        <div class="vc-stack" style="align-items: center; text-align: center; margin-bottom: var(--space-10);">
            <!-- Eyebrow removed to avoid repetition -->
            <h2 class="vc-title">Frequently Asked Questions</h2>
            <p class="vc-lede">Medically reviewed explanations of surgical and diagnostic procedures.</p>
        </div>

        <div class="vc-stack" style="gap: var(--space-4);">
            <!-- FAQ 1 -->
            <details class="vc-card vc-fade-in-scale" style="background:#fff; border-color: var(--color-border-strong); cursor: pointer; padding: var(--space-4) var(--space-6);">
                <summary style="font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700; color: var(--color-text); list-style: none; display: flex; justify-content: space-between; align-items: center;">
                    When Is An Endoscopy Necessary?
                    <span style="font-size: 0.85rem; color: var(--color-action);">▼</span>
                </summary>
                <p style="margin-top: var(--space-3); font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.6;">
                    An endoscopy is recommended to visually examine the lining of your upper digestive tract if you experience unexplained abdominal pain, persistent bowel changes (like chronic diarrhea/constipation), chronic heartburn, blood in the stool, or symptoms of an intestinal blockage.
                </p>
            </details>

            <!-- FAQ 2 -->
            <details class="vc-card vc-fade-in-scale" style="background:#fff; border-color: var(--color-border-strong); cursor: pointer; padding: var(--space-4) var(--space-6);">
                <summary style="font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700; color: var(--color-text); list-style: none; display: flex; justify-content: space-between; align-items: center;">
                    Is endoscopy painful?
                    <span style="font-size: 0.85rem; color: var(--color-action);">▼</span>
                </summary>
                <p style="margin-top: var(--space-3); font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.6;">
                    No, you should not feel pain. The procedure is performed under local throat spray anesthesia or mild sedation to keep you relaxed and comfortable. The diagnostic scope takes only 15 to 30 minutes.
                </p>
            </details>

            <!-- FAQ 3 -->
            <details class="vc-card vc-fade-in-scale" style="background:#fff; border-color: var(--color-border-strong); cursor: pointer; padding: var(--space-4) var(--space-6);">
                <summary style="font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700; color: var(--color-text); list-style: none; display: flex; justify-content: space-between; align-items: center;">
                    What is Laparoscopic Surgery & its benefits?
                    <span style="font-size: 0.85rem; color: var(--color-action);">▼</span>
                </summary>
                <p style="margin-top: var(--space-3); font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.6;">
                    Laparoscopic (keyhole) surgery utilizes minor portals (<1.5cm) and camera guides instead of long open cuts. Benefits include significantly less post-op pain, reduced blood loss, quicker hospital discharges (often within 24 hours), minimal scarring, and faster return to active routines.
                </p>
            </details>

            <!-- FAQ 4 -->
            <details class="vc-card vc-fade-in-scale" style="background:#fff; border-color: var(--color-border-strong); cursor: pointer; padding: var(--space-4) var(--space-6);">
                <summary style="font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700; color: var(--color-text); list-style: none; display: flex; justify-content: space-between; align-items: center;">
                    What are the signs of Acute Appendicitis?
                    <span style="font-size: 0.85rem; color: var(--color-action);">▼</span>
                </summary>
                <p style="margin-top: var(--space-3); font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.6;">
                    The primary symptom is sudden pain starting around the navel that shifts and intensifies in the lower right abdomen. Pain is often accompanied by nausea, vomiting, low-grade fever, abdominal bloating, and severe discomfort when walking or coughing. Immediate surgical consultation is crucial.
                </p>
            </details>
        </div>
    </div>
</section>

<!-- Booking form section -->
<section class="vc-section" id="booking-section" style="padding-block: var(--space-16);">
    <div class="vc-container">
        <div class="vc-grid" style="grid-template-columns: 0.95fr 1.05fr; gap: var(--space-12); background: linear-gradient(135deg, var(--blue-50) 0%, #fff 55%, var(--green-50) 100%); padding: var(--space-12); border: 1px solid var(--color-border-strong); border-radius: var(--radius-xl); box-shadow: var(--shadow-md);">
            <div class="vc-stack vc-reveal-left" style="justify-content: center; gap: 1.5rem;">
                <h2 class="vc-title" style="font-size: var(--text-display-md); line-height: 1.1; margin:0;">
                    Book Your Appointment <span style="color: var(--color-action);">Today</span>
                </h2>
                <p class="vc-lede" style="font-size: var(--text-body-md);">
                    Take the first step towards better health. Our clinic coordinators will schedule your consult slot at your convenience.
                </p>
                
                <div class="vc-stack" style="gap: var(--space-4); margin-top: var(--space-2);">
                    <div style="display: flex; align-items: center; gap: var(--space-3);">
                        <img src="{{ asset('assets/icons/icon-phone.svg') }}" style="width: 2.25rem; height: 2.25rem; object-fit: contain;" alt="Phone">
                        <div>
                            <span style="display: block; font-size: var(--text-caption); color: var(--color-text-subtle);">Call Us</span>
                            <a href="tel:+917447441426" style="text-decoration:none; font-weight:700; color:var(--color-text); font-size:var(--text-body-md);">+91 74474 41426</a>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; gap: var(--space-3);">
                        <img src="{{ asset('assets/icons/icon-whatsapp.svg') }}" style="width: 2.25rem; height: 2.25rem; object-fit: contain;" alt="WhatsApp">
                        <div>
                            <span style="display: block; font-size: var(--text-caption); color: var(--color-text-subtle);">WhatsApp Us</span>
                            <a href="https://wa.me/919422668921" target="_blank" style="text-decoration:none; font-weight:700; color:var(--color-text); font-size:var(--text-body-md);">+91 94226 68921</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Registration Form -->
            <form action="{{ route('contact.store') }}" method="POST" class="vc-booking-form-card vc-stack vc-reveal-right">
                @csrf
                <input type="hidden" name="page_source" value="homepage_expanded_form">
                
                <h3 style="margin-top:0; font-family: var(--font-display); font-size: var(--text-h4); border-bottom: 1px solid var(--color-border); padding-bottom:0.5rem; margin-bottom: var(--space-4);">Request Appointment</h3>

                <div class="vc-grid" style="grid-template-columns: repeat(2, 1fr); gap: var(--space-4);">
                    <label class="vc-field">
                        <span class="vc-label">Your Name <span style="color: var(--red-700);">*</span></span>
                        <input class="vc-input" name="name" placeholder="Enter name" required value="{{ old('name') }}">
                    </label>
                    <label class="vc-field">
                        <span class="vc-label">Phone Number <span style="color: var(--red-700);">*</span></span>
                        <input class="vc-input" name="phone" placeholder="Enter phone" required value="{{ old('phone') }}">
                    </label>
                </div>
                
                <div class="vc-grid" style="grid-template-columns: repeat(2, 1fr); gap: var(--space-4);">
                    <label class="vc-field">
                        <span class="vc-label">Select Department</span>
                        <select class="vc-select" name="message_prefix">
                            <option value="Laparoscopic Surgery">Laparoscopic Surgery</option>
                            <option value="Laser Piles Surgery">Laser Piles Surgery</option>
                            <option value="Hernia Repair">Hernia Repair</option>
                            <option value="Endoscopy">Endoscopy</option>
                            <option value="GI & Colorectal Care">GI & Colorectal Care</option>
                        </select>
                    </label>
                    <label class="vc-field">
                        <span class="vc-label">Preferred Date</span>
                        <input class="vc-input" type="date" name="preferred_date" style="padding-block: 0.5rem;">
                    </label>
                </div>

                <label class="vc-field" style="display:none;">
                    <span class="vc-label">Email Address</span>
                    <input class="vc-input" type="email" name="email" value="appointment-request@primehospital.com">
                </label>
                
                <label class="vc-field">
                    <span class="vc-label">Your Message (Optional)</span>
                    <textarea class="vc-textarea" name="message" placeholder="Provide symptoms or booking slot preferences..." style="min-height: 4rem;">Preferred appointment request via homepage form.</textarea>
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
                    Book Appointment ➔
                </button>
            </form>
        </div>
    </div>
</section>

<style>
    .vc-hero::after {
        display: none;
    }

    .vc-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: url('{{ asset('assets/hero/svg/hero-geometric-overlay.svg') }}') right center / min(64rem, 72vw) auto no-repeat;
        opacity: 0.62;
        pointer-events: none;
    }

    .vc-home-hero-art {
        position: relative;
        width: 100%;
        min-height: 34rem;
        display: grid;
        place-items: center;
        isolation: isolate;
    }

    .vc-home-hero-art::before {
        content: "";
        position: absolute;
        width: min(112%, 38rem);
        aspect-ratio: 1;
        background: url('{{ asset('assets/hero/desktop/hero-blob-aura-bg.png') }}') center / contain no-repeat;
        opacity: 0.22;
        filter: saturate(1.05);
        z-index: -1;
        pointer-events: none;
    }

    .vc-home-hero-art__aura {
        width: min(112%, 35rem);
        height: auto;
        position: relative;
        z-index: 2;
        filter: drop-shadow(0 28px 38px rgba(19, 51, 101, 0.12));
        animation: vc-hero-aura-drift 12s ease-in-out infinite alternate;
    }

    .vc-home-hero-art__portrait {
        position: absolute;
        z-index: 3;
        width: min(62%, 19.25rem);
        aspect-ratio: 1;
        overflow: hidden;
        border: 7px solid rgba(255, 255, 255, 0.94);
        border-radius: 50%;
        background: var(--gray-50);
        box-shadow: 0 22px 54px rgba(19, 51, 101, 0.16), 0 0 0 2px rgba(96, 165, 250, 0.18);
    }

    .vc-home-hero-art__portrait img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center 22%;
        transform: scale(1.04);
    }

    .vc-home-hero-art__legacy {
        display: none !important;
    }

    .vc-home-hero-art__specialty,
    .vc-home-hero-art__doctor-label {
        position: absolute;
        z-index: 4;
        border: 1px solid rgba(191, 208, 229, 0.86);
        background: rgba(255, 255, 255, 0.88);
        box-shadow: 0 14px 34px rgba(19, 51, 101, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(14px);
    }

    .vc-home-hero-art__specialty {
        display: flex;
        align-items: center;
        gap: 0.65rem;
        padding: 0.65rem 0.85rem;
        border-radius: 0.9rem;
        line-height: 1.15;
    }

    .vc-home-hero-art__specialty strong,
    .vc-home-hero-art__specialty small {
        display: block;
    }

    .vc-home-hero-art__specialty strong {
        color: var(--color-text);
        font-size: var(--text-caption);
    }

    .vc-home-hero-art__specialty small {
        margin-top: 0.2rem;
        color: var(--color-text-subtle);
        font-size: 0.65rem;
    }

    .vc-home-hero-art__specialty-icon {
        width: 2rem;
        aspect-ratio: 1;
        display: grid;
        place-items: center;
        border-radius: 50%;
        color: var(--blue-700);
        background: var(--blue-50);
        box-shadow: inset 0 0 0 1px var(--blue-200);
        font-weight: 800;
    }

    .vc-home-hero-art__specialty-icon--care {
        color: var(--green-700);
        background: var(--green-50);
        box-shadow: inset 0 0 0 1px var(--green-200);
    }

    .vc-home-hero-art__specialty--top {
        top: 12%;
        left: 2%;
    }

    .vc-home-hero-art__specialty--side {
        right: -2%;
        bottom: 23%;
    }

    .vc-home-hero-art__doctor-label {
        left: 50%;
        bottom: 3%;
        min-width: 16rem;
        padding: 0.75rem 1.2rem;
        border-radius: 1rem;
        text-align: center;
        transform: translateX(-50%);
    }

    .vc-home-hero-art__doctor-label strong,
    .vc-home-hero-art__doctor-label span {
        display: block;
    }

    .vc-home-hero-art__doctor-label strong {
        color: var(--color-text);
        font-size: var(--text-body-sm);
    }

    .vc-home-hero-art__doctor-label span {
        color: var(--color-text-muted);
        font-size: var(--text-caption);
        font-weight: 500;
    }

    @keyframes vc-hero-aura-drift {
        from { transform: translate3d(0, -3px, 0) rotate(-0.35deg); }
        to { transform: translate3d(0, 5px, 0) rotate(0.35deg); }
    }

    /* Styling details marker */
    details summary::-webkit-details-marker {
        display: none;
    }
    
    details[open] summary span {
        transform: rotate(180deg);
    }
    
    @media (max-width: 900px) {
        .vc-hero::before {
            background-image: url('{{ asset('assets/graphics/mobile-edge-pattern.svg') }}');
            background-position: right center;
            background-size: auto 100%;
            opacity: 0.4;
        }

        .vc-hero__grid {
            grid-template-columns: 1fr !important;
            text-align: center;
        }
        .vc-hero__grid .vc-cluster {
            justify-content: center;
        }
        .vc-section .vc-container {
            grid-template-columns: 1fr !important;
        }
        .vc-grid {
            grid-template-columns: 1fr !important;
        }
        #booking-section .vc-grid {
            grid-template-columns: 1fr !important;
        }
        section .vc-container div[style*="grid-template-columns: repeat(3"] {
            grid-template-columns: 1fr !important;
        }
        section .vc-container div[style*="grid-template-columns: repeat(4"] {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .vc-home-hero-art {
            min-height: 32rem;
            margin-top: var(--space-4);
        }

        .vc-home-hero-art::before {
            width: min(120%, 34rem);
            background-image: url('{{ asset('assets/hero/mobile/hero-blob-aura-bg-vertical.png') }}');
            opacity: 0.2;
        }

        .vc-home-hero-art__aura {
            width: min(100%, 31rem);
        }

        .vc-home-hero-art__portrait {
            width: min(60%, 18rem);
        }

        .vc-home-hero-art__specialty--top {
            left: 4%;
            top: 13%;
        }

        .vc-home-hero-art__specialty--side {
            right: 2%;
            bottom: 19%;
        }
    }

    @media (max-width: 600px) {
        .vc-home-hero-art {
            min-height: 27rem;
        }

        .vc-home-hero-art__aura {
            width: 112%;
            max-width: 29rem;
        }

        .vc-home-hero-art__portrait {
            width: min(62vw, 17rem);
        }

        .vc-home-hero-art__specialty {
            padding: 0.5rem 0.65rem;
        }

        .vc-home-hero-art__specialty--top {
            left: 0;
            top: 10%;
        }

        .vc-home-hero-art__specialty--side {
            right: 0;
            bottom: 21%;
        }

        .vc-home-hero-art__doctor-label {
            bottom: 1%;
            min-width: 13rem;
            padding: 0.65rem 0.9rem;
        }

        section .vc-container div[style*="grid-template-columns: repeat(4"] {
            grid-template-columns: 1fr !important;
        }
        #booking-section form .vc-grid {
            grid-template-columns: 1fr !important;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .vc-home-hero-art__aura {
            animation: none;
        }
    }
</style>
@endsection
