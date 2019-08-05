<div class="wrapper ">
  @include('layouts.navbars.sidebar')
  <div class="main-panel" data="orange">
    @include('layouts.navbars.navs.auth')
    @yield('content')
    @include('layouts.footers.auth')
  </div>
</div>