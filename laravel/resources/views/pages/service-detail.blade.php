@extends('layouts.app')

@section('title', $page->title . ' Treatment in Moshi, Pune | Prime Speciality Hospital')
@section('meta_description', $page->meta_description ?? 'Expert surgical treatment for ' . $page->title . ' under Dr. Pankaj Bhalerao. Fast recovery, minimal scars, and advanced technology.')

@section('content')
@php
$factsMap = [
    'appendicitis' => [
        'duration' => '30 - 60 Mins',
        'stay' => '1 - 2 Days',
        'recovery' => '1 - 2 Weeks',
        'success' => '99.5%',
        'highlights' => ['Emergency Surgery', 'Laparoscopic Care', '24h Stay Only', 'Painless Portals']
    ],
    'laparoscopy' => [
        'duration' => '45 - 90 Mins',
        'stay' => 'Day Care / 1 Day',
        'recovery' => '3 - 5 Days',
        'success' => '98%',
        'highlights' => ['Minimally Invasive', 'Diagnostic & Surgical', 'Keyhole Scars', 'Rapid Recovery']
    ],
    'hernia' => [
        'duration' => '45 - 60 Mins',
        'stay' => '1 Day',
        'recovery' => '5 - 7 Days',
        'success' => '99%',
        'highlights' => ['Mesh Reinforcement', 'Tension-Free Repair', 'Laparoscopic Method', 'Low Recurrence']
    ],
    'breast-surgery' => [
        'duration' => '60 - 120 Mins',
        'stay' => '1 - 2 Days',
        'recovery' => '1 - 2 Weeks',
        'success' => '95%',
        'highlights' => ['Oncological Precision', 'Cosmetic Sutures', 'Expert Diagnostics', 'Safe Recovery']
    ],
    'thyroid' => [
        'duration' => '60 - 90 Mins',
        'stay' => '1 - 2 Days',
        'recovery' => '1 - 2 Weeks',
        'success' => '98%',
        'highlights' => ['Hormonal Balance', 'Cosmetic Neck Incision', 'Nerve Monitoring', 'Full Recovery']
    ],
    'gallbladder' => [
        'duration' => '45 - 60 Mins',
        'stay' => '1 Day',
        'recovery' => '3 - 5 Days',
        'success' => '99.2%',
        'highlights' => ['Keyhole Removal', 'Gallstone Extraction', 'Painless Recovery', 'Normal Diet Soon']
    ],
    'fistula' => [
        'duration' => '30 - 45 Mins',
        'stay' => 'Day Care / 1 Day',
        'recovery' => '1 - 2 Weeks',
        'success' => '96%',
        'highlights' => ['Laser FiLaC Method', 'Sphincter Preserving', 'Sutureless Healing', 'Minimal Recurrence']
    ],
    'fissure' => [
        'duration' => '20 - 30 Mins',
        'stay' => 'Day Care',
        'recovery' => '2 - 3 Days',
        'success' => '98%',
        'highlights' => ['Laser Sphincterotomy', 'No Cut, No Stitches', 'Instant Pain Relief', 'Same Day Walk']
    ],
    'hemorrhoids' => [
        'duration' => '15 - 30 Mins',
        'stay' => 'Day Care',
        'recovery' => '1 - 2 Days',
        'success' => '98%+',
        'highlights' => ['Minimally Invasive', 'Painless Procedure', 'Quick Recovery', 'High Success Rate']
    ],
    'endoscopy' => [
        'duration' => '15 - 30 Mins',
        'stay' => 'Day Care (2 Hrs)',
        'recovery' => 'Same Day',
        'success' => 'Diagnostic',
        'highlights' => ['Visual Diagnostics', 'No Sedation Pain', 'Same Day Report', 'Expert Evaluation']
    ]
];
$currentFacts = $factsMap[$page->slug] ?? [
    'duration' => '30 - 60 Mins',
    'stay' => '1 Day',
    'recovery' => '3 - 7 Days',
    'success' => '98%',
    'highlights' => ['Minimally Invasive', 'Painless Procedure', 'Quick Recovery', 'High Success Rate']
];
@endphp

<!-- Breadcrumbs Container -->
<section style="background: var(--color-surface); padding-block: var(--space-4); border-bottom: 1px solid var(--color-border);">
    <div class="vc-container">
        <nav style="display: flex; gap: var(--space-2); font-size: var(--text-caption); color: var(--color-text-subtle);">
            <a href="{{ route('home') }}" style="text-decoration: none;">Home</a>
            <span>/</span>
            <a href="{{ route('home') }}#booking-section" style="text-decoration: none;">Treatments</a>
            <span>/</span>
            <span style="color: var(--color-text); font-weight: 600;">{{ $page->title }}</span>
        </nav>
    </div>
</section>

<!-- Service Hero Section -->
<section class="vc-section" style="padding-bottom: var(--space-12); background: radial-gradient(circle at 85% 30%, rgb(219 234 254 / 50%), transparent 40%), linear-gradient(180deg, #fff 0%, #f7faff 100%);">
    <div class="vc-container vc-hero__grid" style="grid-template-columns: 1.15fr 0.85fr; gap: var(--space-12); align-items: center;">
        <div class="vc-stack" style="gap: var(--space-6);">
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--blue-50); border: 1px solid var(--blue-200); padding: 0.35rem 0.75rem; border-radius: var(--radius-round); width: fit-content;">
                <span style="font-size: var(--text-caption); font-weight: 700; color: var(--color-action); text-transform: uppercase; letter-spacing: 0.05em;">Minimally invasive. Maximum Comfort.</span>
            </div>
            
            <h1 style="font-family: var(--font-display); font-size: clamp(2.25rem, 4.5vw, 3.5rem); font-weight: 800; color: var(--color-text); margin: 0; line-height: 1.1;">
                Advanced <span class="vc-gradient-text">{{ $page->title }}</span> Treatment
            </h1>
            
            <p class="vc-lede" style="font-size: var(--text-body-lg); line-height: 1.6; color: var(--color-text-muted);">
                Advanced surgical and laser technology for painless treatment, faster recovery, and long-term relief under Dr. Pankaj Bhalerao.
            </p>

            <!-- Bullet highlights strip below summary -->
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: var(--space-3); border-top: 1px solid var(--color-border); padding-top: var(--space-4); margin-top: var(--space-2);">
                @foreach($currentFacts['highlights'] as $highlight)
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: var(--text-body-sm); font-weight: 600; color: var(--color-text);">
                        <span style="color: var(--color-care); font-size: 1.15rem;">✓</span> {{ $highlight }}
                    </div>
                @endforeach
            </div>

            <div class="vc-cluster" style="margin-top: var(--space-4);">
                <a href="#booking-block" class="vc-btn vc-btn--primary vc-btn--lg">Book Appointment ➔</a>
                <a href="tel:7447441426" class="vc-btn vc-btn--outline vc-btn--lg">Speak to Expert</a>
            </div>
        </div>

        <!-- Hero Right: SVG medical illustration backdrop -->
        <div style="position: relative; width: 100%; display: grid; place-items: center;">
            <div style="position: absolute; width: 22rem; aspect-ratio: 1; border-radius: 50%; background: radial-gradient(circle, rgba(16, 179, 100, 0.12) 0%, rgba(255,255,255,0) 70%); border: 1px dashed rgba(16, 179, 100, 0.2); z-index: 1;"></div>
            <!-- Laser Surgery generated image -->
            <div style="position: relative; width: 20rem; aspect-ratio: 1; border-radius: 50%; overflow: hidden; border: 1px solid var(--color-border-strong); box-shadow: var(--shadow-md); background: #fff; z-index: 2;">
                <img src="{{ asset('assets/laser_surgery_illustration.png') }}" alt="{{ $page->title }} surgical illustration" class="vc-reveal-image" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            
            <div style="position: absolute; bottom: -1rem; background: #fff; border: 1px solid var(--color-border); padding: 0.5rem 1rem; border-radius: var(--radius-round); font-size: var(--text-caption); font-weight: 700; color: var(--green-800); border-color: var(--green-300); z-index: 3; display: flex; align-items: center; gap: 0.25rem; box-shadow: var(--shadow-sm);">
                <span>🛡️</span> Day Care Procedure
            </div>
        </div>
    </div>
</section>

<!-- Key Facts metrics block -->
<section class="vc-section vc-scroll-reveal" style="padding-block: var(--space-12); border-bottom: 1px solid var(--color-border);">
    <div class="vc-container">
        <div class="vc-grid" style="grid-template-columns: 0.95fr 1.05fr; gap: var(--space-12); align-items: center;">
            <div class="vc-stack" style="gap: var(--space-4);">
                <span class="vc-eyebrow">What is it?</span>
                <h3 style="font-family: var(--font-display); font-size: var(--text-h2); font-weight: 800; color: var(--color-text); margin:0;">What is {{ $page->title }}?</h3>
                <p style="color: var(--color-text-muted); font-size: var(--text-body-md); line-height: 1.6;">
                    Learn about clinical markers, parameters, and modern daycare surgical methods. Laparoscopy and laser surgeries bypass large cuts, ensuring safe outcomes and lower recurrence rates.
                </p>
            </div>

            <!-- Facts Grid -->
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: var(--space-4);">
                <div class="vc-card vc-fade-in-scale" style="padding: var(--space-6); background: var(--color-surface); border-color: var(--color-border-strong); display:flex; flex-direction:column; gap:0.25rem;">
                    <span style="font-size: var(--text-caption); color: var(--color-text-subtle); text-transform: uppercase; font-weight:700;">Duration</span>
                    <strong style="font-size: var(--text-h3); color: var(--color-action); font-family: var(--font-display);">{{ $currentFacts['duration'] }}</strong>
                </div>
                <div class="vc-card vc-fade-in-scale" style="padding: var(--space-6); background: var(--color-surface); border-color: var(--color-border-strong); display:flex; flex-direction:column; gap:0.25rem;">
                    <span style="font-size: var(--text-caption); color: var(--color-text-subtle); text-transform: uppercase; font-weight:700;">Hospital Stay</span>
                    <strong style="font-size: var(--text-h3); color: var(--color-action); font-family: var(--font-display);">{{ $currentFacts['stay'] }}</strong>
                </div>
                <div class="vc-card vc-fade-in-scale" style="padding: var(--space-6); background: var(--color-surface); border-color: var(--color-border-strong); display:flex; flex-direction:column; gap:0.25rem;">
                    <span style="font-size: var(--text-caption); color: var(--color-text-subtle); text-transform: uppercase; font-weight:700;">Back to Work</span>
                    <strong style="font-size: var(--text-h3); color: var(--color-action); font-family: var(--font-display);">{{ $currentFacts['recovery'] }}</strong>
                </div>
                <div class="vc-card vc-fade-in-scale" style="padding: var(--space-6); background: var(--color-surface); border-color: var(--color-border-strong); display:flex; flex-direction:column; gap:0.25rem;">
                    <span style="font-size: var(--text-caption); color: var(--color-text-subtle); text-transform: uppercase; font-weight:700;">Success Rate</span>
                    <strong style="font-size: var(--text-h3); color: var(--color-care); font-family: var(--font-display);">{{ $currentFacts['success'] }}</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content & Details -->
<section class="vc-section vc-scroll-reveal" style="background: var(--color-surface); border-bottom: 1px solid var(--color-border);">
    <div class="vc-container" style="display: grid; grid-template-columns: 1.3fr 0.7fr; gap: var(--space-12);">
        
        <!-- Main body content from DB (rendered with design style classes via app.css) -->
        <div class="vc-card vc-fade-in-scale" style="background: #fff; border: 1px solid var(--color-border-strong); padding: var(--space-8);">
            <div class="vc-service-body">
                {!! $page->body !!}
            </div>
            
            <div style="margin-top: var(--space-8); padding: var(--space-4); border-radius: var(--radius-md); background: var(--blue-50); border: 1px solid var(--blue-200); font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.5;">
                <strong>Medical Review Notice:</strong> All content relating to surgical procedures, diagnostic criteria, and recovery benchmarks on this page is reviewed by Dr. Pankaj Bhalerao, MS (General Surgery). Note that actual clinical results may vary depending on patient health status and surgical complexities.
            </div>
        </div>

        <!-- Sidebar (Comparison Table & Specialist profile) -->
        <div class="vc-stack" style="gap: var(--space-8);">
            <!-- Comparison Table -->
            <div class="vc-card vc-fade-in-scale" style="background: #fff; padding: var(--space-6); border-color: var(--color-border-strong);">
                <h3 style="margin-top: 0; font-family: var(--font-display); font-size: var(--text-body-lg); font-weight:700;">Laser/Keyhole vs Traditional Surgery</h3>
                <p style="font-size: var(--text-caption); color: var(--color-text-muted); margin-bottom: var(--space-4);">Compare outcomes for advanced keyhole methods vs open cuts.</p>
                
                <div style="display: flex; flex-direction: column; gap: var(--space-4); font-size: var(--text-body-sm);">
                    <div style="border-bottom: 1px solid var(--color-gray-100); padding-bottom: 0.5rem;">
                        <span style="display:block; font-size: var(--text-caption); color:var(--color-text-subtle); font-weight:700; text-transform:uppercase;">Pain Level</span>
                        <div style="color: var(--color-care); font-weight: 600;">Minimal (Mild analgesics)</div>
                        <div style="color: var(--color-text-subtle);">Moderate to Severe (Requires strong painkillers)</div>
                    </div>
                    <div style="border-bottom: 1px solid var(--color-gray-100); padding-bottom: 0.5rem;">
                        <span style="display:block; font-size: var(--text-caption); color:var(--color-text-subtle); font-weight:700; text-transform:uppercase;">Bleeding / Cuts</span>
                        <div style="color: var(--color-care); font-weight: 600;">Very Little (Keyhole/Laser portals)</div>
                        <div style="color: var(--color-text-subtle);">More bleeding (Requires large incisions)</div>
                    </div>
                    <div style="border-bottom: 1px solid var(--color-gray-100); padding-bottom: 0.5rem;">
                        <span style="display:block; font-size: var(--text-caption); color:var(--color-text-subtle); font-weight:700; text-transform:uppercase;">Hospital Stay</span>
                        <div style="color: var(--color-care); font-weight: 600;">Day Care (Same day discharge)</div>
                        <div style="color: var(--color-text-subtle);">1 - 3 Days Admission</div>
                    </div>
                    <div style="border-bottom: 1px solid var(--color-gray-100); padding-bottom: 0.5rem;">
                        <span style="display:block; font-size: var(--text-caption); color:var(--color-text-subtle); font-weight:700; text-transform:uppercase;">Infection Risk</span>
                        <div style="color: var(--color-care); font-weight: 600;">Very Low (Portal closure)</div>
                        <div style="color: var(--color-text-subtle);">Higher risk (Open exposure)</div>
                    </div>
                </div>
            </div>

            <!-- Specialist Profile Card -->
            <div class="vc-card vc-fade-in-scale" style="background: #fff; padding: var(--space-6); border-color: var(--color-border-strong); display: flex; flex-direction: column; align-items: center; text-align: center;">
                <div style="width: 6rem; height: 6rem; border-radius: 50%; overflow: hidden; border: 2px solid var(--color-border-strong); margin-bottom: var(--space-3);">
                    <img src="{{ asset('assets/drpankajbhalerao.jpeg') }}" alt="Dr. Pankaj Bhalerao" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h4 style="margin: 0; font-family: var(--font-display); font-size: var(--text-body-lg); font-weight: 700; color: var(--color-text);">Dr. Pankaj Bhalerao</h4>
                <p style="font-size: var(--text-caption); color: var(--color-text-muted); margin-bottom: var(--space-4);">MS - General Surgery, FMAS (10+ Years Experience)</p>
                <a href="{{ url('/dr-pankaj-bhalerao') }}" class="vc-btn vc-btn--outline vc-btn--sm" style="width: 100%; border-color:var(--blue-300); color:var(--color-action);">View Credentials</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to action booking form -->
<section class="vc-section vc-scroll-reveal" id="booking-block" style="padding-block: var(--space-16);">
    <div class="vc-container">
        <div style="max-width: 45rem; margin-inline: auto; text-align: center;" class="vc-stack">
            <span class="vc-eyebrow">Consultation</span>
            <h2 class="vc-title">Book a Specialised Assessment</h2>
            <p class="vc-lede">Get a clinical consultation, diagnostics referral, or a trusted surgical second opinion.</p>
            
            <form action="{{ route('contact.store') }}" method="POST" class="vc-booking-form-card vc-stack" style="text-align: left; margin-top: var(--space-6);">
                @csrf
                <input type="hidden" name="page_source" value="procedure_page_{{ $page->slug }}">
                
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
                
                <label class="vc-field" style="width: 100%;">
                    <span class="vc-label">Email Address <span style="color: var(--red-700);">*</span></span>
                    <input class="vc-input" type="email" name="email" placeholder="email@example.com" required value="{{ old('email') }}">
                </label>

                <input type="hidden" name="message_prefix" value="Treatment Request: {{ $page->title }}">
                
                <label class="vc-field" style="width: 100%;">
                    <span class="vc-label">Symptoms / Notes <span style="color: var(--red-700);">*</span></span>
                    <textarea class="vc-textarea" name="message" placeholder="Provide brief symptoms or details about past diagnosis..." required>Preferred Slot: Requesting consultation for {{ $page->title }}.</textarea>
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
                    Submit Request <span>→</span>
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
