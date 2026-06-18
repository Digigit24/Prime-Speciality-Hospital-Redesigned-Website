@extends('layouts.app')

@section('title', $page->title . ' - Prime Speciality Hospital Moshi')
@section('meta_description', $page->meta_description ?? 'Learn about ' . $page->title . ' services and medical resources at Prime Speciality Hospital.')

@section('content')
<!-- Header Banner -->
<section style="background: var(--color-surface); padding-block: var(--space-4); border-bottom: 1px solid var(--color-border);">
    <div class="vc-container">
        <nav style="display: flex; gap: var(--space-2); font-size: var(--text-caption); color: var(--color-text-subtle);">
            <a href="{{ route('home') }}" style="text-decoration: none;">Home</a>
            <span>/</span>
            <span style="color: var(--color-text); font-weight: 600;">{{ $page->title }}</span>
        </nav>
    </div>
</section>

<!-- Content Area -->
<section class="vc-section">
    <div class="vc-container" style="max-width: 48rem;">
        <article class="vc-stack" style="gap: var(--space-6);">
            <div>
                <h1 style="font-family: var(--font-display); font-size: var(--text-h1); font-weight: 800; color: var(--color-text); margin: 0; line-height: 1.1;">
                    {{ $page->title }}
                </h1>
            </div>
            
            <div class="vc-service-body" style="margin-top: var(--space-4);">
                {!! $page->body !!}
            </div>
        </article>
    </div>
</section>
@endsection
