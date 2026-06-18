<header class="vc-header" style="position: sticky; top: 0; z-index: 100; background: rgba(255, 255, 255, 0.9); border-bottom: 1px solid var(--color-border); backdrop-filter: blur(16px);">
    <div class="vc-container vc-nav">
        <!-- Logo -->
        <a class="vc-brand" href="{{ route('home') }}" style="display: flex; align-items: center; gap: var(--space-3);">
            <img src="{{ asset('assets/prime-logo-for-website.png') }}" alt="Prime Speciality Hospital" style="height: 3.25rem; width: auto; max-width: 100%;">
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="vc-nav__links" aria-label="Main Navigation">
            <a class="vc-nav__link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            <!-- Procedures Menu -->
            <div class="vc-dropdown" id="treatments-dropdown-container">
                <button id="treatments-dropdown-btn" class="vc-nav__link" aria-haspopup="true" aria-expanded="false" style="display: flex; align-items: center; gap: 0.25rem; border: none; background: none; cursor: pointer; padding: 0;">
                    Treatments <span style="font-size: 0.75rem; transition: transform 0.2s;">▼</span>
                </button>
                <div id="treatments-mega-menu" class="vc-mega-menu-wrapper" role="region" aria-labelledby="treatments-dropdown-btn">
                    <div class="vc-mega-menu">
                        <div class="vc-mega-menu-grid">
                            <a href="{{ url('/laparoscopy') }}" class="vc-mega-menu-tile">
                                <img class="vc-mega-menu-icon" src="{{ asset('assets/icons/icon-laparoscopy.svg') }}" alt="Laparoscopy" loading="lazy">
                                <div class="vc-mega-menu-info">
                                    <h5 class="vc-mega-menu-title">Laparoscopy</h5>
                                    <span class="vc-mega-menu-desc">Minimally invasive keyhole surgeries</span>
                                </div>
                            </a>
                            <a href="{{ url('/hernia') }}" class="vc-mega-menu-tile">
                                <img class="vc-mega-menu-icon" src="{{ asset('assets/icons/icon-hernia.svg') }}" alt="Hernia Surgery" loading="lazy">
                                <div class="vc-mega-menu-info">
                                    <h5 class="vc-mega-menu-title">Hernia Surgery</h5>
                                    <span class="vc-mega-menu-desc">Tension-free mesh repairs</span>
                                </div>
                            </a>
                            <a href="{{ url('/hemorrhoids') }}" class="vc-mega-menu-tile">
                                <img class="vc-mega-menu-icon" src="{{ asset('assets/icons/icon-piles.svg') }}" alt="Laser Piles" loading="lazy">
                                <div class="vc-mega-menu-info">
                                    <h5 class="vc-mega-menu-title">Laser Piles</h5>
                                    <span class="vc-mega-menu-desc">Sutureless daycare piles care</span>
                                </div>
                            </a>
                            <a href="{{ url('/gallbladder') }}" class="vc-mega-menu-tile">
                                <img class="vc-mega-menu-icon" src="{{ asset('assets/icons/icon-gallbladder.svg') }}" alt="Gallbladder" loading="lazy">
                                <div class="vc-mega-menu-info">
                                    <h5 class="vc-mega-menu-title">Gallbladder</h5>
                                    <span class="vc-mega-menu-desc">Cholecystectomy stone removal</span>
                                </div>
                            </a>
                            <a href="{{ url('/appendicitis') }}" class="vc-mega-menu-tile">
                                <img class="vc-mega-menu-icon" src="{{ asset('assets/icons/icon-appendicitis.svg') }}" alt="Appendicitis" loading="lazy">
                                <div class="vc-mega-menu-info">
                                    <h5 class="vc-mega-menu-title">Appendicitis</h5>
                                    <span class="vc-mega-menu-desc">Emergency keyhole appendectomy</span>
                                </div>
                            </a>
                            <a href="{{ url('/endoscopy') }}" class="vc-mega-menu-tile">
                                <img class="vc-mega-menu-icon" src="{{ asset('assets/icons/icon-endoscopy.svg') }}" alt="Endoscopy" loading="lazy">
                                <div class="vc-mega-menu-info">
                                    <h5 class="vc-mega-menu-title">Endoscopy</h5>
                                    <span class="vc-mega-menu-desc">Upper GI diagnostic visualization</span>
                                </div>
                            </a>
                            <a href="{{ url('/breast-surgery') }}" class="vc-mega-menu-tile">
                                <img class="vc-mega-menu-icon" src="{{ asset('assets/icons/icon-breast.svg') }}" alt="Breast Surgery" loading="lazy">
                                <div class="vc-mega-menu-info">
                                    <h5 class="vc-mega-menu-title">Breast Surgery</h5>
                                    <span class="vc-mega-menu-desc">Cysts & lump surgical removal</span>
                                </div>
                            </a>
                            <a href="{{ url('/thyroid') }}" class="vc-mega-menu-tile">
                                <img class="vc-mega-menu-icon" src="{{ asset('assets/icons/icon-thyroid.svg') }}" alt="Thyroid Surgery" loading="lazy">
                                <div class="vc-mega-menu-info">
                                    <h5 class="vc-mega-menu-title">Thyroid Surgery</h5>
                                    <span class="vc-mega-menu-desc">Goiters, nodules & tumor removal</span>
                                </div>
                            </a>
                            <a href="{{ url('/fistula') }}" class="vc-mega-menu-tile">
                                <img class="vc-mega-menu-icon" src="{{ asset('assets/icons/icon-fistula.svg') }}" alt="Fistula Treatment" loading="lazy">
                                <div class="vc-mega-menu-info">
                                    <h5 class="vc-mega-menu-title">Fistula Treatment</h5>
                                    <span class="vc-mega-menu-desc">Advanced FiLaC laser closure</span>
                                </div>
                            </a>
                            <a href="{{ url('/fissure') }}" class="vc-mega-menu-tile">
                                <img class="vc-mega-menu-icon" src="{{ asset('assets/icons/icon-fissure.svg') }}" alt="Fissure Treatment" loading="lazy">
                                <div class="vc-mega-menu-info">
                                    <h5 class="vc-mega-menu-title">Fissure Treatment</h5>
                                    <span class="vc-mega-menu-desc">Sphincterotomy & recovery plan</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="vc-nav__link {{ Request::is('gallery') ? 'active' : '' }}" href="{{ url('/gallery') }}">Gallery</a>
            <a class="vc-nav__link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About Us</a>
            <a class="vc-nav__link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
        </nav>

        <!-- CTA & Mobile Trigger -->
        <div class="vc-cluster" style="align-items: center; gap: var(--space-4);">
            <!-- Contact Phone Shortcut -->
            <a href="tel:+917447441426" class="vc-btn vc-btn--outline vc-btn--sm desktop-only" style="display: inline-flex; align-items: center; gap: 0.25rem;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--color-action);"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <span style="font-weight:600;">+91 74474 41426</span>
            </a>
            
            <a href="{{ url('/appointment') }}" class="vc-btn vc-btn--primary vc-btn--sm desktop-only">Book Appointment</a>
            
            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-toggle" aria-label="Toggle menu" style="display: none; border: none; background: none; font-size: 1.5rem; cursor: pointer; color: var(--color-text); padding: 0.5rem;">
                ☰
            </button>
        </div>
    </div>

    <!-- Mobile Drawer Navigation -->
    <div id="mobile-nav-drawer" style="display: none; border-top: 1px solid var(--color-border); background: #fff; padding: var(--space-4); flex-direction: column; gap: var(--space-4);">
        <a style="display: block; font-weight: 600; text-decoration: none; padding-block: 0.5rem; border-bottom: 1px solid var(--color-gray-100);" href="{{ route('home') }}">Home</a>
        <!-- Mobile Treatments Accordion -->
        <div>
            <button id="mobile-treatments-toggle" style="display: flex; justify-content: space-between; width: 100%; border: none; background: none; font-weight: 600; text-decoration: none; padding-block: 0.5rem; border-bottom: 1px solid var(--color-gray-100); text-align: left; cursor: pointer;">
                Treatments <span>▼</span>
            </button>
            <div id="mobile-treatments-list" style="display: none; padding-left: var(--space-4); margin-top: var(--space-2); flex-direction: column; gap: 0.5rem;">
                <a href="{{ url('/laparoscopy') }}" style="display: block; text-decoration: none; font-size: var(--text-body-sm); color: var(--color-text-muted);">Laparoscopy</a>
                <a href="{{ url('/hernia') }}" style="display: block; text-decoration: none; font-size: var(--text-body-sm); color: var(--color-text-muted);">Hernia Surgery</a>
                <a href="{{ url('/hemorrhoids') }}" style="display: block; text-decoration: none; font-size: var(--text-body-sm); color: var(--color-text-muted);">Laser Piles Surgery</a>
                <a href="{{ url('/gallbladder') }}" style="display: block; text-decoration: none; font-size: var(--text-body-sm); color: var(--color-text-muted);">Gallbladder Surgery</a>
                <a href="{{ url('/appendicitis') }}" style="display: block; text-decoration: none; font-size: var(--text-body-sm); color: var(--color-text-muted);">Appendicitis Surgery</a>
                <a href="{{ url('/endoscopy') }}" style="display: block; text-decoration: none; font-size: var(--text-body-sm); color: var(--color-text-muted);">Endoscopy</a>
                <a href="{{ url('/breast-surgery') }}" style="display: block; text-decoration: none; font-size: var(--text-body-sm); color: var(--color-text-muted);">Breast Surgery</a>
                <a href="{{ url('/thyroid') }}" style="display: block; text-decoration: none; font-size: var(--text-body-sm); color: var(--color-text-muted);">Thyroid Surgery</a>
                <a href="{{ url('/fistula') }}" style="display: block; text-decoration: none; font-size: var(--text-body-sm); color: var(--color-text-muted);">Fistula Treatment</a>
                <a href="{{ url('/fissure') }}" style="display: block; text-decoration: none; font-size: var(--text-body-sm); color: var(--color-text-muted);">Fissure Treatment</a>
            </div>
        </div>
        
        <a style="display: block; font-weight: 600; text-decoration: none; padding-block: 0.5rem; border-bottom: 1px solid var(--color-gray-100);" href="{{ url('/gallery') }}">Gallery</a>
        <a style="display: block; font-weight: 600; text-decoration: none; padding-block: 0.5rem; border-bottom: 1px solid var(--color-gray-100);" href="{{ url('/about') }}">About Us</a>
        <a style="display: block; font-weight: 600; text-decoration: none; padding-block: 0.5rem; border-bottom: 1px solid var(--color-gray-100);" href="{{ url('/contact') }}">Contact</a>
        <a href="{{ url('/appointment') }}" class="vc-btn vc-btn--primary vc-btn--sm" style="width: 100%; text-align: center; margin-top: 0.5rem;">Book Appointment</a>
    </div>
</header>

<style>
    /* Styling active state for links */
    .vc-nav__link.active {
        color: var(--color-action);
        border-bottom: 2px solid var(--color-action);
        padding-bottom: 0.25rem;
    }
    
    .dropdown-item:hover {
        background-color: var(--blue-50);
        color: var(--color-action);
    }
    
    /* Dropdown active state styling */
    @media (min-width: 768px) {
        .vc-dropdown.is-open .vc-mega-menu-wrapper {
            display: block !important;
        }
        .vc-dropdown.is-open button span {
            transform: rotate(180deg);
        }
    }
    
    /* Responsive details */
    @media (max-width: 767px) {
        #mobile-menu-toggle {
            display: block !important;
        }
        .desktop-only {
            display: none !important;
        }
        .vc-nav {
            justify-content: space-between;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('mobile-menu-toggle');
        const drawer = document.getElementById('mobile-nav-drawer');
        const treatToggle = document.getElementById('mobile-treatments-toggle');
        const treatList = document.getElementById('mobile-treatments-list');
        
        if (toggleBtn && drawer) {
            toggleBtn.addEventListener('click', function() {
                if (drawer.style.display === 'none' || drawer.style.display === '') {
                    drawer.style.display = 'flex';
                    toggleBtn.textContent = '✕';
                } else {
                    drawer.style.display = 'none';
                    toggleBtn.textContent = '☰';
                }
            });
        }
        
        if (treatToggle && treatList) {
            treatToggle.addEventListener('click', function() {
                if (treatList.style.display === 'none' || treatList.style.display === '') {
                    treatList.style.display = 'flex';
                    treatToggle.querySelector('span').textContent = '▲';
                } else {
                    treatList.style.display = 'none';
                    treatToggle.querySelector('span').textContent = '▼';
                }
            });
        }

        // Mega Menu Interaction Controller
        const container = document.getElementById('treatments-dropdown-container');
        const toggle = document.getElementById('treatments-dropdown-btn');
        let closeTimeout = null;

        if (container && toggle) {
            function openMenu() {
                if (closeTimeout) clearTimeout(closeTimeout);
                container.classList.add('is-open');
                toggle.setAttribute('aria-expanded', 'true');
            }

            function closeMenu() {
                if (closeTimeout) clearTimeout(closeTimeout);
                container.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
            }

            function delayCloseMenu() {
                if (closeTimeout) clearTimeout(closeTimeout);
                closeTimeout = setTimeout(() => {
                    closeMenu();
                }, 180); // 180ms closing delay to prevent hover gaps
            }

            // Mouse Events for Desktop
            container.addEventListener('mouseenter', openMenu);
            container.addEventListener('mouseleave', delayCloseMenu);

            // Toggle on Click for Touch Devices
            toggle.addEventListener('click', function(e) {
                e.stopPropagation();
                if (container.classList.contains('is-open')) {
                    closeMenu();
                } else {
                    openMenu();
                }
            });

            // Keyboard & Focus Management
            document.addEventListener('click', function(e) {
                if (!container.contains(e.target)) {
                    closeMenu();
                }
            });

            // Close on Escape Key
            container.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeMenu();
                    toggle.focus();
                }
            });

            // Close when focus leaves the dropdown elements entirely
            const focusableElements = container.querySelectorAll('a, button');
            focusableElements.forEach(el => {
                el.addEventListener('focus', () => {
                    if (closeTimeout) clearTimeout(closeTimeout);
                    openMenu();
                });
                el.addEventListener('blur', () => {
                    // Check if the newly focused element is still inside the dropdown container
                    setTimeout(() => {
                        if (!container.contains(document.activeElement)) {
                            closeMenu();
                        }
                    }, 50);
                });
            });
        }
    });
</script>
