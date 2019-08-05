@extends('layouts.app', [
  'class' => 'welcome-page',
  'classPage' => 'welcome-page',
  'activePage' => 'welcome',
  'title' => __('Black Dashboard'),
])

@section('content')
<div class="container">
  <div class="row" style="padding-top: 90px;">
    <div class="col-md-9 ml-auto mr-auto mb-1 text-center">
      <h3>{{ __('Welcome to Material Dashboard Pro Laravel Live Preview.') }} </h3>
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