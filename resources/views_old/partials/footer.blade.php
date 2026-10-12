<!-- FOOTER -->
<footer class="footer">
  <div class="container-moon">
    <div class="footer-grid">
      <div>
        <img src="{{ asset('assets/images/logo.png') }}" alt="Moon Elderly Care Center" class="footer-logo">
        <p>Compassionate, professional elderly care delivered with warmth and dignity — at our care centre in Kulim or
          in the comfort of your own home.</p>
          <h6 style="margin-top:1.8rem">Stay updated</h6>
        <form id="newsletterForm" class="footer-newsletter" novalidate>
          <input type="email" placeholder="Enter your email address" aria-label="Email address" required>
          <button type="submit" aria-label="Subscribe"><i class="bi bi-send-fill"></i></button>
        </form>
        <div class="footer-socials">
          @include('partials.socials')
        </div>
      </div>

      <div>
        <h6>Pages</h6>
        <ul class="footer-links">
          <li><a href="{{ route('home') }}"><i class="bi bi-chevron-right"></i>Home</a></li>
          <li><a href="{{ route('home') }}#services"><i class="bi bi-chevron-right"></i>Services</a></li>
          <li><a href="{{ route('gallery') }}"><i class="bi bi-chevron-right"></i>Gallery</a></li>
          <li><a href="{{ route('services.show', 'assisted-living') }}"><i class="bi bi-chevron-right"></i>Assisted Living</a></li>
          <li><a href="{{ route('services.show', 'home-nursing') }}"><i class="bi bi-chevron-right"></i>Home Nursing</a></li>
          <li><a href="{{ route('services.show', 'dementia-care') }}"><i class="bi bi-chevron-right"></i>Dementia Care</a></li>
          <li><a href="{{ route('home') }}#contact"><i class="bi bi-chevron-right"></i>Contact</a></li>
        </ul>
      </div>

      <div>
        <h6>Contact information</h6>
        <ul class="footer-meta" style="list-style:none;padding:0">
          
          <li><i class="bi bi-telephone-fill"></i><a href="tel:{{ str_replace(' ', '', config('services-pages.phone')) }}">{{ config('services-pages.phone') }}</a></li>
          <li><i class="bi bi-envelope-fill"></i><a href="mailto:{{ config('services-pages.email') }}">{{ config('services-pages.email') }}</a></li>
          <li class="position-relative">
              <p class="center-name text-white mb-0">Main Branch</p></li>
          <li>
              <i class="bi bi-geo-alt-fill"></i>
              <span>{!! config('services-pages.address') !!}</span></li>
        </ul>
        <div class="position-relative">
        <p class="center-name text-white mb-0">Branch 2</p>
        </div>
        <ul class="footer-meta" style="list-style:none;padding:0">
            <li><i class="bi bi-geo-alt-fill"></i><span>No F4 JALAN bukit bayu A4 Taman Bukit Bayu Sungai Lalang 08100 Bedong Kedah</span></li>
          
        </ul>
        <div class="position-relative">
        <p class="center-name text-white mb-0">Branch 3</p>
        </div>
        <ul class="footer-meta" style="list-style:none;padding:0">
           
            <li><i class="bi bi-geo-alt-fill"></i><span>No 9A Jalan Permata Indah 2 Taman Permata Indah Sungai Petani Kedah</span></li>
        </ul>
        <div class="position-relative">
        <p class="center-name text-white mb-0">Branch 4</p>
        </div>
        <ul class="footer-meta" style="list-style:none;padding:0">
            <li><i class="bi bi-geo-alt-fill"></i><span> No 427, Jalan Puteri Residensi 12, Bandar Puteri Jaya, 08000 Sungai Petani, Kedah</span></li>
        </ul>
        <div class="position-relative">
        <p class="center-name text-white mb-0">Branch 5</p>
        </div>
        <ul class="footer-meta" style="list-style:none;padding:0">
            <li><i class="bi bi-geo-alt-fill"></i><span> Lot 366, PT892, jalan Serdang Kampung Padang kulim, 09000 kulim kedah, Malaysia</span></li>
        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div>© <span id="year">2026</span> Moon Elderly Care Center. All rights reserved.</div>
      <div>Digitally Crafted by <a href="{{ config('services-pages.credit_url') }}" target="_blank">{{ config('services-pages.credit') }}</a></div>
    </div>
  </div>
</footer>
