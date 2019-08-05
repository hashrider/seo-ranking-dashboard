@extends('layouts.app', [
  'class' => 'home-page',
  'classPage' => 'home-page',
  'activePage' => 'home',
  'title' => __('Black Dashboard'),
])

@section('content')
<div class="container">
  <div class="row" style="padding-top: 90px;">
    <div class="col-md-9 ml-auto mr-auto mb-1 text-center">
      <h3>{{ __('You are logged in!') }} </h3>
    </div>
  </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush