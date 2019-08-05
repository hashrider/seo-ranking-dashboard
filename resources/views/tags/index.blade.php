@extends('layouts.app', ['activePage' => 'tag-management', 'menuParent' => 'laravel', 'titlePage' => __('Tag Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ __('Tags') }}</h4>
              </div>
              <div class="card-body">
                @can('create', App\Tag::class)
                  <div class="row">
                    <div class="col-12 text-right mb-3">
                      <a href="{{ route('tag.create') }}" class="btn btn-sm btn-primary">{{ __('Add tag') }}</a>
                    </div>
                  </div>
                @endcan
                <div class="table-responsive">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover" style="display:none">
                    <thead class="text-primary">
                      <th>
                          {{ __('Name') }}
                      </th>
                      <th>
                        {{ __('Color') }}
                      </th>
                      <th>
                        {{ __('Creation date') }}
                      </th>
                      @can('manage-items', App\User::class)
                        <th class="text-right">
                          {{ __('Actions') }}
                        </th>
                      @endcan
                    </thead>
                    <tbody>
                      @foreach($tags as $tag)
                        <tr>
                          <td>
                            {{ $tag->name }}
                          </td>
                          <td>
                            <span class="badge badge-default" style="background-color:{{ $tag->color }}">{{ $tag->name }}</span>
                          </td>
                          <td>
                            {{ $tag->created_at->format('Y-m-d') }}
                          </td>
                          @can('manage-items', App\User::class)
                            <td class="td-actions text-right">
                              <form action="{{ route('tag.destroy', $tag) }}" method="post">
                                @csrf
                                @method('delete')
                                
                                @can('update', $tag)
                                  <a href="{{ route('tag.edit', $tag) }}" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                                @endcan
                                @if ($tag->items->isEmpty() && auth()->user()->can('delete', $tag))
                                  <button type="button" class="btn btn-link btn-danger btn-icon btn-sm remove" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this tag?") }}') ? this.parentElement.submit() : ''">
                                  <i class="tim-icons icon-simple-remove"></i>
                                </button>
                                @endif
                              </form>
                            </td>
                          @endcan
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
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
    $('#datatables').fadeIn(1100);
    $('#datatables').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search tags",
      },
      "columnDefs": [
        { "orderable": false, "targets": 3 },
      ],
    });
  });
</script>
@endpush