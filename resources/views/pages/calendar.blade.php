@extends('layouts.app', ['activePage' => 'calendar', 'menuParent' => 'calendar', 'titlePage' => __('Calendar')])

@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-10 ml-auto mr-auto">
      <div class="card card-calendar">
        <div class="card-body">
          <div id="fullCalendar"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.initFullCalendar();
    });
  </script>
@endpush