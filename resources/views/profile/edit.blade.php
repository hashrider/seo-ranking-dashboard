@extends('layouts.app', ['activePage' => 'profile', 'menuParent' => 'laravel', 'titlePage' => __('User Profile')])

@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <form method="post" enctype="multipart/form-data" action="{{ route('profile.update') }}" autocomplete="off">
          @csrf
          @method('put')
          
          <div class="card-header">
            <h5 class="title">{{ __('Edit Profile') }}</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <label class="col-sm-2 col-form-label">{{ __('Profile photo') }}</label>
              <div class="col-sm-7">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail img-circle">
                    @if (auth()->user()->picture)
                      <img src="{{ auth()->user()->profilePicture() }}" alt="...">
                    @else
                      <img src="{{ asset('black') }}/img/placeholder.jpg" alt="...">
                    @endif
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                  <div>
                    <span class="btn btn-round btn-rose btn-file">
                      <span class="fileinput-new">{{ __('Add Photo') }}</span>
                      <span class="fileinput-exists">{{ __('Change') }}</span>
                      <input type="file" name="photo" id = "input-picture"/>
                    </span>
                    <br />
                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> {{ __('Remove') }}</a>
                  </div>
                  @include('alerts.feedback', ['field' => 'photo'])
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
                  @include('alerts.feedback', ['field' => 'name'])
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required />
                  @include('alerts.feedback', ['field' => 'email'])
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">{{ _('Update Profile') }}</button>
            <div class="clearfix"></div>
          </div>
        </form>
      </div>
    
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">{{ __('Change password') }}</h5>
        </div>
        <div class="card-body">
          <form method="post" action="{{ route('profile.password') }}">
            @csrf
            @method('put')

            <div class="row">
              <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Current Password') }}</label>
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Current Password') }}" value="" required />
                  @include('alerts.feedback', ['field' => 'old_password'])
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label" for="input-password">{{ __('New Password') }}</label>
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                  @include('alerts.feedback', ['field' => 'password'])
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">{{ _('Change password') }}</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-user">
        <div class="card-body">
          <p class="card-text">
            <div class="author">
              <div class="block block-one"></div>
              <div class="block block-two"></div>
              <div class="block block-three"></div>
              <div class="block block-four"></div>
              <a href="javascript:void(0)">
                <img class="avatar" src="{{ auth()->user()->profilePicture() }}">
                <h5 class="title">{{ auth()->user()->name }}</h5>
              </a>
              <p class="description">
                {{ __('Ceo/Co-Founder') }}
              </p>
            </div>
          </p>
          <div class="card-description">
            {{ __('Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...') }}
          </div>
        </div>
        <div class="card-footer">
          <div class="button-container">
            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
              <i class="fab fa-facebook"></i>
            </button>
            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
              <i class="fab fa-twitter"></i>
            </button>
            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
              <i class="fab fa-google-plus"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@push('js')
<script>
  $(document).ready(function () {
    @if ($errors->has('not_allow_profile'))
      $.notify({
        icon: "close",
        message: "{{ $errors->first('not_allow_profile') }}"
      }, {
        type: 'danger',
        timer: 3000,
        placement: {
          from: 'top',
          align: 'right'
        }
      });
    @endif
  });
</script>
@endpush