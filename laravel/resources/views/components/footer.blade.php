<footer style="background: var(--color-surface); border-top: 1px solid var(--color-border); padding-block: var(--space-16); margin-top: var(--space-20);">
    <div class="vc-container" style="display: grid; grid-template-columns: 1.2fr 0.8fr 1fr 1fr; gap: var(--space-8);">
        <!-- Column 1: Hospital Brand & Info -->
        <div class="vc-stack" style="gap: var(--space-4);">
            <div class="vc-brand" style="display: flex; align-items: center; gap: var(--space-2);">
                <span class="vc-brand__mark">+</span>
                <span style="font-weight: 800; font-family: var(--font-display);">Prime <span style="color: var(--color-care);">Speciality</span></span>
            </div>
            <p style="font-size: var(--text-body-sm); color: var(--color-text-muted); line-height: 1.6; max-width: 25ch;">
                Renowned speciality hospital offering expertise in advanced laparoscopic, colorectal, and laser surgical procedures.
            </p>
            <div style="font-size: var(--text-body-sm); color: var(--color-text-muted); display: flex; flex-direction: column; gap: var(--space-1);">
                <strong>Reg No:</strong> Moshi/PCMC/Hosp/2023
            </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="vc-stack" style="gap: var(--space-4);">
            <h4 style="font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700; color: var(--color-text); margin: 0;">Quick Links</h4>
            <nav style="display: flex; flex-direction: column; gap: var(--space-2); font-size: var(--text-body-sm);">
                <a href="{{ route('home') }}" style="text-decoration: none; color: var(--color-text-muted); hover:color: var(--color-action);">Home</a>
                <a href="{{ url('/about') }}" style="text-decoration: none; color: var(--color-text-muted);">About Us</a>
                <a href="{{ url('/gallery') }}" style="text-decoration: none; color: var(--color-text-muted);">Hospital Gallery</a>
                <a href="{{ url('/contact') }}" style="text-decoration: none; color: var(--color-text-muted);">Contact & Map</a>
            </nav>
        </div>

        <!-- Column 3: Treatments -->
        <div class="vc-stack" style="gap: var(--space-4);">
            <h4 style="font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700; color: var(--color-text); margin: 0;">Treatments</h4>
            <nav style="display: flex; flex-direction: column; gap: var(--space-2); font-size: var(--text-body-sm);">
                <a href="{{ url('/laparoscopy') }}" style="text-decoration: none; color: var(--color-text-muted);">Laparoscopy</a>
                <a href="{{ url('/hernia') }}" style="text-decoration: none; color: var(--color-text-muted);">Hernia Repair</a>
                <a href="{{ url('/hemorrhoids') }}" style="text-decoration: none; color: var(--color-text-muted);">Laser Piles Surgery</a>
                <a href="{{ url('/gallbladder') }}" style="text-decoration: none; color: var(--color-text-muted);">Gallbladder Stone</a>
                <a href="{{ url('/appendicitis') }}" style="text-decoration: none; color: var(--color-text-muted);">Appendicitis</a>
                <a href="{{ url('/endoscopy') }}" style="text-decoration: none; color: var(--color-text-muted);">Endoscopy</a>
            </nav>
        </div>

        <!-- Column 4: Newsletter & Contact -->
        <div class="vc-stack" style="gap: var(--space-4);">
            <h4 style="font-family: var(--font-display); font-size: var(--text-body-md); font-weight: 700; color: var(--color-text); margin: 0;">Stay Updated</h4>
            <p style="font-size: var(--text-caption); color: var(--color-text-muted); line-height: 1.5; margin: 0;">
                Subscribe to our newsletter for health tips and surgical recovery guides.
            </p>
            <form id="newsletter-form" class="vc-stack" style="gap: var(--space-2);">
                @csrf
                <div style="display: flex; gap: var(--space-1);">
                    <input type="email" name="email" id="newsletter-email" class="vc-input" placeholder="Your email address" required style="min-height: 2.5rem; padding: 0.5rem 0.75rem; font-size: var(--text-body-sm);">
                    <button type="submit" class="vc-btn vc-btn--primary vc-btn--sm" style="min-height: 2.5rem; padding: 0.5rem 1rem;">Go</button>
                </div>
                <div id="newsletter-msg" style="display: none; font-size: var(--text-caption);"></div>
            </form>
            
            <!-- Urgent guidance warning block -->
            <div style="margin-top: var(--space-2); padding: var(--space-2); border-radius: var(--radius-sm); border: 1px solid var(--red-200); background: var(--red-50); font-size: var(--text-caption); color: var(--red-700); line-height: 1.4;">
                <strong>Urgent Medical Need?</strong><br>
                Please call emergency services or visit the nearest ER. Do not wait for online responses.
            </div>
        </div>
    </div>

    <!-- Bottom copyrights area -->
    <div style="margin-top: var(--space-12); border-top: 1px solid var(--color-border); padding-top: var(--space-6);">
        <div class="vc-container" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: var(--space-4); font-size: var(--text-caption); color: var(--color-text-subtle);">
            <span>&copy; {{ date('Y') }} Prime Speciality Hospital. All rights reserved. Registered under PCMC Moshi, Pune.</span>
            <div class="vc-cluster" style="gap: var(--space-4);">
                <span>Clinician-reviewed Content</span>
                <span>•</span>
                <span>WCAG 2.2 AA compliant</span>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Responsive adjustment for footer grid */
    @media (max-width: 900px) {
        footer .vc-container {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }
    @media (max-width: 500px) {
        footer .vc-container {
            grid-template-columns: 1fr !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const nForm = document.getElementById('newsletter-form');
        const nEmail = document.getElementById('newsletter-email');
        const nMsg = document.getElementById('newsletter-msg');
        
        if (nForm) {
            nForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                nMsg.style.display = 'block';
                nMsg.style.color = 'var(--color-text-subtle)';
                nMsg.textContent = 'Subscribing...';
                
                const formData = new FormData();
                formData.append('email', nEmail.value);
                formData.append('_token', nForm.querySelector('input[name="_token"]').value);
                
                fetch('{{ route("newsletter.store") }}', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                    },
                    body: formData
                })
                .then(response => {
                    return response.json().then(data => ({
                        status: response.status,
                        data: data
                    }));
                })
                .then(res => {
                    if (res.status === 200 || res.status === 201) {
                        nMsg.style.color = 'var(--green-700)';
                        nMsg.textContent = res.data.message || 'Subscribed successfully!';
                        nEmail.value = '';
                    } else {
                        nMsg.style.color = 'var(--red-700)';
                        nMsg.textContent = res.data.message || 'Subscription failed. Please check email address.';
                    }
                })
                .catch(err => {
                    console.error('Newsletter Error:', err);
                    nMsg.style.color = 'var(--red-700)';
                    nMsg.textContent = 'A server error occurred. Please try again.';
                });
            });
        }
    });
</script>
