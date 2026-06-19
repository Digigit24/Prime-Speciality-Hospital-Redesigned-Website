@props([
    'reviews' => [],
    'title' => 'What Our Patients Say',
    'description' => 'Verified feedback from patients treated at Prime Speciality Hospital.',
])

@if(!empty($reviews))
<section class="vc-section vc-shared-reviews vc-scroll-reveal">
    <div class="vc-container">
        <div class="vc-section-heading">
            <span class="vc-eyebrow">Patient Stories</span>
            <h2 class="vc-title">{{ $title }}</h2>
            <p class="vc-lede">{{ $description }}</p>
        </div>

        <div class="vc-shared-reviews__grid">
            @foreach(array_slice($reviews, 0, 3) as $review)
                <article class="vc-card vc-shared-review vc-fade-in-scale">
                    <div class="vc-shared-review__top">
                        <div class="vc-shared-review__avatar">
                            @if(!empty($review['profile_photo_url']))
                                <img src="{{ $review['profile_photo_url'] }}" alt="" loading="lazy">
                            @else
                                {{ substr($review['author_name'] ?? 'P', 0, 1) }}
                            @endif
                        </div>
                        <div>
                            <strong>{{ $review['author_name'] ?? 'Verified Patient' }}</strong>
                            <span>{{ $review['relative_time_description'] ?? 'Google Review' }}</span>
                        </div>
                    </div>
                    <div class="vc-shared-review__stars" aria-label="{{ $review['rating'] ?? 5 }} out of 5 stars">
                        @for($i = 0; $i < ($review['rating'] ?? 5); $i++)★@endfor
                    </div>
                    <p>“{{ $review['text'] }}”</p>
                    <div class="vc-shared-review__verified">Verified Google Review</div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif
