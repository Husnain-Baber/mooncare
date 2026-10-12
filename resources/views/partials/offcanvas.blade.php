<!-- Mobile offcanvas -->
<div class="offcanvas offcanvas-end moon-canvas" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
  <div class="offcanvas-header">
    <a href="{{ route('home') }}" class="navbar-logo"><img src="{{ asset('assets/images/logo.png') }}" alt="Moon logo"></a>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="moon-canvas-list">
      <!--<li><a href="{{ route('home') }}">Home <i class="bi bi-chevron-right"></i></a></li>-->
      <li>
            <a data-bs-toggle="collapse" href="#mobileHome" role="button" aria-expanded="false">Home <i class="bi bi-chevron-down"></i></a>
            <ul class="collapse moon-canvas-sub" id="mobileHome">
              <li><a href="https://mooncarecenter.com" target="_blank" rel="noopener"> Moon Care Center</a></li>
              <li><a href="https://mymooncarecenter.com" target="_blank" rel="noopener"> My Moon Care Center</a></li>
              <li><a href="https://maplecarecenter.com" target="_blank" rel="noopener"> Maple Care Center</a></li>
          </ul>
        </li>
      <li>
        <a data-bs-toggle="collapse" href="#mobileServices" role="button" aria-expanded="false">Services <i class="bi bi-chevron-down"></i></a>
        <ul class="collapse moon-canvas-sub" id="mobileServices">
          @foreach (config('services-pages.pages') as $svc)
            <li><a href="{{ route('services.show', $svc['slug']) }}">{{ $svc['title'] }}</a></li>
          @endforeach
        </ul>
      </li>
      <li><a href="{{ route('gallery') }}">Gallery <i class="bi bi-chevron-right"></i></a></li>
      <li><a href="{{ route('home') }}#contact">Contact <i class="bi bi-chevron-right"></i></a></li>
    </ul>
    <a href="{{ route('home') }}#contact" class="btn btn-gold w-100">Make an enquiry</a>
    <div class="footer-socials mt-4">
      @include('partials.socials')
    </div>
  </div>
</div>
