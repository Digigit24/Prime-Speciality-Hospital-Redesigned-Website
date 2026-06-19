@extends('layouts.app')

@section('title', $page->title . ' - Prime Speciality Hospital Moshi')
@section('meta_description', $page->meta_description ?? 'Learn about ' . $page->title . ' at Prime Speciality Hospital.')

@section('content')
<div class="vc-breadcrumbs">
    <div class="vc-container"><nav><a href="{{ route('home') }}">Home</a><span>/</span><strong>{{ $page->title }}</strong></nav></div>
</div>

<section class="vc-section vc-page-atmosphere">
    <div class="vc-container" style="max-width:64rem">
        <div class="vc-section-heading">
            <span class="vc-eyebrow">Prime Speciality Hospital</span>
            <h1 style="margin:0;font:800 var(--text-h1)/1.06 var(--font-display);letter-spacing:-.04em">{{ $page->title }}</h1>
        </div>
        <article class="vc-card vc-service-body vc-fade-in-scale" style="padding:clamp(1.5rem,5vw,4rem);border-color:var(--color-border-strong);background:rgb(255 255 255 / 92%);box-shadow:var(--shadow-lg)">
            {!! $page->body !!}
        </article>
    </div>
</section>

<x-page-cta :page-source="'general_page_'.$page->slug" title="Need More" accent="Guidance?" description="Speak with our team or request a consultation for personalised medical advice." />
@endsection
