@props([
    'id' => 'booking-section',
    'pageSource' => 'shared_page_cta',
    'title' => 'Book Your Appointment',
    'accent' => 'Today',
    'description' => 'Take the first step towards better health. Our clinic coordinators will schedule your consultation at your convenience.',
    'treatment' => null,
])

<section class="vc-section vc-shared-cta vc-scroll-reveal" id="{{ $id }}">
    <div class="vc-container">
        <div class="vc-shared-cta__surface">
            <div class="vc-stack vc-reveal-left vc-shared-cta__intro">
                <h2 class="vc-title vc-shared-cta__title">
                    {{ $title }} <span>{{ $accent }}</span>
                </h2>
                <p class="vc-lede">{{ $description }}</p>

                <div class="vc-shared-cta__contacts">
                    <a href="tel:+917447441426" class="vc-shared-cta__contact">
                        <img src="{{ asset('assets/icons/icon-phone.svg') }}" alt="">
                        <span><small>Call Us</small><strong>+91 74474 41426</strong></span>
                    </a>
                    <a href="https://wa.me/919422668921" target="_blank" rel="noopener" class="vc-shared-cta__contact">
                        <img src="{{ asset('assets/icons/icon-whatsapp.svg') }}" alt="">
                        <span><small>WhatsApp Us</small><strong>+91 94226 68921</strong></span>
                    </a>
                    <div class="vc-shared-cta__contact">
                        <img src="{{ asset('assets/icons/icon-hospital.svg') }}" alt="">
                        <span><small>Visit Us</small><strong>Moshi, PCMC, Pune</strong></span>
                    </div>
                </div>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" class="vc-booking-form-card vc-stack vc-reveal-right">
                @csrf
                <input type="hidden" name="page_source" value="{{ $pageSource }}">

                <h3>Request Appointment</h3>

                <div class="vc-shared-cta__form-grid">
                    <label class="vc-field">
                        <span class="vc-label">Your Name <span class="vc-required">*</span></span>
                        <input class="vc-input" name="name" placeholder="Enter your name" required value="{{ old('name') }}">
                    </label>
                    <label class="vc-field">
                        <span class="vc-label">Phone Number <span class="vc-required">*</span></span>
                        <input class="vc-input" name="phone" placeholder="Enter phone number" required value="{{ old('phone') }}">
                    </label>
                </div>

                <div class="vc-shared-cta__form-grid">
                    <label class="vc-field">
                        <span class="vc-label">Select Department</span>
                        <select class="vc-select" name="message_prefix">
                            @if($treatment)
                                <option value="{{ $treatment }}">{{ $treatment }}</option>
                            @endif
                            <option value="Laparoscopic Surgery">Laparoscopic Surgery</option>
                            <option value="Laser Piles Surgery">Laser Piles Surgery</option>
                            <option value="Hernia Repair">Hernia Repair</option>
                            <option value="Endoscopy">Endoscopy</option>
                            <option value="GI and Colorectal Care">GI and Colorectal Care</option>
                            <option value="General Consultation">General Consultation</option>
                        </select>
                    </label>
                    <label class="vc-field">
                        <span class="vc-label">Preferred Date</span>
                        <input class="vc-input" type="date" name="preferred_date">
                    </label>
                </div>

                <input type="hidden" name="email" value="appointment-request@primehospital.com">

                <label class="vc-field">
                    <span class="vc-label">Your Message (Optional)</span>
                    <textarea class="vc-textarea" name="message" placeholder="Symptoms or preferred appointment time">Requesting a consultation{{ $treatment ? ' for '.$treatment : '' }}.</textarea>
                </label>

                @if($errors->any())
                    <div class="vc-alert vc-alert--error">
                        <strong>Please check your details.</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button class="vc-btn vc-btn--primary" type="submit">Book Appointment</button>
            </form>
        </div>
    </div>
</section>
