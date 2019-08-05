@extends('layouts.app', [
  'class' => 'login-page',
  'classPage' => 'login-page',
  'activePage' => 'login',
  'title' => __('Black Dashboard'),
])

@section('content')
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-9 ml-auto mr-auto mb-1 text-center">
        <h3>{{ __('Welcome to Black Dashboard Pro Laravel Live Preview.') }} </h3>

        <p class="text-lead text-light mt-3 mb-0">
            {{ __('Log in and see how you can save more than 90 hours of work with CRUDs for managing: #users, #roles, #items, #categories, #tags and more.') }}
        </p>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-5 col-md-8 col-sm-10 ml-auto mr-auto mb-3 text-center">
          <h5 class="text-lead text-white mt-2 mb-0">
              <strong>{{ __('You can log in with 3 user types:') }}</strong>
          </h5>
          <ol class="text-lead text-light mt-3 mb-3">
              <li>{!! __('Username <b>admin@black.com</b> Password <b>secret</b>') !!}</li>
              <li>{!! __('Username <b>creator@black.com</b> Password <b>secret</b>') !!}</li>
              <li>{!! __('Username <b>member@black.com</b> Password <b>secret</b>') !!}</li>
          </ol>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
      <form class="form" id ="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="card card-login card-white">
          <div class="card-header">
            <img src="{{ asset("black") }}/img/card-primary.png" alt="">
            <h1 class="card-title">{{ __('Log in') }}</h1>
          </div>
          <div class="card-body">
            <div class="form-group mb-0 {{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tim-icons icon-email-85"></i>
                  </div>
                </div>
                <input type="email" class="form-control" id="exampleEmails" name="email" placeholder="{{ __('Email...') }}" value="{{ old('email', 'admin@black.com') }}" required>
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
                <input type="password" class="form-control" id="examplePassword" name="password" placeholder="{{ __('Password...') }}" value="secret" required>
              </div>
              @include('alerts.feedback', ['field' => 'password'])
            </div>
          </div>
          <div class="card-footer">
            <a href="#" onclick="event.preventDefault();
            document.getElementById('login-form').submit();" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Get started') }}</a>
            <div class="pull-left">
              <h6>
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="text-light">
                    <small>{{ __('Forgot password?') }}</small>
                  </a>
                @endif
              </h6>
            </div>
            <div class="pull-right">
              <h6>
                <a href="{{ route('register') }}" class="text-light">
                    <small>{{ __('Create new account') }}</small>
                </a>
              </h6>
            </div>
          </div>
        </div>
      </form>
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
