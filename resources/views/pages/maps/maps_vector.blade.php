@extends('layouts.app', ['activePage' => 'vector_maps', 'menuParent' => 'maps', 'titlePage' => __('Vector Map')])

@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-header">
          <h4 class="text-center">
            World Map
            <br>
            <small>
              Looks great on any resolution. Made by our friends from
              <a target="_blank" href="http://jvectormap.com/">jVector Map</a>.
            </small>
          </h4>
          <br>
        </div>
        <div class="card-body">
          <div id="worldMap" class="map map-big"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
<script>
  $(document).ready(function() {
    demo.initVectorMap();
  });
</script>
@endpush