<!-- FOOTER -->
<footer class="footer">
  <div class="container-moon">
    <div class="footer-grid">
      <div>
        <img src="{{ asset('assets/images/logo.png') }}" alt="Moon Elderly Care Center" class="footer-logo">
        <p>Compassionate, professional elderly care delivered with warmth and dignity — at our care centre in Kulim or
          in the comfort of your own home.</p>
         
        <div class="footer-socials">
          @include('partials.socials')
        </div>
      </div>

      <div>
        <h6>Links</h6>
        <ul class="footer-links">
          <li><a href="{{ route('home') }}"><i class="bi bi-chevron-right"></i>Home</a></li>
          <li><a href="{{ route('gallery') }}"><i class="bi bi-chevron-right"></i>Gallery</a></li>
          <li><a href="{{ route('home') }}#contact"><i class="bi bi-chevron-right"></i>Contact</a></li>
        </ul>
      </div>

      <div>
        <h6>Contact information</h6>
        <ul class="footer-meta" style="list-style:none;padding:0">
          
          <li><i class="bi bi-telephone-fill"></i><a href="tel:{{ str_replace(' ', '', config('services-pages.phone')) }}">{{ config('services-pages.phone') }}</a></li>
          <li><i class="bi bi-envelope-fill"></i><a href="mailto:{{ config('services-pages.email') }}">{{ config('services-pages.email') }}</a></li>
          <li class="position-relative">
              <p class="center-name text-white mb-0">Address</p></li>
          <li>
              <i class="bi bi-geo-alt-fill"></i>
              <span>{!! config('branches.butterworth.0.address') !!}</span></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <div>© <span id="year">2026</span> Moon Elderly Care Center. All rights reserved.</div>
      <div>Digitally Crafted by <a href="{{ config('services-pages.credit_url') }}" target="_blank">{{ config('services-pages.credit') }}</a></div>
    </div>
  </div>
</footer>
