@extends('layouts.app')

@section('title', $page['title'] . ' | ' . config('services-pages.brand'))
@section('description', $page['meta'])

@section('content')

  <!-- PAGE HERO -->
  <section class="page-hero" data-stars>
    <div class="moon-mini" aria-hidden="true"></div>
    <div class="container-moon">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb moon-breadcrumb reveal">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('home') }}#services">Services</a></li>
          <li class="active" aria-current="page">{{ $page['title'] }}</li>
        </ol>
      </nav>
      <div class="row align-items-center g-5">
        <div class="col-lg-7 reveal" data-delay="100">
          <div class="hero-badge"><span class="dot"></span>Moon Elderly Care Center</div>
          <h1>{{ $page['title'] }}</h1>
          <p class="lead">{{ $page['intro'] }}</p>
          <div class="hero-actions mt-4" style="margin-bottom:0">
            <a href="{{ route('home') }}#contact" class="btn btn-gold">Schedule a consultation <i class="bi bi-arrow-right"></i></a>
            <a href="{{ route('home') }}#services" class="btn btn-outline">View all services</a>
          </div>
        </div>
        <div class="col-lg-5 reveal" data-delay="250">
          <div class="why-media">
            <div class="photo-frame">
              <img src="{{ config('services-pages.hero_image') }}" alt="{{ $page['title'] }} at Moon Elderly Care Center" loading="lazy" style="height:440px">
            </div>
            <div class="why-float a">
              <div class="f-icon"><i class="{{ $page['icon'] }}"></i></div>
              <div><h5>{{ $page['title'] }}</h5><span>Compassionate care, always on hand</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="section">
    <div class="container-moon">
      <div class="section-head text-center reveal">
        <span class="eyebrow center">What's included</span>
        <h2>Everything your loved one <span class="text-red">needs</span></h2>
        <p class="mx-auto" style="max-width:60ch">A full spectrum of support delivered by skilled, caring professionals.</p>
      </div>
      <div class="row g-4">
        @foreach ($features as $i => $feature)
          <div class="col-md-6 col-lg-4 reveal" data-delay="{{ $i * 80 }}">
            <div class="feature-card h-100">
              <div class="f-icon"><i class="{{ $feature['icon'] }}"></i></div>
              <h3>{{ $feature['title'] }}</h3>
              <p>{{ $feature['desc'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE -->
  <section class="section" style="padding-top:0">
    <div class="container-moon">
      <div class="why-strip reveal" data-dir="zoom">
        <div class="row g-4 align-items-center">
          <div class="col-lg-5">
            <span class="eyebrow">Why choose us</span>
            <h2>Why choose <span class="text-red">Moon Care</span></h2>
          </div>
          <div class="col-lg-7">
            @foreach ($why as $point)
              <div class="why-point">
                <i class="{{ $point['icon'] }}"></i>
                <div><strong>{{ $point['title'] }}</strong><br><span>{{ $point['desc'] }}</span></div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" style="padding-top:0">
    <div class="container-moon">
      <div class="cta-band reveal" data-dir="zoom">
        <div class="moon-mini" aria-hidden="true"></div>
        <div class="row align-items-center">
          <div class="col-lg-8">
            <h2>Join our community of care</h2>
            <p>Talk to our team today and find the right care plan for your loved one.</p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a href="tel:{{ str_replace(' ', '', config('services-pages.phone')) }}" class="btn btn-gold btn-lg"><i class="bi bi-telephone-fill"></i> Call {{ config('services-pages.phone') }}</a>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
