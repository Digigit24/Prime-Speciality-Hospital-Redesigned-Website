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
                    <div style="width: 2.25rem; height: 2.25rem; border-radius: 50%; border: 2px solid #fff; overflow: hidden; background: #e2e8f0; margin-left: 0; z-index: 5; display: flex; align-items: center; justify-content: center; font-size: 1.15rem;">👨‍⚕️</div>
                    <div style="width: 2.25rem; height: 2.25rem; border-radius: 50%; border: 2px solid #fff; overflow: hidden; background: #e2e8f0; margin-left: -0.5rem; z-index: 4; display: flex; align-items: center; justify-content: center; font-size: 1.15rem;">👩</div>
                    <div style="width: 2.25rem; height: 2.25rem; border-radius: 50%; border: 2px solid #fff; overflow: hidden; background: #e2e8f0; margin-left: -0.5rem; z-index: 3; display: flex; align-items: center; justify-content: center; font-size: 1.15rem;">👨</div>
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
        
        <!-- Right Side: Clinician & Orbit Motif -->
        <div class="vc-hero__visual" style="position: relative; width: 100%; display: flex; justify-content: center; align-items: center; min-height: 32rem;">
            <!-- Outer Orbit Ring -->
            <div class="vc-orbit" style="position: relative; width: min(100%, 28rem); aspect-ratio: 1; border: 1.5px solid rgba(35, 116, 242, 0.25); border-radius: 50%; background: radial-gradient(circle, rgba(255, 255, 255, 0.9) 0%, rgba(219, 234, 254, 0.3) 60%, transparent 100%); display: flex; align-items: center; justify-content: center; box-shadow: var(--shadow-md);">
                
                <!-- Inner Ring -->
                <div style="position: absolute; width: 85%; height: 85%; border: 1px dashed rgba(22, 179, 100, 0.25); border-radius: 50%;"></div>
                
                <!-- Doctor Image Container -->
                <div style="position: relative; width: 75%; height: 75%; border-radius: 50%; overflow: hidden; border: 6px solid #fff; box-shadow: var(--shadow-lg); background: var(--gray-50);">
                    <img src="{{ asset('assets/drpankajbhalerao.jpeg') }}" alt="Dr. Pankaj Bhalerao" style="width: 100%; height: 100%; object-fit: cover; object-position: top center;">
                </div>

                <!-- Floating Specialty Badge 1 (Top Left) -->
                <div style="position: absolute; top: 5%; left: 5%; background: #fff; border: 1px solid var(--color-border-strong); padding: 0.5rem 0.75rem; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); display: flex; align-items: center; gap: 0.5rem; z-index: 10;">
                    <span style="font-size: 1.25rem;">🔬</span>
                    <div style="line-height: 1.1;">
                        <strong style="display: block; font-size: var(--text-caption); color: var(--color-text);">Laparoscopy</strong>
                        <span style="font-size: 0.65rem; color: var(--color-text-subtle);">Minimally Invasive</span>
                    </div>
                </div>

                <!-- Floating Specialty Badge 2 (Bottom Right) -->
                <div style="position: absolute; bottom: 8%; right: 2%; background: #fff; border: 1px solid var(--color-border-strong); padding: 0.5rem 0.75rem; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); display: flex; align-items: center; gap: 0.5rem; z-index: 10;">
                    <span style="font-size: 1.25rem; color: var(--color-care);">⚡</span>
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
            <span class="vc-eyebrow">Medical Centre Moshi</span>
            <h2 class="vc-title">Exceptional Care, Every Patient, Everyday.</h2>
            <p style="color: var(--color-text-muted); font-size: var(--text-body-md); line-height: 1.65; margin: 0;">
                Prime Speciality Hospital is the leading centre for advanced surgical treatments in Moshi, Bhosari, and Pimpri Chinchwad. Our facility is designed to support patient diagnostic scans and surgical operations under one roof, featuring a modern modular Operation Theatre, ICU setups, private recovery wards, in-house pathology, and a round-the-clock pharmacy.
            </p>
            <p style="color: var(--color-text-muted); font-size: var(--text-body-md); line-height: 1.65; margin: 0;">
                Our primary consultant, **Dr. Pankaj Bhalerao**, MS (General Surgery) from BJ Medical College Pune, FMAS, has over 10 years of experience in gastrointestinal laparoscopy and laser proctology, offering safe daycare options for piles and gallstones.
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

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-6);">
            <!-- Treatment 1: Laparoscopy -->
            <article class="vc-card vc-reveal-left" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <div class="vc-icon" style="width: 2.75rem; height: 2.75rem; font-size: 1.15rem; background: var(--blue-500);">🔬</div>
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Laparoscopy</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Minimally invasive keyhole surgeries utilizing digital camera monitors to diagnose and remove diseased organs with minor scarring.
                    </p>
                </div>
                <a href="{{ url('/laparoscopy') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700;">Learn More ➔</a>
            </article>

            <!-- Treatment 2: Hernia -->
            <article class="vc-card vc-fade-in-scale" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <div class="vc-icon" style="width: 2.75rem; height: 2.75rem; font-size: 1.15rem; background: var(--blue-500);">🛡️</div>
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Hernia Surgery</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Advanced tension-free mesh reinforcement for inguinal, umbilical, and incisional hernia repair with minimal post-op pain.
                    </p>
                </div>
                <a href="{{ url('/hernia') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700;">Learn More ➔</a>
            </article>

            <!-- Treatment 3: Piles -->
            <article class="vc-card vc-reveal-right" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <div class="vc-icon vc-icon--care" style="width: 2.75rem; height: 2.75rem; font-size: 1.15rem;">⚡</div>
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Laser Piles Surgery</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Sutureless daycare laser treatment for hemorrhoids, resolving issues with zero cuts, minimal bleeding, and same-day discharge.
                    </p>
                </div>
                <a href="{{ url('/hemorrhoids') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700;">Learn More ➔</a>
            </article>

            <!-- Treatment 4: Gallbladder -->
            <article class="vc-card vc-reveal-left" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <div class="vc-icon" style="width: 2.75rem; height: 2.75rem; font-size: 1.15rem; background: var(--blue-500);">💎</div>
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Gallbladder Stone</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Laparoscopic removal of the gallbladder (cholecystectomy) to resolve gallstone complications without large open abdominal incisions.
                    </p>
                </div>
                <a href="{{ url('/gallbladder') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700;">Learn More ➔</a>
            </article>

            <!-- Treatment 5: Appendicitis -->
            <article class="vc-card vc-fade-in-scale" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <div class="vc-icon" style="width: 2.75rem; height: 2.75rem; font-size: 1.15rem; background: var(--blue-500);">💥</div>
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Appendicitis</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Emergency keyhole appendectomy to extract inflamed appendix tissues before rupture and peritonitis complications.
                    </p>
                </div>
                <a href="{{ url('/appendicitis') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700;">Learn More ➔</a>
            </article>

            <!-- Treatment 6: Endoscopy -->
            <article class="vc-card vc-reveal-right" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <div class="vc-icon vc-icon--care" style="width: 2.75rem; height: 2.75rem; font-size: 1.15rem;">👁️</div>
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Endoscopy</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Diagnostic visualization of the upper GI tract, stomach, and esophagus using flexible camera scopes under mild sedation.
                    </p>
                </div>
                <a href="{{ url('/endoscopy') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700;">Learn More ➔</a>
            </article>

            <!-- Treatment 7: Breast Surgery -->
            <article class="vc-card vc-reveal-left" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <div class="vc-icon" style="width: 2.75rem; height: 2.75rem; font-size: 1.15rem; background: var(--blue-500);">🎀</div>
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Breast Surgery</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Clinical evaluations and surgical removal of lumps, cysts, and benign or malignant breast tumors with high aesthetic care.
                    </p>
                </div>
                <a href="{{ url('/breast-surgery') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700;">Learn More ➔</a>
            </article>

            <!-- Treatment 8: Thyroid -->
            <article class="vc-card vc-fade-in-scale" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <div class="vc-icon" style="width: 2.75rem; height: 2.75rem; font-size: 1.15rem; background: var(--blue-500);">🦋</div>
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Thyroid Surgery</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Partial or total surgical thyroidectomy for goiters, hyperthyroidism nodules, and tumors with cosmetic collarline sutures.
                    </p>
                </div>
                <a href="{{ url('/thyroid') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700;">Learn More ➔</a>
            </article>

            <!-- Treatment 9: Fistula -->
            <article class="vc-card vc-reveal-right" style="background:#fff; border-color: var(--color-border-strong); display:flex; flex-direction:column; justify-content:space-between; height: 100%;">
                <div class="vc-stack" style="gap: var(--space-3);">
                    <div class="vc-icon vc-icon--care" style="width: 2.75rem; height: 2.75rem; font-size: 1.15rem;">🌀</div>
                    <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h5); font-weight: 700;">Fistula Treatment</h3>
                    <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                        Advanced laser closure (FiLaC) and seton procedures to heal complex anal fistulas while preserving sphincter control.
                    </p>
                </div>
                <a href="{{ url('/fistula') }}" class="vc-btn vc-btn--ghost vc-btn--sm" style="width: fit-content; padding-left: 0; margin-top: var(--space-4); font-weight:700;">Learn More ➔</a>
            </article>
        </div>
    </div>
</section>

<!-- Timeline / Patient Journey -->
<section class="vc-section vc-scroll-reveal" style="padding-block: var(--space-16);">
    <div class="vc-container">
        <div class="vc-stack" style="align-items: center; text-align: center; margin-bottom: var(--space-12);">
            <span class="vc-eyebrow">How It Works</span>
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

<!-- Frequently Asked Questions Accordion Section -->
<section class="vc-section vc-scroll-reveal" style="background: var(--color-surface); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border); padding-block: var(--space-20);">
    <div class="vc-container" style="max-width: 52rem;">
        <div class="vc-stack" style="align-items: center; text-align: center; margin-bottom: var(--space-10);">
            <span class="vc-eyebrow">Medical FAQ</span>
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
                <span class="vc-eyebrow">Booking Desk</span>
                <h2 class="vc-title" style="font-size: var(--text-display-md); line-height: 1.1; margin:0;">
                    Book Your Appointment <span style="color: var(--color-action);">Today</span>
                </h2>
                <p class="vc-lede" style="font-size: var(--text-body-md);">
                    Take the first step towards better health. Our clinic coordinators will schedule your consult slot at your convenience.
                </p>
                
                <div class="vc-stack" style="gap: var(--space-4); margin-top: var(--space-2);">
                    <div style="display: flex; align-items: center; gap: var(--space-3);">
                        <span style="font-size: 1.5rem; color: var(--color-action);">📞</span>
                        <div>
                            <span style="display: block; font-size: var(--text-caption); color: var(--color-text-subtle);">Call Us</span>
                            <a href="tel:07447441426" style="text-decoration:none; font-weight:700; color:var(--color-text); font-size:var(--text-body-md);">074474 41426</a>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; gap: var(--space-3);">
                        <span style="font-size: 1.5rem; color: var(--color-care);">💬</span>
                        <div>
                            <span style="display: block; font-size: var(--text-caption); color: var(--color-text-subtle);">WhatsApp Us</span>
                            <a href="https://wa.me/919422668921" target="_blank" style="text-decoration:none; font-weight:700; color:var(--color-text); font-size:var(--text-body-md);">+91 9422668921</a>
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
    /* Styling details marker */
    details summary::-webkit-details-marker {
        display: none;
    }
    
    details[open] summary span {
        transform: rotate(180deg);
    }
    
    @media (max-width: 900px) {
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
    }
    @media (max-width: 600px) {
        section .vc-container div[style*="grid-template-columns: repeat(4"] {
            grid-template-columns: 1fr !important;
        }
        #booking-section form .vc-grid {
            grid-template-columns: 1fr !important;
        }
    }
</style>
@endsection
