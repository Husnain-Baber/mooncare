
@if (request()->routeIs('butterworth*'))
    @include('partials.footer-branches')
@else
    @include('partials.footer')
@endif
