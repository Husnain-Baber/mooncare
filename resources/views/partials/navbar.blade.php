<!-- NAVBAR -->
<header class="site-navbar">
  <div class="container-moon">
    <a href="{{ route('home') }}" class="navbar-logo" aria-label="Moon Elderly Care Center home">
      <img src="{{ asset('assets/images/logo.png') }}" alt="Moon Elderly Care Center logo">
    </a>

    <nav aria-label="Primary">
      <ul class="navbar-menu">
        <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li class="dropdown">
          <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('services.show') ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services <i class="bi bi-chevron-down" style="font-size:.7rem"></i>
          </a>
          <ul class="dropdown-menu moon-dropdown">
            @foreach (config('services-pages.pages') as $svc)
              <li><a class="dropdown-item {{ request()->route('service') === $svc['slug'] ? 'active-item' : '' }}" href="{{ route('services.show', $svc['slug']) }}"><i class="{{ $svc['icon'] }}"></i>{{ $svc['title'] }}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a href="{{ route('gallery') }}" class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
        <li><a href="{{ route('home') }}#contact" class="nav-link">Contact</a></li>
      </ul>
    </nav>

    <div class="navbar-cta">
      <a href="tel:{{ str_replace(' ', '', config('services-pages.phone')) }}" class="navbar-phone d-none d-xl-inline-flex">
        <i class="bi bi-telephone-inbound-fill"></i>
        <span>Call us anytime<small>{{ config('services-pages.phone') }}</small></span>
      </a>
      <a href="{{ route('home') }}#contact" class="btn btn-gold btn-sm">Make an enquiry</a>
      <button class="navbar-toggle" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-label="Open menu">
        <i class="bi bi-list"></i>
      </button>
    </div>
  </div>
</header>
