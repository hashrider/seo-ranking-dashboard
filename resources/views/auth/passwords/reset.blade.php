@extends('layouts.app', [
  'class' => 'login-page',
  'classPage' => 'login-page',
  'activePage' => 'login',
  'title' => __('Black Dashboard'),
])

@section('content')
<div class="content">
  <div class="container">
    <div class="row" style="padding-top:90px">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <form class="form" id="reset-form" method="POST" action="{{ route('password.update') }}">
                @csrf
        
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="card card-login card-white">
              <div class="card-header">
                <img src="{{ asset("black") }}/img/card-primary.png" alt="">
                <h1 class="card-title">{{ __('Reset Password') }}</h1>
              </div>
              <div class="card-body">
                <div class="form-group mb-0 {{ $errors->has('email') ? ' has-danger' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tim-icons icon-email-85"></i>
                      </div>
                    </div>
                    <input type="email" class="form-control" id="exampleEmails" name="email" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
                  </div>
                    @include('alerts.feedback', ['field' => 'email'])
                </div>
                <div class="form-group mb-0 {{ $errors->has('password') ? ' has-danger' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tim-icons icon-lock-circle"></i>
                      </div>
                    </div>
                    <input type="password" class="form-control" id="examplePassword" name="password" placeholder="{{ __('Password...') }}" required>
                  </div>
                  @include('alerts.feedback', ['field' => 'password'])
                </div>
                <div class="form-group mb-0 {{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tim-icons icon-lock-circle"></i>
                      </div>
                    </div>
                    <input type="password" class="form-control" id="examplePassword" name="password_confirmation" placeholder="{{ __('Password Confirmation...') }}" required>
                  </div>
                  @include('alerts.feedback', ['field' => 'password_confirmation'])
                </div>
              </div>
              <div class="card-footer">
                <a href="#" onclick="event.preventDefault();
                document.getElementById('reset-form').submit();" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Reset Password') }}</a>
              </div>
            </div>
          </form>
        </div>
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