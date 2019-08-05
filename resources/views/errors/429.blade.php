@extends('errors.layout', [
  'class' => 'login-page',
  'classPage' => 'login-page',
  'activePage' => 'login',
  'title' => __('Black Dashboard')
])

@section('content')
<div class="content">
  <div class="container">
    <div class="row" style="padding-top: 90px;">
      <div class="col-md-9 ml-auto mr-auto mb-1 text-center">
        <h2>{{ __('Too Many Requests :') }}(</h2>
        <h4>{{ __('Ooooups! Looks like your did too many requests') }}</h4>
      </div>
    </div>
  </div>
</div>
@endsection