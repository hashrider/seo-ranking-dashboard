@if ($errors->has($field))
  <label id="{{ $field }}-error" class="error text-danger" for="input-{{ $field }}">{{ $errors->first($field) }}</label>
@endif