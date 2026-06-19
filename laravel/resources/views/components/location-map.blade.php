@props([
    'title' => 'Find Us in Moshi, Pune',
    'description' => 'Prime Speciality Hospital is located on Dehu-Moshi Road with accessible parking, diagnostics, pharmacy, and surgical care under one roof.',
    'compact' => false,
])

@php
    $apiKey = config('services.google.api_key');
    $placeId = config('services.google.place_id');
    $embedUrl = ($apiKey && $placeId)
        ? "https://www.google.com/maps/embed/v1/place?key={$apiKey}&q=place_id:{$placeId}"
        : "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.8078651874254!2d73.83404557579737!3d18.672522764952403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c75a40bbcc99%3A0xe2128e469c8f1eb3!2sPrime%20Speciality%20Hospital!5e0!3m2!1sen!2sin!4v1705600000000!5m2!1sen!2sin";
    $mapsUrl = $placeId
        ? "https://maps.google.com/?q=place_id:{$placeId}"
        : "https://maps.app.goo.gl/yP95pQ1J8uT2gT4c6";
@endphp

<section class="vc-section vc-shared-location vc-scroll-reveal {{ $compact ? 'vc-shared-location--compact' : '' }}">
    <div class="vc-container vc-shared-location__grid">
        <div class="vc-stack vc-reveal-left">
            <span class="vc-eyebrow">Hospital Location</span>
            <h2 class="vc-title">{{ $title }}</h2>
            <p class="vc-lede">{{ $description }}</p>
            <div class="vc-shared-location__details">
                <div><strong>Address</strong><span>Dehu-Moshi Road, Borhadewadi, Moshi, Pune 412105</span></div>
                <div><strong>Consultation Hours</strong><span>Monday to Saturday, 5:00 PM to 9:00 PM</span></div>
                <div><strong>Emergency Support</strong><span>Hospital admission support available 24/7</span></div>
            </div>
            <a href="{{ $mapsUrl }}" target="_blank" rel="noopener" class="vc-btn vc-btn--primary">Get Directions</a>
        </div>
        <div class="vc-shared-location__map vc-reveal-right">
            <iframe
                src="{{ $embedUrl }}"
                width="100%"
                height="100%"
                style="border:0"
                allowfullscreen
                loading="lazy"
                title="Prime Speciality Hospital location map"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>
