@extends('layouts.app')

@section('title', 'About Us - Prime Speciality Hospital & Dr. Pankaj Bhalerao Moshi Pune')
@section('meta_description', 'Meet Dr. Pankaj Bhalerao and explore Prime Speciality Hospital in Moshi, PCMC. Learn about our advanced modular OT, ICU, laparoscopic surgery, and daycare laser treatments.')

@section('content')
<!-- Header Banner -->
<section style="background: var(--color-surface); padding-block: var(--space-4); border-bottom: 1px solid var(--color-border);">
    <div class="vc-container">
        <nav style="display: flex; gap: var(--space-2); font-size: var(--text-caption); color: var(--color-text-subtle);">
            <a href="{{ route('home') }}" style="text-decoration: none;">Home</a>
            <span>/</span>
            <span style="color: var(--color-text); font-weight: 600;">About Us</span>
        </nav>
    </div>
</section>

<!-- Doctor Profile Section -->
<section class="vc-section vc-scroll-reveal" id="doctor-section" style="padding-block: var(--space-16);">
    <div class="vc-container" style="display: grid; grid-template-columns: 0.9fr 1.15fr; gap: var(--space-12); align-items: flex-start;">
        <!-- Left Column: Portrait & Badges -->
        <div class="vc-stack vc-reveal-left" style="gap: var(--space-6);">
            <div style="border-radius: var(--radius-xl); overflow: hidden; border: 1px solid var(--color-border-strong); box-shadow: var(--shadow-md); background: #fff;">
                <img src="{{ asset('assets/drpankajbhalerao.jpeg') }}" alt="Dr. Pankaj Bhalerao" class="vc-reveal-image" style="width: 100%; height: auto; object-fit: cover;">
            </div>
            
            <div class="vc-card vc-fade-in-scale" style="background: #fff; border-color: var(--color-border-strong); padding: var(--space-5);">
                <h3 style="margin-top: 0; font-family: var(--font-display); font-size: var(--text-body-md); border-bottom: 1px solid var(--color-border); padding-bottom: 0.5rem; margin-bottom: var(--space-3); font-weight: 700;">Specialist Expertise</h3>
                <div class="vc-cluster" style="gap: 0.35rem;">
                    <span class="vc-badge">Laparoscopy</span>
                    <span class="vc-badge">Hernia Repair</span>
                    <span class="vc-badge">Laser Surgery</span>
                    <span class="vc-badge">GI & Colorectal</span>
                    <span class="vc-badge">Daycare Proctology</span>
                    <span class="vc-badge">General Surgery</span>
                </div>
            </div>
        </div>

        <!-- Right Column: Biography Details -->
        <div class="vc-stack vc-reveal-right" style="gap: var(--space-6);">
            <div>
                <span class="vc-eyebrow">Primary Consultant Surgeon</span>
                <h1 style="font-family: var(--font-display); font-size: var(--text-h1); font-weight: 800; color: var(--color-text); margin: 0; line-height: 1.1;">
                    Dr. Pankaj Bhalerao
                </h1>
                <p style="font-size: var(--text-body-lg); color: var(--color-action); font-weight: 700; margin-top: 0.5rem;">
                    MBBS, MS (General Surgery), FMAS
                </p>
            </div>
            
            <div class="vc-stack" style="gap: var(--space-4); border-top: 1px solid var(--color-border); padding-top: var(--space-4);">
                <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h4); font-weight: 700;">About the Surgeon</h3>
                <p style="color: var(--color-text-muted); font-size: var(--text-body-md); line-height: 1.65; margin: 0;">
                    Dr. Pankaj Bhalerao is a highly skilled General, Laparoscopic, Gastrointestinal, and Laser Piles Surgeon practicing in Pimpri-Chinchwad, Pune. With over 10 years of clinical experience, he offers compassionate care and high-precision treatments to his patients at Vedant Multispeciality Hospital and Prime Speciality Hospital.
                </p>
                <p style="color: var(--color-text-muted); font-size: var(--text-body-md); line-height: 1.65; margin: 0;">
                    He completed his MBBS from Maharashtra University of Health Sciences, Nashik in 2008 (with training conducted at the prestigious B.J. Medical College, Pune) and achieved his MS in General Surgery from Maharashtra University of Health Sciences in 2012 (conducted at B.J. Medical College, Pune). He is a fellow of Minimal Access Surgeons of India (FMAS).
                </p>
            </div>

            <!-- Credentials checkmarks -->
            <div class="vc-stack" style="gap: var(--space-4); border-top: 1px solid var(--color-border); padding-top: var(--space-4);">
                <h3 style="margin: 0; font-family: var(--font-display); font-size: var(--text-h4); font-weight: 700;">Credentials & Affiliations</h3>
                <ul style="list-style: none; padding-left: 0; margin: 0; display: flex; flex-direction: column; gap: var(--space-2);">
                    <li style="position: relative; padding-left: var(--space-6); color: var(--color-text-muted); font-size: var(--text-body-md);">
                        <span style="position: absolute; left: 0; color: var(--color-care); font-weight: 800;">✓</span>
                        Fellow of the Association of Minimal Access Surgeons of India (FMAS)
                    </li>
                    <li style="position: relative; padding-left: var(--space-6); color: var(--color-text-muted); font-size: var(--text-body-md);">
                        <span style="position: absolute; left: 0; color: var(--color-care); font-weight: 800;">✓</span>
                        Alumni of BJ Medical College & Sassoon General Hospital, Pune
                    </li>
                    <li style="position: relative; padding-left: var(--space-6); color: var(--color-text-muted); font-size: var(--text-body-md);">
                        <span style="position: absolute; left: 0; color: var(--color-care); font-weight: 800;">✓</span>
                        10+ Years of active surgical practice with 1,500+ successful laparoscopic & laser operations
                    </li>
                    <li style="position: relative; padding-left: var(--space-6); color: var(--color-text-muted); font-size: var(--text-body-md);">
                        <span style="position: absolute; left: 0; color: var(--color-care); font-weight: 800;">✓</span>
                        Expertise in advanced daycare proctology closures (Piles, Fistula & Fissure) for immediate recovery
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Stats Banner Strip (High Contrast Dark) -->
<section class="vc-section vc-scroll-reveal" style="background: #0b1736; color: #fff; padding-block: var(--space-10); border-top: 1px solid rgba(255,255,255,0.1); border-bottom: 1px solid rgba(255,255,255,0.1);">
    <div class="vc-container vc-stats-grid">
        <div class="vc-stat" style="justify-content: center; text-align: center; flex-direction: column;">
            <div class="vc-stat__value" style="color: var(--blue-400);">10+</div>
            <div class="vc-stat__label" style="color: var(--gray-300);">Years Of Experience</div>
        </div>
        <div class="vc-stat" style="justify-content: center; text-align: center; flex-direction: column;">
            <div class="vc-stat__value" style="color: var(--blue-400);">1,500+</div>
            <div class="vc-stat__label" style="color: var(--gray-300);">Successful Surgeries</div>
        </div>
        <div class="vc-stat" style="justify-content: center; text-align: center; flex-direction: column;">
            <div class="vc-stat__value" style="color: var(--green-400);">98%</div>
            <div class="vc-stat__label" style="color: var(--gray-300);">Happy Patients</div>
        </div>
        <div class="vc-stat" style="justify-content: center; text-align: center; flex-direction: column;">
            <div class="vc-stat__value" style="color: var(--green-400);">5.0 ★</div>
            <div class="vc-stat__label" style="color: var(--gray-300);">Google Reviews Rating</div>
        </div>
    </div>
</section>

<!-- Hospital Facility Section -->
<section class="vc-section vc-scroll-reveal" id="hospital-section" style="padding-block: var(--space-16); background: var(--color-surface);">
    <div class="vc-container" style="display: grid; grid-template-columns: 1fr 1.15fr; gap: var(--space-12); align-items: center;">
        <!-- Left Column: Hospital Image -->
        <div style="position: relative;" class="vc-reveal-left">
            <div style="border-radius: var(--radius-xl); overflow: hidden; border: 1px solid var(--color-border-strong); box-shadow: var(--shadow-md);">
                <img src="{{ asset('assets/prime_hospital_facade.png') }}" alt="Prime Speciality Hospital Facility Facade" class="vc-reveal-image" style="width: 100%; height: auto; display: block;">
            </div>
        </div>

        <!-- Right Column: Hospital Details -->
        <div class="vc-stack vc-reveal-right" style="gap: var(--space-6);">
            <h2 class="vc-title">State-of-the-Art Surgical Setup</h2>
            <p style="color: var(--color-text-muted); font-size: var(--text-body-md); line-height: 1.65; margin: 0;">
                Prime Speciality Hospital is the leading centre for advanced surgical treatments in Moshi, Bhosari, and Pimpri Chinchwad. Our facility is designed to support patient diagnostic scans and surgical operations under one roof, featuring a modern modular Operation Theatre, ICU setups, private recovery wards, in-house pathology, and a round-the-clock pharmacy.
            </p>
            <p style="color: var(--color-text-muted); font-size: var(--text-body-md); line-height: 1.65; margin: 0;">
                We coordinate complete patient care—from ultrasound scans and laboratory testing to Daycare operations and cashless TPA insurance approvals. Same-day discharge procedures for gallstones, laser piles, and hernia mesh repair are performed in a sterile and comfortable environment.
            </p>
        </div>
    </div>

    <!-- Highlights Cards Grid -->
    <div class="vc-container" style="margin-top: var(--space-12);">
        <div class="vc-grid" style="grid-template-columns: repeat(4, 1fr); gap: var(--space-6);">
            <div class="vc-card vc-fade-in-scale" style="background:#fff; display: flex; flex-direction: column; gap: var(--space-3); padding: var(--space-6);">
                <img src="{{ asset('assets/icons/icon-hospital.svg') }}" style="width: 3.5rem; height: 3.5rem; object-fit: contain;" alt="Extensive Care">
                <h3 style="margin: 0; font-size: var(--text-body-lg); font-weight: 700; font-family: var(--font-display);">Extensive Care</h3>
                <p style="font-size: var(--text-body-sm); margin: 0;">Immediate diagnostic scans and treatment plans under one roof.</p>
            </div>
            <div class="vc-card vc-fade-in-scale" style="background:#fff; display: flex; flex-direction: column; gap: var(--space-3); padding: var(--space-6);">
                <img src="{{ asset('assets/icons/icon-laparoscopy.svg') }}" style="width: 3.5rem; height: 3.5rem; object-fit: contain;" alt="Newest Tech">
                <h3 style="margin: 0; font-size: var(--text-body-lg); font-weight: 700; font-family: var(--font-display);">Newest Tech</h3>
                <p style="font-size: var(--text-body-sm); margin: 0;">Advanced laparoscopy towers and laser surgical setups.</p>
            </div>
            <div class="vc-card vc-fade-in-scale" style="background:#fff; display: flex; flex-direction: column; gap: var(--space-3); padding: var(--space-6);">
                <img src="{{ asset('assets/icons/icon-shield.svg') }}" style="width: 3.5rem; height: 3.5rem; object-fit: contain;" alt="Prevention First">
                <h3 style="margin: 0; font-size: var(--text-body-lg); font-weight: 700; font-family: var(--font-display);">Prevention First</h3>
                <p style="font-size: var(--text-body-sm); margin: 0;">Emphasis on patient guides, diet advice, and post-op care.</p>
            </div>
            <div class="vc-card vc-fade-in-scale" style="background:#fff; display: flex; flex-direction: column; gap: var(--space-3); padding: var(--space-6);">
                <img src="{{ asset('assets/icons/icon-doctor.svg') }}" style="width: 3.5rem; height: 3.5rem; object-fit: contain;" alt="Multidisciplinary">
                <h3 style="margin: 0; font-size: var(--text-body-lg); font-weight: 700; font-family: var(--font-display);">Multidisciplinary</h3>
                <p style="font-size: var(--text-body-sm); margin: 0;">Surgical ward, pharmacy, diagnostics working in unison.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="vc-section vc-scroll-reveal" style="padding-block: var(--space-16);">
    <div class="vc-container">
        <div class="vc-stack" style="align-items: center; text-align: center; margin-bottom: var(--space-12);">
            <h2 class="vc-title">Our Patients Say It Best</h2>
            <p class="vc-lede">Read real feedback from patients who underwent laparoscopic and laser procedures under Dr. Pankaj Bhalerao.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-6);">
            <!-- Review 1 -->
            <div class="vc-card vc-stack vc-fade-in-scale" style="gap: var(--space-4); background: #fff; border-color: var(--color-border-strong);">
                <div style="color: #f59e0b; font-size: 1.25rem;">★★★★★</div>
                <p style="font-size: var(--text-body-sm); font-style: italic; line-height: 1.5; color: var(--color-text-muted); margin: 0;">
                    "I had my laparoscopic appendix surgery under Dr. Pankaj Bhalerao. The entire process was painless and I got discharged within 24 hours. Highly recommended surgeon in Moshi."
                </p>
                <div style="border-top: 1px solid var(--color-gray-100); padding-top: var(--space-2); display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
                    <strong style="font-size: var(--text-body-sm); color: var(--color-text);">Sandip K.</strong>
                    <span style="font-size: var(--text-caption); color: var(--color-text-subtle);">Moshi, Pune</span>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="vc-card vc-stack vc-fade-in-scale" style="gap: var(--space-4); background: #fff; border-color: var(--color-border-strong);">
                <div style="color: #f59e0b; font-size: 1.25rem;">★★★★★</div>
                <p style="font-size: var(--text-body-sm); font-style: italic; line-height: 1.5; color: var(--color-text-muted); margin: 0;">
                    "Extremely professional hospital and polite nursing staff. Dr. Pankaj explained my gallbladder stones issue very clearly and performed a clean keyhole operation. I returned to work in 5 days."
                </p>
                <div style="border-top: 1px solid var(--color-gray-100); padding-top: var(--space-2); display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
                    <strong style="font-size: var(--text-body-sm); color: var(--color-text);">Priyanka M.</strong>
                    <span style="font-size: var(--text-caption); color: var(--color-text-subtle);">Bhosari</span>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="vc-card vc-stack vc-fade-in-scale" style="gap: var(--space-4); background: #fff; border-color: var(--color-border-strong);">
                <div style="color: #f59e0b; font-size: 1.25rem;">★★★★★</div>
                <p style="font-size: var(--text-body-sm); font-style: italic; line-height: 1.5; color: var(--color-text-muted); margin: 0;">
                    "Best laser treatment for piles. Sutureless and clean procedure. Dr. Bhalerao has an amazing hand. The facility is very clean and billing is fully transparent with TPA support."
                </p>
                <div style="border-top: 1px solid var(--color-gray-100); padding-top: var(--space-2); display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
                    <strong style="font-size: var(--text-body-sm); color: var(--color-text);">Rakesh D.</strong>
                    <span style="font-size: var(--text-caption); color: var(--color-text-subtle);">Chinchwad</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Appointment booking form section -->
<section class="vc-section vc-scroll-reveal" id="booking-section" style="background: var(--color-surface); border-top: 1px solid var(--color-border);">
    <div class="vc-container" style="max-width: 45rem; margin-inline: auto; text-align: center;">
        <div class="vc-stack" style="gap: var(--space-4);">
            <h2 class="vc-title">Schedule a Consultation</h2>
            <p class="vc-lede">Submit your details below to schedule an appointment with Dr. Pankaj Bhalerao at our Moshi clinic.</p>
            
            <form action="{{ route('contact.store') }}" method="POST" class="vc-booking-form-card vc-stack vc-fade-in-scale" style="text-align: left; margin-top: var(--space-6);">
                @csrf
                <input type="hidden" name="page_source" value="about_us_merged_page_form">
                
                <div class="vc-grid" style="grid-template-columns: repeat(2, 1fr); gap: var(--space-4); width: 100%;">
                    <label class="vc-field">
                        <span class="vc-label">Patient Name <span style="color: var(--red-700);">*</span></span>
                        <input class="vc-input" name="name" placeholder="Full name" required value="{{ old('name') }}">
                    </label>
                    <label class="vc-field">
                        <span class="vc-label">Phone Number <span style="color: var(--red-700);">*</span></span>
                        <input class="vc-input" name="phone" placeholder="+91-xxxxx-xxxxx" required value="{{ old('phone') }}">
                    </label>
                </div>
                
                <div class="vc-grid" style="grid-template-columns: repeat(2, 1fr); gap: var(--space-4); width: 100%;">
                    <label class="vc-field">
                        <span class="vc-label">Select Specialty</span>
                        <select class="vc-select" name="message_prefix">
                            <option value="Laparoscopic Surgery">Laparoscopic Surgery</option>
                            <option value="Laser Piles Surgery">Laser Piles Surgery</option>
                            <option value="Hernia Mesh Repair">Hernia Mesh Repair</option>
                            <option value="Endoscopy / GI Care">Endoscopy & GI Care</option>
                            <option value="General Consultation">General Consultation</option>
                        </select>
                    </label>
                    <label class="vc-field">
                        <span class="vc-label">Preferred Date</span>
                        <input class="vc-input" type="date" name="preferred_date" style="padding-block: 0.5rem;">
                    </label>
                </div>

                <label class="vc-field" style="width: 100%; display:none;">
                    <span class="vc-label">Email Address</span>
                    <input class="vc-input" type="email" name="email" value="appointment-request@primehospital.com">
                </label>
                
                <label class="vc-field" style="width: 100%;">
                    <span class="vc-label">Symptom details / Notes (Optional)</span>
                    <textarea class="vc-textarea" name="message" placeholder="Describe symptoms or timing preference..." style="min-height: 4rem;">Preferred Slot: Requested consultation from About Us merged page.</textarea>
                </label>
                
                @if($errors->any())
                    <div class="vc-alert vc-alert--error" style="font-size: var(--text-body-sm); padding: var(--space-3); width:100%;">
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
    @media (max-width: 900px) {
        #doctor-section, #hospital-section {
            grid-template-columns: 1fr !important;
        }
        #hospital-section div[style*="grid-template-columns: repeat(4"] {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        .vc-section .vc-container {
            grid-template-columns: 1fr !important;
        }
        .vc-grid {
            grid-template-columns: 1fr !important;
        }
        section .vc-container div[style*="grid-template-columns: repeat(3"] {
            grid-template-columns: 1fr !important;
        }
        section .vc-container div[style*="grid-template-columns: repeat(4"] {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }
    @media (max-width: 550px) {
        #hospital-section div[style*="grid-template-columns: repeat(4"] {
            grid-template-columns: 1fr !important;
        }
        section .vc-container div[style*="grid-template-columns: repeat(4"] {
            grid-template-columns: 1fr !important;
        }
        #booking-section form .vc-grid {
            grid-template-columns: 1fr !important;
        }
    }
</style>
@endsection
