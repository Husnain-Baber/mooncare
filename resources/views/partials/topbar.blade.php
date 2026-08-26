<!-- TOPBAR -->
<div class="site-topbar">
  <div class="container-moon">
    <div class="topbar-meta">
      <a class="item" href="tel:{{ str_replace(' ', '', config('services-pages.phone')) }}"><i class="bi bi-telephone-fill"></i>{{ config('services-pages.phone') }}</a>
      <a class="item" href="mailto:{{ config('services-pages.email') }}"><i class="bi bi-envelope-fill"></i>{{ config('services-pages.email') }}</a>
      <span class="item d-none d-md-inline-flex"><i class="bi bi-clock-fill"></i>Open 24 / 7</span>
    </div>
    {{-- <div class="topbar-socials">
      @include('partials.socials')
    </div> --}}
  </div>
</div>
