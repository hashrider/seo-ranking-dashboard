@extends('layouts.app', ['activePage' => 'item-management', 'menuParent' => 'laravel', 'titlePage' => __('Item Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('item.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">{{ __('Add Item') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('item.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Picture') }}</label>
                  <div class="col-sm-7">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                      <div class="fileinput-new thumbnail">
                        <img src="{{ asset('black') }}/img/image_placeholder.jpg" alt="...">
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail"></div>
                      <div>
                        <span class="btn btn-file">
                          <span class="fileinput-new">{{ __('Select image') }}</span>
                          <span class="fileinput-exists">{{ __('Change') }}</span>
                          <input type="file" name="photo" id = "input-picture" />
                        </span>
                          <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> {{ __('Remove') }}</a>
                      </div>
                      @include('alerts.feedback', ['field' => 'photo'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                      @include('alerts.feedback', ['field' => 'name'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
                        <select class="selectpicker col-sm-12 pl-0 pr-0" name="category_id" data-style="select-with-transition" title="" data-size="100">
                        <option value="">-</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                      </select>
                      @include('alerts.feedback', ['field' => 'category_id'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                      <textarea name="description" id="input-description" cols="30" rows="10" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}" value="{{ old('description') }}">{{ old('description') }}</textarea>
                      @include('alerts.feedback', ['field' => 'description'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Tags') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <select class="selectpicker col-sm-12 pl-0 pr-0" name="tags[]" data-style="select-with-transition" multiple title="-" data-size="7">
                            @foreach ($tags as $tag)
                              <option value="{{ $tag->id }}" {{ in_array($tag->id, old('tags') ?? []) ? 'selected' : '' }}>{{ $tag->name }}</option>
                            @endforeach
                        </select>
                      @include('alerts.feedback', ['field' => 'tags'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label label-checkbox">{{ __('Status') }}</label>
                  <div class="col-sm-10 checkbox-radios">
                    @foreach (config('items.statuses') as $value => $status)
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input name="status" class="form-check-input" id="{{ $value }}" value="{{ $value }}" type="radio" {{ old('status') == $value ? ' checked' : '' }}> {{ $status }}
                          <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    @endforeach
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label label-checkbox">{{ __('Show on homepage') }}</label>
                  <div class="col-sm-10 mt-2">
                    <input type="checkbox"  name="show_on_homepage" value="1" {{ old('show_on_homepage') == 1 ? ' checked' : '' }} class="bootstrap-switch"
                      data-on-label="Yes"
                      data-off-label="No"
                    />
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label label-checkbox">{{ __('Options') }}</label>
                  <div class="col-sm-10 checkbox-radios">
                    @foreach (config('items.options') as $key => $option)
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="options[]" class="form-check-input" id="option-{{ $key }}" value="{{ $key }}" type="checkbox" {{ old('options') && in_array($key, old('options')) ? ' checked' : '' }}> {{ $option }}
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    @endforeach
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Date') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                      <input type="text"  name="date" id="date"
                      placeholder="{{ __('Select date') }}" class="form-control datetimepicker" value="{{ old('date', now()->format('d-m-Y')) }}"/>
                      @include('alerts.feedback', ['field' => 'date'])
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn">{{ __('Add Item') }}</button>
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
    $('.datetimepicker').datetimepicker({
      icons: {
          time: "fa fa-clock-o",
          date: "fa fa-calendar",
          up: "fa fa-chevron-up",
          down: "fa fa-chevron-down",
          previous: 'fa fa-chevron-left',
          next: 'fa fa-chevron-right',
          today: 'fa fa-screenshot',
          clear: 'fa fa-trash',
          close: 'fa fa-remove'
      },
      format: 'DD-MM-YYYY'
    });
  });
</script>
@endpush