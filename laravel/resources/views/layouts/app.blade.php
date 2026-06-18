<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Prime Speciality Hospital - Advanced Surgical Care in Moshi')</title>
    <meta name="description" content="@yield('meta_description', 'Prime Speciality Hospital in Moshi offers expert laparoscopic, hernia, piles, gallbladder, and general surgical care. Book an appointment today.')">
    
    <!-- Preconnect & Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Vite CSS and JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.header')

    <main id="main-content">
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Mobile Sticky Bottom Navbar -->
    <div class="vc-mobile-bottom-bar">
        <a href="tel:07447441426" style="flex: 1; display: flex; align-items: center; justify-content: center; gap: 0.5rem; background: linear-gradient(135deg, #2563eb, #1d4ed8); color: #fff; text-decoration: none; padding: 0.8rem 1rem; border-radius: 30px; font-weight: 800; font-size: 0.78rem; text-align: center; text-transform: uppercase; letter-spacing: 0.04em; box-shadow: 0 4px 14px rgba(37, 99, 235, 0.22); transition: transform 0.2s ease, box-shadow 0.2s ease;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call Us
        </a>
        <a href="https://wa.me/919422668921" target="_blank" style="flex: 1; display: flex; align-items: center; justify-content: center; gap: 0.5rem; background: linear-gradient(135deg, #10b981, #059669); color: #fff; text-decoration: none; padding: 0.8rem 1rem; border-radius: 30px; font-weight: 800; font-size: 0.78rem; text-align: center; text-transform: uppercase; letter-spacing: 0.04em; box-shadow: 0 4px 14px rgba(16, 185, 129, 0.22); transition: transform 0.2s ease, box-shadow 0.2s ease;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
            WhatsApp
        </a>
    </div>

    <!-- Flash message toast alerts if needed -->
    @if(session('success'))
        <div id="success-toast" class="vc-alert vc-alert--success" style="position: fixed; bottom: 2rem; right: 2rem; z-index: 999; box-shadow: var(--shadow-lg);">
            <strong>{{ session('success') }}</strong>
        </div>
        <script>
            setTimeout(() => {
                document.getElementById('success-toast')?.remove();
            }, 5000);
        </script>
    @endif

    <style>
        @media (max-width: 767px) {
            body {
                padding-bottom: 5.5rem;
            }
        }
    </style>
</body>
</html>
