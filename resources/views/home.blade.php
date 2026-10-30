@extends('layouts.app')

@section('title', 'Nursing Home Simpang Ampat Penang | Moon Elderly Care Center')
@section('description', 'Moon Elderly Care Center provides best nursing care service in your area — assisted living, home nursing, dementia care, palliative care and more. Compassionate care at your doorstep.')

@section('page_head')
  <!-- Leaflet — interactive "Our Location" map (home page only) -->
  <link href="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.css" rel="stylesheet">
@endsection

@section('content')
  <!-- ======================= HERO ======================= -->
  <section class="hero" data-stars data-parallax>
    <div class="hero-grid" data-depth="0.1"></div>
    <div class="moon-disc" data-depth="0.5" aria-hidden="true"></div>
    <div class="hero-orb" data-depth="0.7"
      style="width:180px;height:180px;top:22%;left:8%;background:radial-gradient(circle at 35% 35%, rgba(255,216,154,.35), rgba(240,179,92,.08) 60%, transparent 70%)"></div>
    <div class="hero-orb" data-depth="0.9"
      style="width:110px;height:110px;bottom:28%;left:44%;background:radial-gradient(circle at 35% 35%, rgba(138,151,189,.4), rgba(70,92,160,.1) 60%, transparent 70%)"></div>
    <div class="hero-orb hero-orb--coral" data-depth="0.6"
      style="width:150px;height:150px;top:55%;left:28%;"></div>

    <div class="container-moon hero-inner">
     <div class="hero-layout">
      <div class="hero-copy">
      <div class="hero-badge reveal"><span class="dot"></span>Compassionate home nursing care</div>
      <h1 class="reveal" data-delay="100">Bringing <span class="gold">heartfelt care</span> to your doorstep</h1>
      <p class="hero-lead reveal" data-delay="200">At Moon Elderly Care Center, we understand the importance of
        compassionate care that goes beyond just medical assistance — we care for the whole person, with warmth and dignity.</p>
      <div class="hero-actions reveal" data-delay="300">
        <a href="{{ route('home') }}#services" class="btn btn-gold btn-lg">Explore our services <i class="bi bi-arrow-right"></i></a>
        <a href="{{ route('home') }}#contact" class="btn btn-outline btn-lg">Book a consultation <i class="bi bi-calendar2-heart"></i></a>
      </div>
      <div class="hero-stats reveal" data-delay="400">
        <div class="hero-stat"><div class="num">24/7</div><div class="lbl">Care &amp; support</div></div>
        <div class="hero-stat"><div class="num">300+</div><div class="lbl">Patients served</div></div>
        <div class="hero-stat"><div class="num">10</div><div class="lbl">Specialist services</div></div>
        <div class="hero-stat"><div class="num">95%</div><div class="lbl">Client satisfaction</div></div>
      </div>
      </div>

      <div class="hero-visual reveal" data-delay="250">
        <div class="hero-frame">
          <img src="{{ asset('assets/images/home.jpeg') }}" alt="Caring for our elders at Moon Elderly Care Center" fetchpriority="high">
        </div>
        <div class="hero-float hero-float--a">
          <span class="ico"><i class="bi bi-heart-pulse-fill"></i></span>
          <div><strong>Compassionate</strong><small>Nursing care</small></div>
        </div>
        <div class="hero-float hero-float--b">
          <span class="ico"><i class="bi bi-clock-history"></i></span>
          <div><strong>24/7</strong><small>Support at home</small></div>
        </div>
      </div>
     </div>
    </div>

    <div class="scroll-cue" aria-hidden="true"></div>

    <!-- Hero marquee -->
    <div class="hero-marquee marquee" aria-hidden="true">
      <div class="marquee-track">
        <div class="marquee-item"><i class="bi bi-award-fill"></i>Highly qualified nurses <span class="sep">✦</span></div>
        <div class="marquee-item"><i class="bi bi-person-hearts"></i>Personal care assistance <span class="sep">✦</span></div>
        <div class="marquee-item"><i class="bi bi-heart-fill"></i>Emotional support <span class="sep">✦</span></div>
        <div class="marquee-item"><i class="bi bi-shield-fill-check"></i>Enhanced patient safety <span class="sep">✦</span></div>
        <div class="marquee-item"><i class="bi bi-award-fill"></i>Highly qualified nurses <span class="sep">✦</span></div>
        <div class="marquee-item"><i class="bi bi-person-hearts"></i>Personal care assistance <span class="sep">✦</span></div>
        <div class="marquee-item"><i class="bi bi-heart-fill"></i>Emotional support <span class="sep">✦</span></div>
        <div class="marquee-item"><i class="bi bi-shield-fill-check"></i>Enhanced patient safety <span class="sep">✦</span></div>
      </div>
    </div>
  </section>

  <!-- ======================= SERVICES ======================= -->
  <section class="section" id="services">
    <div class="container-moon">
      <div class="section-head text-center reveal">
        <span class="eyebrow center">What we do</span>
        <h2>Discover our <span class="text-red">services</span></h2>
        <p class="mx-auto" style="max-width:60ch">Thoughtfully designed care programmes delivered by skilled
          professionals who treat every resident like family.</p>
      </div>

      @php($allServices = config('services-pages.pages'))
      <div class="svc-grid">
        @foreach ($allServices as $i => $svc)
          <div class="svc-item {{ $i >= 6 ? 'svc-extra' : 'reveal' }}" @if($i < 6) data-delay="{{ ($i % 3) * 100 }}" @endif>
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

      @if (count($allServices) > 6)
        <div class="text-center svc-more reveal">
          <button type="button" class="btn btn-gold btn-lg" id="svcToggle" aria-expanded="false" aria-controls="services">
            <span class="lbl">Show all services ({{ count($allServices) }})</span> <i class="bi bi-chevron-down"></i>
          </button>
        </div>
      @endif
    </div>
  </section>

  <script>
    (function () {
      var btn = document.getElementById('svcToggle');
      if (!btn) return;
      var section = document.getElementById('services');
      btn.addEventListener('click', function () {
        var open = section.classList.toggle('svc-open');
        btn.setAttribute('aria-expanded', open);
        btn.querySelector('.lbl').textContent = open ? 'Show fewer services' : 'Show all services ({{ count($allServices) }})';
        if (!open) section.scrollIntoView({ behavior: 'smooth', block: 'start' });
      });
    })();
  </script>

  <!-- ======================= WHY CHOOSE US ======================= -->
  <section class="section section-dark">
    <div class="container-moon">
      <div class="why-grid">
        <div class="why-media reveal" data-dir="left">
          <div class="photo-frame">
            <img
              src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/66501b5ca75a448031e5dcfa_hero-02.jpg"
              alt="A caregiver gently assisting an elderly resident" loading="lazy">
          </div>
          <button class="why-play" type="button" data-bs-toggle="modal" data-bs-target="#videoModal" aria-label="Play video">
            <i class="bi bi-play-fill"></i>
          </button>
          <div class="why-float a">
            <div class="f-icon"><i class="bi bi-clock-history"></i></div>
            <div><h5>24/7 availability</h5><span>For your peace of mind</span></div>
          </div>
          <div class="why-float b">
            <div class="f-icon"><i class="bi bi-patch-check-fill"></i></div>
            <div><h5>Professional expertise</h5><span>Specialised skills, certified care</span></div>
          </div>
        </div>

        <div class="why-content reveal" data-dir="right">
          <span class="eyebrow">Why choose us</span>
          <h2 class="text-cream">Why choose <span class="text-red">Moon Care</span></h2>
          <p style="color:var(--moon-lavender); max-width:52ch">We blend medical excellence with genuine human warmth,
            so your loved ones feel safe, valued and truly cared for.</p>

          <div class="accordion moon-accordion mt-4" id="whyAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#whyOne" aria-expanded="true">
                  Experienced caregivers
                </button>
              </h2>
              <div id="whyOne" class="accordion-collapse collapse show" data-bs-parent="#whyAccordion">
                <div class="accordion-body">
                  <p>Our team consists of highly skilled nurses with years of hands-on experience in home and residential healthcare.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#whyTwo" aria-expanded="false">
                  Compassionate approach
                </button>
              </h2>
              <div id="whyTwo" class="accordion-collapse collapse" data-bs-parent="#whyAccordion">
                <div class="accordion-body">
                  <p>Compassion builds trust between caregivers and residents, improves experiences, and leads to better health outcomes.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#whyThree" aria-expanded="false">
                  Personalised care plans
                </button>
              </h2>
              <div id="whyThree" class="accordion-collapse collapse" data-bs-parent="#whyAccordion">
                <div class="accordion-body">
                  <p>Tailored healthcare strategies designed around each resident's unique needs, preferences and story.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Video modal -->
  <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content" style="background:transparent;border:none">
        <div class="ratio ratio-16x9 rounded-4 overflow-hidden" style="box-shadow:0 30px 80px rgba(0,0,0,.6)">
          <iframe src="https://www.youtube.com/embed/r507nu6MqFk" title="Moon Elderly Care Center video"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- ======================= CTA BAND ======================= -->
  <section class="section" style="padding-bottom:0">
    <div class="container-moon">
      <div class="cta-band reveal" data-dir="zoom">
        <div class="moon-mini" aria-hidden="true"></div>
        <div class="row">
          <div class="col-lg-8">
            <h2>Join our community of care</h2>
            <p>We're here to provide compassionate, personalised care to you or your loved ones — every hour of every day.</p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a href="{{ route('home') }}#contact" class="btn btn-gold btn-lg">Get started <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================= ABOUT ======================= -->
  <section class="section">
    <div class="container-moon">
      <div class="about-grid">
        <div class="about-collage reveal" data-dir="left">
          <div class="img-a one">
            <img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/66503c2a844eccf703fcd355_about-01.jpg"
              alt="Elderly resident smiling with a caregiver" loading="lazy">
          </div>
          <div class="img-b two">
            <img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/66503c2b3a4a24eff044f790_about-02.jpg"
              alt="Nurse sharing a warm moment with a senior" loading="lazy">
          </div>
          <div class="badge-round">
            <div class="rot">
              <svg viewBox="0 0 150 150" aria-hidden="true">
                <defs><path id="circlePath" d="M 75,75 m -60,0 a 60,60 0 1,1 120,0 a 60,60 0 1,1 -120,0"/></defs>
                <text fill="rgba(11,23,54,.75)" font-size="11" font-family="Sora, sans-serif" font-weight="600" letter-spacing="2">
                  <textPath href="#circlePath">YEARS OF CARE &nbsp;•&nbsp; YEARS OF TRUST &nbsp;•&nbsp;</textPath>
                </text>
              </svg>
              <span style="text-align:center;position:relative;z-index:2"><strong>10+</strong><span>Years of care</span></span>
            </div>
          </div>
        </div>

        <div class="reveal" data-dir="right">
          <span class="eyebrow">Who we are</span>
          <h2>About <span class="text-red">Moon Care</span></h2>
          <p>We are dedicated to delivering exceptional elderly care with compassion and expertise. With a commitment
            to resident-centred care, our team of healthcare professionals provides comprehensive, tailored support —
            whether at home or in our care centre.</p>
          <ul class="about-points">
            <li><i class="bi bi-check-circle-fill"></i>Registered nurses &amp; certified caregivers on site 24/7</li>
            <li><i class="bi bi-check-circle-fill"></i>Personalised care plans built around every resident</li>
            <li><i class="bi bi-check-circle-fill"></i>A calm, safe, home-like environment in Kulim, Kedah</li>
          </ul>
          <a href="{{ route('home') }}#contact" class="btn btn-outline-navy">Learn more about us <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================= WHAT MAKES US DIFFERENT / SERVICES ======================= -->
  <section class="section section-dark" id="what-makes-us-different">
    <div class="container-moon">
      <div class="section-head text-center reveal">
        <span class="eyebrow center">Why choose us</span>
        <h2 class="text-cream">What makes us <span class="text-red">different</span></h2>
        <p class="mx-auto" style="max-width:62ch; color:var(--moon-lavender)">
          Dedicated to delivering professional medical care, specialized support, and a comforting home-like environment for every resident.
        </p>
      </div>

      <?php
        $whyChooseServices = [
          [
            'title' => 'Comprehensive Care Services',
            'desc' => 'Offering a wide range of elder care, medical support, and specialized services.',
            'icon' => 'bi-shield-plus',
          ],
          [
            'title' => 'Experienced Professionals',
            'desc' => 'Our skilled staff ensures top-quality care and personalized attention.',
            'icon' => 'bi-person-badge-fill',
          ],
          [
            'title' => 'Modern Facilities',
            'desc' => 'Equipped with state-of-the-art infrastructure for a safe and comfortable environment.',
            'icon' => 'bi-hospital-fill',
          ],
          [
            'title' => '24/7 Support',
            'desc' => 'Round-the-clock assistance and emergency care for complete peace of mind.',
            'icon' => 'bi-clock-history',
          ],
          [
            'title' => 'Specialized Medical Care',
            'desc' => 'Expertise in handling complex medical needs like tracheostomy and stroke recovery.',
            'icon' => 'bi-heart-pulse-fill',
          ],
          [
            'title' => 'Tailored Care Plans',
            'desc' => 'Customizable solutions based on individual health, lifestyle, and preferences.',
            'icon' => 'bi-clipboard2-pulse-fill',
          ],
          [
            'title' => 'Home-Like Environment',
            'desc' => 'Creating a warm, welcoming space that feels just like home.',
            'icon' => 'bi-house-heart-fill',
          ],
          [
            'title' => 'Affordable Pricing',
            'desc' => 'High-quality care at competitive prices to fit diverse budgets.',
            'icon' => 'bi-wallet2',
          ],
        ];
      ?>

      <div class="choose-services-grid">
        @foreach ($whyChooseServices as $idx => $item)
          <div class="choose-feature-card reveal" data-delay="{{ ($idx % 4) * 100 }}">
            <div class="choose-feature-icon" aria-hidden="true">
              <i class="bi {{ $item['icon'] }}"></i>
            </div>
            <h3>{{ $item['title'] }}</h3>
            <p>{{ $item['desc'] }}</p>
          </div>
        @endforeach
      </div>

      <div class="text-center mt-5 reveal">
        <a href="{{ route('home') }}#contact" class="btn btn-gold btn-lg">Book a consultation <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- ======================= GALLERY ======================= -->
  <section class="section" id="gallery">
    <div class="container-moon">
      <div class="section-head text-center reveal">
        <span class="eyebrow center">Life at Moon Care</span>
        <h2>Moments that make us <span class="text-red">Moon</span></h2>
        <p class="mx-auto" style="max-width:60ch">Real smiles, gentle moments and everyday warmth — take a peek inside our care centre in Kulim.</p>
      </div>
      <div class="gallery-grid gallery-grid--home">
        <a class="gallery-item reveal" href="{{ asset('assets/images/gallery/43.webp') }}" data-full="{{ asset('assets/images/gallery/43.webp') }}" data-caption="Warm moments at Moon Elderly Care Center">
          <img src="{{ asset('assets/images/gallery/43.webp') }}" alt="Warm moments at Moon Elderly Care Center" loading="lazy">
          <span class="gi-zoom"><i class="bi bi-zoom-in"></i></span>
          <span class="gi-cap">Life at Moon Care</span>
        </a>
        <a class="gallery-item reveal" data-delay="80" href="{{ asset('assets/images/gallery/46.webp') }}" data-full="{{ asset('assets/images/gallery/46.webp') }}" data-caption="Comfort and calm, all day">
          <img src="{{ asset('assets/images/gallery/46.webp') }}" alt="Comfort and calm, all day" loading="lazy">
          <span class="gi-zoom"><i class="bi bi-zoom-in"></i></span>
          <span class="gi-cap">Comfort &amp; calm</span>
        </a>
        <a class="gallery-item reveal" data-delay="160" href="{{ asset('assets/images/gallery/47.webp') }}" data-full="{{ asset('assets/images/gallery/47.webp') }}" data-caption="Everyday joy at our centre">
          <img src="{{ asset('assets/images/gallery/47.webp') }}" alt="Everyday joy at our centre" loading="lazy">
          <span class="gi-zoom"><i class="bi bi-zoom-in"></i></span>
          <span class="gi-cap">Everyday joy</span>
        </a>
        <a class="gallery-item reveal" data-delay="240" href="{{ asset('assets/images/gallery/12.jpg') }}" data-full="{{ asset('assets/images/gallery/12.jpg') }}" data-caption="A home away from home">
          <img src="{{ asset('assets/images/gallery/12.jpg') }}" alt="A home away from home" loading="lazy">
          <span class="gi-zoom"><i class="bi bi-zoom-in"></i></span>
          <span class="gi-cap">A home away from home</span>
        </a>
        <a class="gallery-item reveal" data-delay="320" href="{{ asset('assets/images/gallery/21.jpg') }}" data-full="{{ asset('assets/images/gallery/21.jpg') }}" data-caption="Caring hands, every hour">
          <img src="{{ asset('assets/images/gallery/21.jpg') }}" alt="Caring hands, every hour" loading="lazy">
          <span class="gi-zoom"><i class="bi bi-zoom-in"></i></span>
          <span class="gi-cap">Caring hands</span>
        </a>
      </div>
      <div class="text-center mt-5 reveal">
        <a href="{{ route('gallery') }}" class="btn btn-gold btn-lg">View full gallery <i class="bi bi-images"></i></a>
      </div>
    </div>
  </section>

  <!-- ======================= TEAM ======================= -->
  <section class="section section-dark">
    <div class="container-moon">
      <div class="section-head text-center reveal">
        <span class="eyebrow center">Our people</span>
        <h2 class="text-cream">Meet our dedicated <span class="text-red">team</span></h2>
        <p class="mx-auto text-cream" style="max-width:58ch;color:var(--moon-lavender)!important">The heart of Moon Care —
          experienced nurses and caregivers who treat every resident like their own family.</p>
      </div>
    </div>

    <div class="team-marquee marquee reveal">
      <div class="team-track">
        <div class="nurse-card"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/6659973e19f852d4eb7b9e44_nurse-01.jpg" alt="Nurin" loading="lazy"></div><div class="meta"><h4>Nurin, RN</h4><div class="role">Senior Nurse</div></div></div>
        <div class="nurse-card"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/665999174af78aecbfbc51bd_nurse-02.jpg" alt="Terengganu" loading="lazy"></div><div class="meta"><h4>Terengganu, LPN</h4><div class="role">Care Coordinator</div></div></div>
        <div class="nurse-card"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/6659999e33af36db7d5d015f_nurse-03.jpg" alt="Kelantan" loading="lazy"></div><div class="meta"><h4>Kelantan, RN</h4><div class="role">Palliative Care</div></div></div>
        <div class="nurse-card"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/66599a20265112b7fc0134b2_nurse-04.jpg" alt="Pahang" loading="lazy"></div><div class="meta"><h4>Pahang, CNA</h4><div class="role">Nursing Assistant</div></div></div>
        <div class="nurse-card"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/66599a641ced480e2c3d30a6_nurse-05.jpg" alt="Adriana" loading="lazy"></div><div class="meta"><h4>Adriana, RN</h4><div class="role">Nursing Specialist</div></div></div>
        <div class="nurse-card"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/66599b04ab292f147aacce18_nurse-06.jpg" alt="Judy Nguyen" loading="lazy"></div><div class="meta"><h4>Judy Nguyen, ER</h4><div class="role">Emergency Room</div></div></div>
        <div class="nurse-card"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/66599b624ef59bb086d09c56_nurse-07.jpg" alt="Batrisyia" loading="lazy"></div><div class="meta"><h4>Batrisyia, NP</h4><div class="role">Nurse Practitioner</div></div></div>
        <div class="nurse-card"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/66599b9465463c6f55660e3d_nurse-08.jpg" alt="Nurul Ain" loading="lazy"></div><div class="meta"><h4>Nurul Ain, RN</h4><div class="role">Registered Nurse</div></div></div>
        <!-- duplicate for seamless loop -->
        <div class="nurse-card" aria-hidden="true"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/6659973e19f852d4eb7b9e44_nurse-01.jpg" alt="" loading="lazy"></div><div class="meta"><h4>Nurin, RN</h4><div class="role">Senior Nurse</div></div></div>
        <div class="nurse-card" aria-hidden="true"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/665999174af78aecbfbc51bd_nurse-02.jpg" alt="" loading="lazy"></div><div class="meta"><h4>Terengganu, LPN</h4><div class="role">Care Coordinator</div></div></div>
        <div class="nurse-card" aria-hidden="true"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/6659999e33af36db7d5d015f_nurse-03.jpg" alt="" loading="lazy"></div><div class="meta"><h4>Kelantan, RN</h4><div class="role">Palliative Care</div></div></div>
        <div class="nurse-card" aria-hidden="true"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/66599a20265112b7fc0134b2_nurse-04.jpg" alt="" loading="lazy"></div><div class="meta"><h4>Pahang, CNA</h4><div class="role">Nursing Assistant</div></div></div>
        
        <div class="nurse-card" aria-hidden="true"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/66599a641ced480e2c3d30a6_nurse-05.jpg" alt="" loading="lazy"></div><div class="meta"><h4>Adriana, RN</h4><div class="role">Nursing Specialist</div></div></div>
        <div class="nurse-card" aria-hidden="true"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/66599b04ab292f147aacce18_nurse-06.jpg" alt="" loading="lazy"></div><div class="meta"><h4>Judy Nguyen, ER</h4><div class="role">Emergency Room</div></div></div>
        <div class="nurse-card" aria-hidden="true"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/66599b624ef59bb086d09c56_nurse-07.jpg" alt="" loading="lazy"></div><div class="meta"><h4>Batrisyia, NP</h4><div class="role">Nurse Practitioner</div></div></div>
        <div class="nurse-card" aria-hidden="true"><div class="photo"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa6b/66599b9465463c6f55660e3d_nurse-08.jpg" alt="" loading="lazy"></div><div class="meta"><h4>Nurul Ain, RN</h4><div class="role">Registered Nurse</div></div></div>
      </div>
    </div>
  </section>

  <!-- ======================= TESTIMONIALS ======================= -->
  <section class="section">
    <div class="container-moon">
      <div class="section-head text-center reveal">
        <span class="eyebrow center">Testimonials</span>
        <h2>What our clients <span class="text-red">say</span></h2>
      </div>

      <div class="testimonial-shell reveal" data-dir="zoom" style="max-width:920px;margin-inline:auto">
        <span class="big-quote" aria-hidden="true">“</span>
        <div id="testimonialCarousel" class="carousel slide moon-carousel" data-bs-ride="carousel" data-bs-interval="6000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="stars" aria-label="5 star rating"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
              <p class="t-quote">I trust the Moon Care staff completely. Their reliability and dedication to patient care are evident in everything they do.</p>
              <div class="t-person">
                <div class="avatar"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/665061b38a7a2980915f037a_testimonial-05.jpg" alt="Frances Guerrero" loading="lazy"></div>
                <strong>Frances Guerrero</strong><span>Family member of a resident</span>
              </div>
            </div>
            <div class="carousel-item">
              <div class="stars" aria-label="5 star rating"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
              <p class="t-quote">The support I received from the nurses was life-changing. They not only cared for my physical health but also provided emotional support that helped me through tough times.</p>
              <div class="t-person">
                <div class="avatar"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/665061b30f6ffbb660e202f0_testimonial-03.jpg" alt="Samuel Bishop" loading="lazy"></div>
                <strong>Samuel Bishop</strong><span>Care recipient</span>
              </div>
            </div>
            <div class="carousel-item">
              <div class="stars" aria-label="5 star rating"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
              <p class="t-quote">The environment created by the Moon Care team was one of healing and positivity. Their holistic approach made a significant difference in my recovery.</p>
              <div class="t-person">
                <div class="avatar"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/665061b38b1fbd01b6a30d37_testimonial-01.jpg" alt="Louis Ferguson" loading="lazy"></div>
                <strong>Louis Ferguson</strong><span>Resident</span>
              </div>
            </div>
            <div class="carousel-item">
              <div class="stars" aria-label="5 star rating"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
              <p class="t-quote">The care we received was exceptional because it addressed all aspects of well-being. The team truly cares for the whole person, not just the illness.</p>
              <div class="t-person">
                <div class="avatar"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/665061b34379287cc6c7eade_testimonial-04.jpg" alt="Joan Wallace" loading="lazy"></div>
                <strong>Joan Wallace</strong><span>Family member of a resident</span>
              </div>
            </div>
            <div class="carousel-item">
              <div class="stars" aria-label="5 star rating"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
              <p class="t-quote">The nurses empowered me with the information and tools I needed to manage my health effectively. Their educational approach made me feel more in control.</p>
              <div class="t-person">
                <div class="avatar"><img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/665061b3f0d20b5a7ab85d59_testimonial-02.jpg" alt="Billy Vasquez" loading="lazy"></div>
                <strong>Billy Vasquez</strong><span>Care recipient</span>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <i class="bi bi-arrow-left"></i><span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <i class="bi bi-arrow-right"></i><span class="visually-hidden">Next</span>
          </button>
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Testimonial 1"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Testimonial 2"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Testimonial 3"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="3" aria-label="Testimonial 4"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="4" aria-label="Testimonial 5"></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================= COUNTERS ======================= -->
  <section class="section section-dark">
    <div class="container-moon">
      <div class="counter-grid">
        <div class="counter-box reveal"><i class="bi bi-people-fill"></i><div class="num"><span data-count="300">0</span><span class="suffix">+</span></div><div class="lbl">Patients served</div></div>
        <div class="counter-box reveal" data-delay="100"><i class="bi bi-person-hearts"></i><div class="num"><span data-count="30">0</span><span class="suffix">+</span></div><div class="lbl">Dedicated caregivers</div></div>
        <div class="counter-box reveal" data-delay="200"><i class="bi bi-grid-1x2-fill"></i><div class="num"><span data-count="10">0</span></div><div class="lbl">Services offered</div></div>
        <div class="counter-box reveal" data-delay="300"><i class="bi bi-emoji-smile-fill"></i><div class="num"><span data-count="95">0</span><span class="suffix">%</span></div><div class="lbl">Client satisfaction</div></div>
      </div>
    </div>
  </section>

  <!-- ======================= APPOINTMENT + HOW WE WORK ======================= -->
  <section class="section" id="contact">
    <div class="container-moon">
      <div class="appoint-grid">
        <div class="appoint-card reveal" data-dir="left">
          <span class="eyebrow">Get in touch</span>
          <h2 class="mb-2">Book an appointment</h2>
          <p>Tell us a little about your loved one and we'll get back to you within 24 hours.</p>

          <form id="appointmentForm" class="mt-4 needs-validation" novalidate>
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
                <option>Assisted Living</option>
                <option>Independent Living</option>
                <option>Palliative Care</option>
                <option>Respite Care</option>
                <option>Dementia Care</option>
                <option>Health &amp; Support</option>
                <option>Professional Services</option>
                <option>Home Nursing</option>
                <option>Day Care</option>
                <option>Post-Stroke Rehabilitation</option>
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
          <span class="eyebrow">How we work</span>
          <h2 class="mb-4">A simple, gentle <span class="text-red">journey</span></h2>
          <div class="steps">
            <div class="step">
              <div class="step-num">1</div>
              <h4>Consultation</h4>
              <p>Schedule a consultation with our team to discuss healthcare needs and preferences. We gather information
                about medical history, current condition and goals.</p>
            </div>
            <div class="step">
              <div class="step-num">2</div>
              <h4>Care implementation</h4>
              <p>We ensure every resource is in place — medical equipment, medications and support services — so care begins smoothly.</p>
            </div>
            <div class="step">
              <div class="step-num">3</div>
              <h4>Customised care plan</h4>
              <p>A tailored strategy designed around each resident's unique needs and preferences, ensuring personalised, effective care.</p>
            </div>
          </div>

          <div class="cta-band mt-4" style="padding:2.4rem 2.5rem">
            <div class="row align-items-center">
              <div class="col-sm-8">
                <h2 style="font-size:1.5rem">Questions? We're happy to help.</h2>
                <p style="margin-bottom:0">Call us any time — day or night.</p>
              </div>
              <div class="col-sm-4 text-sm-end">
                <a href="tel:+60164409013" class="btn btn-gold"><i class="bi bi-telephone-fill"></i> Call now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================= OUR LOCATIONS ======================= -->
  @php($branches = config('services-pages.locations'))
  @php($branchesPhone = config('services-pages.phone'))
  <section class="section section-dark section-locations" id="location" aria-labelledby="locationHeading">
    <div class="container-moon">
      <div class="section-head text-center reveal">
        <span class="eyebrow center">Where to find us</span>
        <h2 id="locationHeading" class="text-cream">Our <span class="text-red">locations</span></h2>
        <p class="mx-auto" style="max-width:62ch;color:var(--moon-lavender)">We now welcome residents across
          <strong class="text-cream">Kedah &amp; Penang</strong> — pick the centre closest to you and drop by for a
          tour, or call ahead and our team will meet you at the door.</p>
      </div>

      <div class="location-shell reveal" data-dir="zoom">
        <!-- Branch rail -->
        <aside class="location-rail" aria-label="List of Moon Elderly Care Center branches">
          <div class="rail-head">
            <span class="rail-pulse" aria-hidden="true"></span>
            <span>{{ count($branches) }} care centres · open 24 / 7</span>
          </div>

          <div class="loc-list">
            @foreach ($branches as $i => $branch)
              <button type="button" class="loc-card {{ $loop->first ? 'is-active' : '' }}" data-loc="{{ $loop->index }}"
                aria-pressed="{{ $loop->first ? 'true' : 'false' }}">
                <span class="loc-num" aria-hidden="true">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                <span class="loc-body">
                  <span class="loc-title">
                    <strong>{{ $branch['name'] }}</strong>
                    <em>{{ $branch['tag'] }}</em>
                  </span>
                  <span class="loc-area">{{ $branch['area'] }}</span>
                  <span class="loc-addr">{{ $branch['address'] }}</span>
                </span>
                <span class="loc-go" aria-hidden="true"><i class="bi bi-arrow-up-right"></i></span>
              </button>
            @endforeach
          </div>

          <div class="rail-foot">
            <span class="rail-foot-icon"><i class="bi bi-telephone-fill"></i></span>
            <span>Prefer to talk to a person?<br>
              <a href="tel:{{ str_replace(' ', '', $branchesPhone) }}">{{ $branchesPhone }}</a></span>
          </div>
        </aside>

        <!-- Map -->
        <div class="location-mapwrap">
          <div id="locationMap" class="location-map" role="application"
            aria-label="Interactive map showing Moon Elderly Care Center branches in Kedah and Penang"></div>

          <div class="map-card" aria-live="polite">
            <span class="map-card-badge" id="mcBadge">{{ $branches[0]['tag'] }}</span>
            <h3 class="map-card-name" id="mcName">{{ $branches[0]['name'] }}</h3>
            <p class="map-card-addr" id="mcAddr">{{ $branches[0]['address'] }}</p>
            <div class="map-card-actions">
              <a class="btn btn-gold p-1" id="mcDir" target="_blank" rel="noopener"
                href="https://www.google.com/maps/dir/?api=1&destination={{ urlencode($branches[0]['address']) }}">
                <i class="bi bi-sign-turn-right-fill"></i> Get directions</a>
              <a class="btn btn-outline p-1" id="mcTel"
                href="tel:{{ str_replace(' ', '', $branchesPhone) }}"><i class="bi bi-telephone-fill"></i> Call us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('partials.lightbox')

  @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        document.querySelectorAll('.loc-card').forEach(button => {
    button.addEventListener('click', function () {
        document.getElementById('locationMap').scrollIntoView({
            behavior: 'smooth',
            block: 'nearest'
        });
    });
});
      (function () {
        'use strict';

        var wrap = document.getElementById('locationMap');
        var cards = document.querySelectorAll('.loc-card');
        var phone = @json($branchesPhone);
        var locs = @json($branches);

        if (!wrap || typeof L === 'undefined' || !cards.length || !locs.length) return;

        var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        var telHref = 'tel:' + String(phone).replace(/[^+\d]/g, '');
        var pad = function (n) { return (n < 10 ? '0' : '') + n; };
        var dirUrl = function (addr) {
          return 'https://www.google.com/maps/dir/?api=1&destination=' + encodeURIComponent(addr);
        };

        var map = L.map(wrap, {
          scrollWheelZoom: false,
          zoomControl: true,
          attributionControl: true
        });

        // Keyless OpenStreetMap tiles (CARTO's public basemaps now require an
        // API key and watermark the map with "API key required" when it is absent).
        // The light tiles are flipped dark by CSS so the section keeps its night look.
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 19,
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright" target="_blank" rel="noopener">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Live summary card (bottom-left overlay)
        var mcBadge = document.getElementById('mcBadge');
        var mcName = document.getElementById('mcName');
        var mcAddr = document.getElementById('mcAddr');
        var mcDir = document.getElementById('mcDir');
        var mcTel = document.getElementById('mcTel');

        var markers = [];
        var latlngs = [];

        locs.forEach(function (loc, i) {
          var ll = [loc.lat, loc.lng];
          latlngs.push(ll);

          var icon = L.divIcon({
            className: 'loc-marker',
            html: '<span class="loc-pin"><span class="pin-num">' + pad(i + 1) + '</span></span><span class="pin-ping" aria-hidden="true"></span>',
            iconSize: [46, 58],
            iconAnchor: [23, 56],
            popupAnchor: [0, -50]
          });

          var marker = L.marker(ll, { icon: icon, title: loc.name, riseOnHover: true }).addTo(map);

          // Popup built with DOM nodes so addresses stay safe text.
          var box = document.createElement('div');
          box.className = 'loc-pop';
          var tag = document.createElement('span');
          tag.className = 'loc-pop-tag';
          tag.textContent = loc.tag;
          var title = document.createElement('h4');
          title.textContent = loc.name;
          var addr = document.createElement('p');
          addr.textContent = loc.address;
          var go = document.createElement('a');
          go.className = 'loc-pop-dir';
          go.href = dirUrl(loc.address);
          go.target = '_blank';
          go.rel = 'noopener';
          go.innerHTML = 'Get directions <i class="bi bi-arrow-up-right"></i>';
          box.appendChild(tag);
          box.appendChild(title);
          box.appendChild(addr);
          box.appendChild(go);

          marker.bindPopup(box, { maxWidth: 240, minWidth: 210, className: 'loc-popup' });
          marker.on('click', function () { setActive(i, false); });
          markers.push(marker);
        });

        var bounds = L.latLngBounds(latlngs);
        map.fitBounds(bounds, { padding: [30, 30], maxZoom: 11 });

        function decorate(i, active, hot) {
          var el = markers[i] && markers[i].getElement && markers[i].getElement();
          if (!el) return;
          el.classList.toggle('is-active', active);
          el.classList.toggle('is-hot', hot);
        }

        function setActive(i, fly) {
          cards.forEach(function (c, j) {
            var on = j === i;
            c.classList.toggle('is-active', on);
            c.setAttribute('aria-pressed', on ? 'true' : 'false');
            decorate(j, on, false);
          });

          mcBadge.textContent = locs[i].tag;
          mcName.textContent = locs[i].name;
          mcAddr.textContent = locs[i].address;
          mcDir.href = dirUrl(locs[i].address);
          mcTel.href = telHref;

          if (fly && markers[i]) {
            if (reduce) {
              map.setView(markers[i].getLatLng(), Math.max(map.getZoom(), 12));
            } else {
              map.flyTo(markers[i].getLatLng(), Math.max(map.getZoom(), 12), { duration: 1.1 });
            }
            setTimeout(function () { markers[i].openPopup(); }, reduce ? 0 : 600);
          }
        }

        cards.forEach(function (card, i) {
          card.addEventListener('click', function () { setActive(i, true); });
          card.addEventListener('mouseenter', function () {
            if (!card.classList.contains('is-active')) decorate(i, false, true);
          });
          card.addEventListener('mouseleave', function () { decorate(i, false, false); });
        });

        // Keep the rail card and summary in sync when a marker is opened directly.
        map.on('popupopen', function (e) {
          markers.forEach(function (m, j) {
            if (m.getPopup() === e.popup) setActive(j, false);
          });
        });

        // Open the first branch once the initial view is settled.
        setTimeout(function () { markers[0].openPopup(); }, 650);

        // Re-measure whenever the map wrapper scrolls into view (it starts hidden
        // inside the reveal animation) and on window resize.
        function refresh() {
          if (map) { map.invalidateSize(); }
        }
        var t = null;
        window.addEventListener('resize', function () {
          clearTimeout(t); t = setTimeout(refresh, 200);
        });
        if ('IntersectionObserver' in window) {
          var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
              if (entry.isIntersecting) { refresh(); io.disconnect(); }
            });
          }, { threshold: 0.05 });
          io.observe(wrap);
        }
      })();
    </script>
  @endpush
@endsection
