<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', config('services-pages.brand'))</title>
  <!--<title>Nursing Home Simpang Ampat Penang | Moon Elderly Care Center</title>-->
  <meta name="description" content="@yield('description', 'Moon Elderly Care Center provides professional nursing care service in Simpang Ampat Penang — assisted living, home nursing, dementia care, palliative care and more. Compassionate care at your doorstep.')">
<meta name="google-site-verification" content="gt33TgkoFYac7-XCoG2PtfKcduzp_8Emlz83SguwWyo" />
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- Theme -->
  <link href="{{ asset('assets/css/theme.css?v=10') }}" rel="stylesheet">

  @yield('page_head')
  @stack('head')
</head>

<body>

  @include('partials.topbar')
  @include('partials.navbar')
  @include('partials.offcanvas')

  @yield('content')

  @include('partials.footer-selector')

  <!-- Back to top -->
  <button class="back-top" id="backTop" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  @stack('scripts')
</body>

</html>
