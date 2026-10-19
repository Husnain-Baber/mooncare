@extends('layouts.app')

@section('title', $page['heading'] . ' | ' . config('services-pages.brand'))
@section('description', $page['meta'])

@php
  $phone = config('services-pages.phone');
  $tel = str_replace(' ', '', $phone);
  $email = config('services-pages.email');
  $mapQuery = urlencode($page['map_query']);
@endphp

@section('content')

  <!-- ======================= HERO ======================= -->
  <section class="hero hero--branch" data-stars data-parallax>
    <div class="hero-grid" data-depth="0.1"></div>
    <div class="moon-disc" data-depth="0.5" aria-hidden="true"></div>
    <div class="hero-orb" data-depth="0.7"
      style="width:160px;height:160px;top:24%;left:6%;background:radial-gradient(circle at 35% 35%, rgba(255,216,154,.35), rgba(240,179,92,.08) 60%, transparent 70%)"></div>
    <div class="hero-orb hero-orb--coral" data-depth="0.6" style="width:140px;height:140px;bottom:14%;left:40%"></div>

    <div class="container-moon hero-inner">
      <div class="hero-layout">
        <div class="hero-copy">
          <nav aria-label="breadcrumb" class="reveal">
            <ol class="breadcrumb moon-breadcrumb">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('home') }}#location">Our centres</a></li>
              <li class="active" aria-current="page">{{ $page['title'] }}</li>
            </ol>
          </nav>

          <div class="hero-badge reveal"><span class="dot"></span>{{ $page['tagline'] }}</div>
          <h1 class="reveal" data-delay="100">{{ $page['heading'] }}</h1>

          <div class="branch-chips reveal" data-delay="150">
            <a class="branch-chip" href="tel:{{ $tel }}"><i class="bi bi-telephone-fill"></i>{{ $phone }}</a>
            <a class="branch-chip" href="mailto:{{ $email }}"><i class="bi bi-envelope-fill"></i>{{ $email }}</a>
            <a class="branch-chip" href="#location"><i class="bi bi-geo-alt-fill"></i>{{ $page['address'] }}</a>
          </div>

          <p class="hero-lead reveal" data-delay="200">{{ $page['intro'] }}</p>

          <ul class="hero-checks reveal" data-delay="250">
            @foreach ($page['highlights'] as $point)
              <li><i class="bi bi-check-circle-fill"></i>{{ $point }}</li>
            @endforeach
          </ul>

          <div class="hero-actions reveal" data-delay="300" style="margin-bottom:0">
            <a href="#contact" class="btn btn-gold btn-lg">Contact us <i class="bi bi-arrow-right"></i></a>
            <a href="#services" class="btn btn-outline btn-lg">View our services</a>
          </div>
        </div>

        <div class="hero-visual reveal" data-delay="250">
          <div class="hero-frame">
            <img src="{{ asset($page['hero_image']) }}" alt="Moon Elderly Care Center {{ $page['title'] }}" fetchpriority="high">
          </div>
          <div class="hero-float hero-float--a">
            <span class="ico"><i class="bi bi-heart-pulse-fill"></i></span>
            <div><strong>Compassionate</strong><small>Nursing care</small></div>
          </div>
          <div class="hero-float hero-float--b">
            <span class="ico"><i class="bi bi-clock-history"></i></span>
            <div><strong>Open 24 / 7</strong><small>Care &amp; support</small></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================= QUICK FACTS ======================= -->
  <section class="branch-facts">
    <div class="container-moon">
      <div class="facts-grid">
        <div class="fact reveal"><i class="bi bi-clock-history"></i><div><strong>24 / 7</strong><span>Care &amp; support</span></div></div>
        <div class="fact reveal" data-delay="80"><i class="bi bi-people-fill"></i><div><strong>300+</strong><span>Patients served</span></div></div>
        <div class="fact reveal" data-delay="160"><i class="bi bi-grid-1x2-fill"></i><div><strong>{{ count($services) }}</strong><span>Care services</span></div></div>
        <div class="fact reveal" data-delay="240"><i class="bi bi-emoji-smile-fill"></i><div><strong>95%</strong><span>Client satisfaction</span></div></div>
      </div>
    </div>
  </section>

  <!-- ======================= WHY CHOOSE ======================= -->
  <section class="section">
    <div class="container-moon">
      <div class="branch-about">
        <div class="branch-media reveal" data-dir="left">
          <img src="{{ asset($page['about_image']) }}" alt="Inside our {{ $page['title'] }} centre" loading="lazy">
          <div class="branch-media-badge">
            <i class="bi bi-shield-fill-check"></i>
            <div><strong>Safe &amp; homely</strong><span>Care you can trust</span></div>
          </div>
        </div>
        <div class="reveal" data-dir="right">
          <span class="eyebrow">Why choose us</span>
          <h2>Why choose Moon Care in <span class="text-red">Butterworth</span>?</h2>
          <p>Choosing a nursing home is a big decision. Our Butterworth centre combines professional nursing with the
            warmth of a family home — so your loved one is safe, comfortable and treated with dignity every day.</p>
          <ul class="why-list">
            @foreach ($page['why'] as $point)
              <li>
                <span class="wl-ico"><i class="bi {{ $point['icon'] }}"></i></span>
                <div><strong>{{ $point['title'] }}</strong><span>{{ $point['desc'] }}</span></div>
              </li>
            @endforeach
          </ul>
          <a href="#contact" class="btn btn-gold">Contact us for more info <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================= SERVICES ======================= -->
  <section class="section section-cream" id="services">
    <div class="container-moon">
      <div class="section-head text-center reveal">
        <span class="eyebrow center">What we do</span>
        <h2>We are expert in our <span class="text-red">services</span></h2>
        <p class="mx-auto" style="max-width:60ch">Thoughtfully designed care programmes delivered by skilled
          professionals — all available at our Butterworth centre.</p>
      </div>

      <div class="svc-grid">
        @foreach ($services as $i => $svc)
          <div class="svc-item reveal" data-delay="{{ ($i % 3) * 100 }}">
            <a href="{{ route('services.show', $svc['slug']) }}" class="service-card svc-card">
              <div class="svc-media">
                <img src="{{ asset($svc['image']) }}" alt="{{ $svc['title'] }} at Moon Elderly Care Center" loading="lazy">
                <span class="svc-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                <div class="service-icon"><i class="bi {{ $svc['icon'] }}"></i></div>
              </div>
              <div class="svc-body">
                <h3>{{ $svc['title'] }}</h3>
                <p>{{ \Illuminate\Support\Str::limit($svc['intro'], 120) }}</p>
                <span class="link-arrow">Learn more <i class="bi bi-arrow-right"></i></span>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ======================= GALLERY ======================= -->
  <section class="section" id="gallery">
    <div class="container-moon">
      <div class="section-head text-center reveal">
        <span class="eyebrow center">Life at Moon Care</span>
        <h2>A look inside our <span class="text-red">centre</span></h2>
        <p class="mx-auto" style="max-width:60ch">Take a peek at the rooms, lounges and grounds where our residents feel at home.</p>
      </div>

      <div class="gallery-grid gallery-grid--branch">
        @foreach ($page['gallery'] as $i => [$file, $caption])
          <a class="gallery-item reveal" data-delay="{{ ($i % 4) * 70 }}" href="{{ asset('assets/images/' . $file) }}"
            data-full="{{ asset('assets/images/' . $file) }}" data-caption="{{ $caption }}">
            <img src="{{ asset('assets/images/' . $file) }}" alt="{{ $caption }}" loading="lazy">
            <span class="gi-zoom"><i class="bi bi-zoom-in"></i></span>
            <span class="gi-cap">{{ $caption }}</span>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ======================= CTA ======================= -->
  <section class="section" style="padding-top:0">
    <div class="container-moon">
      <div class="cta-band reveal" data-dir="zoom">
        <div class="moon-mini" aria-hidden="true"></div>
        <div class="row align-items-center g-3">
          <div class="col-lg-8">
            <h2>Looking for elderly care for your loved one?</h2>
            <p>Talk to our Butterworth team today and find the right care plan — we'll guide you every step of the way.</p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a href="tel:{{ $tel }}" class="btn btn-gold btn-lg"><i class="bi bi-telephone-fill"></i> Call {{ $phone }}</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================= CONTACT FORM ======================= -->
  <section class="section section-cream" id="contact">
    <div class="container-moon">
      <div class="appoint-grid">
        <div class="appoint-card reveal" data-dir="left">
          <span class="eyebrow">Get in touch</span>
          <h2 class="mb-2">Book an appointment</h2>
          <p>Tell us a little about your loved one and we'll get back to you within 24 hours.</p>

          <form id="appointmentForm" class="mt-4 needs-validation" novalidate>
            <input type="hidden" name="centre" value="{{ $page['title'] }}">
            <div class="mb-3">
              <label for="name" class="form-label">Full name <span class="req">*</span></label>
              <input type="text" class="form-control moon-input" id="name" name="name" placeholder="Enter your name" required>
              <div class="invalid-feedback">Please enter your full name.</div>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Contact number <span class="req">*</span></label>
              <input type="tel" class="form-control moon-input" id="phone" name="phone" placeholder="+60 ..." required>
              <div class="invalid-feedback">Please enter a contact number.</div>
            </div>
            <div class="mb-3">
              <label for="service" class="form-label">Service of interest</label>
              <select class="form-select moon-input" id="service" name="service">
                <option value="">Select a service (optional)</option>
                @foreach ($services as $svc)
                  <option>{{ str_replace('&', '&amp;', $svc['title']) }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-4">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control moon-input" id="message" name="message" rows="4"
                placeholder="Additional information about your needs"></textarea>
            </div>
            <button type="submit" class="btn btn-gold w-100">Request appointment <i class="bi bi-send-fill"></i></button>
          </form>

          <div id="appointmentSuccess" class="form-success d-none">
            <div class="tick"><i class="bi bi-check-lg"></i></div>
            <h3>Thank you!</h3>
            <p>Your request has been received. Our care team will contact you shortly to arrange a consultation.</p>
            <button type="button" class="btn btn-outline-navy" id="resetAppointment">Submit another enquiry</button>
          </div>
        </div>

        <div class="reveal" data-dir="right">
          <span class="eyebrow">Visit or call us</span>
          <h2 class="mb-4">We'd love to <span class="text-red">hear from you</span></h2>
          <div class="contact-cards">
            <a class="contact-card" href="tel:{{ $tel }}">
              <span class="cc-ico"><i class="bi bi-telephone-fill"></i></span>
              <span><small>Call us anytime</small><strong>{{ $phone }}</strong></span>
            </a>
            <a class="contact-card" href="mailto:{{ $email }}">
              <span class="cc-ico"><i class="bi bi-envelope-fill"></i></span>
              <span><small>Email us</small><strong>{{ $email }}</strong></span>
            </a>
            <a class="contact-card" href="#location">
              <span class="cc-ico"><i class="bi bi-geo-alt-fill"></i></span>
              <span><small>Our centre</small><strong>{{ $page['address'] }}</strong></span>
            </a>
            <div class="contact-card">
              <span class="cc-ico"><i class="bi bi-clock-fill"></i></span>
              <span><small>Opening hours</small><strong>Open 24 hours, 7 days a week</strong></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================= MAP ======================= -->
  <section class="section section-dark" id="location" aria-labelledby="branchMapHeading">
    <div class="container-moon">
      <div class="section-head text-center reveal">
        <span class="eyebrow center">Where to find us</span>
        <h2 id="branchMapHeading" class="text-cream">Find us on <span class="text-red">Google Map</span></h2>
        <p class="mx-auto" style="max-width:60ch;color:var(--moon-lavender)">Drop by for a tour, or call ahead and our team will meet you at the door.</p>
      </div>

      <div class="branch-map reveal" data-dir="zoom">
        <iframe title="Map of Moon Elderly Care Center {{ $page['title'] }}" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.85117102033!2d100.37954409999999!3d5.43956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac50fd416019f%3A0x7040686a6c3ec847!2sMoon%20Elderly%20Care%20Center%20Nursing%20Home%20Butherworth%20Penang!5e0!3m2!1sen!2s!4v1792437338872!5m2!1sen!2s"></iframe>
        <div class="map-card">
          <span class="map-card-badge">Branch</span>
          <h3 class="map-card-name">Moon Elderly Care Center — {{ $page['title'] }}</h3>
          <p class="map-card-addr">{{ $page['address'] }}</p>
          <div class="map-card-actions">
            <a class="btn btn-gold p-1" target="_blank" rel="noopener"
              href="https://www.google.com/maps/dir/?api=1&destination={{ $mapQuery }}"><i class="bi bi-sign-turn-right-fill"></i> Get directions</a>
            <a class="btn btn-outline p-1" href="tel:{{ $tel }}"><i class="bi bi-telephone-fill"></i> Call us</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('partials.lightbox')

@endsection
