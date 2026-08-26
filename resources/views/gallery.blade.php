@extends('layouts.app')

@section('title', 'Our Gallery | ' . config('services-pages.brand'))
@section('description', 'Browse photographs from Moon Elderly Care Center — real moments and everyday warmth from our care centre in Kulim.')

@section('content')

  <!-- PAGE HERO -->
  <section class="page-hero" data-stars>
    <div class="moon-mini" aria-hidden="true"></div>
    <div class="container-moon">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb moon-breadcrumb reveal">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="active" aria-current="page">Gallery</li>
        </ol>
      </nav>
      <div class="row g-5">
        <div class="col-lg-8 reveal" data-delay="100">
          <div class="hero-badge"><span class="dot"></span>Moon Elderly Care Center</div>
          <h1>Our Gallery</h1>
          <p class="lead">A glimpse into the warmth, care and daily life at Moon Elderly Care Center — real moments, real smiles. Click any photograph to view it in full screen.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- GALLERY -->
  <section class="section">
    <div class="container-moon">
      <div class="section-head text-center reveal">
        <span class="eyebrow center">Life at Moon Care</span>
        <h2>Every moment <span class="text-red">counts</span></h2>
        <p class="mx-auto" style="max-width:60ch">Browse {{ count($items) }} photographs from our care centre — click any image to view it in full screen.</p>
      </div>
      <div class="gallery-grid">
        @foreach ($items as $item)
          <a class="gallery-item reveal" data-delay="{{ ($loop->index % 6) * 70 }}" href="{{ $item['url'] }}" data-full="{{ $item['url'] }}" data-caption="Moon Elderly Care Center">
            <img src="{{ $item['url'] }}" alt="Moon Elderly Care Center" loading="lazy">
            <span class="gi-zoom"><i class="bi bi-zoom-in"></i></span>
            <span class="gi-cap">Moon Elderly Care Center</span>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  @include('partials.lightbox')

@endsection
