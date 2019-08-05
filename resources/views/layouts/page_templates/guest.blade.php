@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
    <div class="full-page {{ $classPage }}">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    @yield('content')
    @include('layouts.footers.guest')
  </div>
</div>
