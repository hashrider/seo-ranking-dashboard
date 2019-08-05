@extends('layouts.app', [
  'class' => 'lock-page',
  'classPage' => 'lick-page',
  'activePage' => 'lock',
  'title' => __('Black Dashboard'),
])


@section('content')
<div class="content">
  <div class="container">
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
      <div class="card card-lock card-white text-center">
        <div class="card-header">
          <img src="{{ asset("black") }}/img/emilyz.jpg" alt="...">
        </div>
        <div class="card-body">
          <h4 class="card-title">{{ __('Joe Gardner') }}</h4>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="tim-icons icon-key-25"></i>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Password">
          </div>
        </div>
        <div class="card-footer">
          <a href="javascript:void(0)" class="btn btn-primary btn-round btn-lg">{{ __('Unlock') }}</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
@endpush
