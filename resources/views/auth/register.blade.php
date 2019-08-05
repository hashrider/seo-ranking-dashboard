@extends('layouts.app', [
  'class' => 'register-page',
  'classPage' => 'register-page',
  'activePage' => 'register',
  'title' => __('Register')
])

@section('content')
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-5 ml-auto">
        <div class="info-area info-horizontal mt-5">
          <div class="icon icon-warning">
            <i class="tim-icons icon-wifi"></i>
          </div>
          <div class="description">
            <h3 class="info-title">{{ __('Marketing') }}</h3>
            <p class="description">
                {{ __('We\'ve created the marketing campaign of the website. It was a very interesting collaboration.') }}
            </p>
          </div>
        </div>
        <div class="info-area info-horizontal">
          <div class="icon icon-primary">
            <i class="tim-icons icon-triangle-right-17"></i>
          </div>
          <div class="description">
            <h3 class="info-title">{{ __('Fully Coded in HTML5') }}</h3>
            <p class="description">
                {{ __('We\'ve developed the website with HTML5 and CSS3. The client has access to the code using GitHub.') }}
            </p>
          </div>
        </div>
        <div class="info-area info-horizontal">
          <div class="icon icon-info">
            <i class="tim-icons icon-trophy"></i>
          </div>
          <div class="description">
            <h3 class="info-title">{{ __('Built Audience') }}</h3>
            <p class="description">
                {{ __('There is also a Fully Customizable CMS Admin Dashboard for this product.') }}
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-7 mr-auto">
        <div class="card card-register card-white">
          <div class="card-header">
            <img class="card-img" src="{{ asset('black') }}/img/card-primary.png" alt="Card image">
            <h4 class="card-title">{{ __('Register') }}</h4>
          </div>
          <div class="card-body">
            <form class="form" id="register-form" method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-group mb-0 {{ $errors->has('name') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="tim-icons icon-single-02"></i>
                    </div>
                  </div>
                  <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
                </div>
                @include('alerts.feedback', ['field' => 'name'])
              </div>
              <div class="form-group mb-0 {{ $errors->has('name') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="tim-icons icon-email-85"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" name="email" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
                </div>
                @include('alerts.feedback', ['field' => 'email'])
              </div>
              <div class="form-group mb-0 {{ $errors->has('name') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="tim-icons icon-email-85"></i>
                    </span>
                  </div>
                  <select class="form-control" name="user_type" title="" data-size="100">
                    <option value="" selected hidden>{{ __('User Type') }}</option>
                    <option value="1" @if (old('user_type') == '1') selected="selected" @endif>{{ __('Admin') }}</option>
                    <option value="2" @if (old('user_type') == '2') selected="selected" @endif>{{ __('Creator') }}</option>
                    <option value="3" @if (old('user_type') == '3') selected="selected" @endif>{{ __('Member') }}</option>
                  </select>
                </div>
                @include('alerts.feedback', ['field' => 'user_type'])
              </div>
              <div class="form-group mb-0 {{ $errors->has('name') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="tim-icons icon-lock-circle"></i>
                    </div>
                  </div>
                  <input type="password" name="password" placeholder="{{ __('Password...') }}" class="form-control" required>
                </div>
                @include('alerts.feedback', ['field' => 'password'])
              </div>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tim-icons icon-lock-circle"></i>
                  </div>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password...') }}" required>
              </div>
              <div class="form-check text-left">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="policy" value="1" {{ old('policy', 1) ? 'checked' : '' }} >
                  <span class="form-check-sign"></span>
                  {{ __('I agree with the ') }} <a href="#">{{ __('terms and conditions') }}</a>
                </label>
              </div>
            </form>
          </div>
          <div class="card-footer">
            <a href="javascript:void(0)" onclick="event.preventDefault();
            document.getElementById('register-form').submit();" class="btn btn-primary btn-round btn-lg">Get Started</a>
          </div>
        </div>
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
