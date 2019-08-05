@extends('layouts.app', ['activePage' => 'item-management', 'menuParent' => 'laravel', 'titlePage' => __('Item Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ __('Items') }}</h4>
              </div>
              <div class="card-body">
                @can('create', App\Item::class)
                  <div class="row">
                    <div class="col-12 text-right mb-3">
                      <a href="{{ route('item.create') }}" class="btn btn-sm btn-primary">{{ __('Add Item') }}</a>
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
                        {{ __('Category') }}
                      </th>
                      <th>
                        {{ __('Picture') }}
                      </th>
                      <th>
                        {{ __('Tags') }}
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
                      @foreach($items as $item)
                        <tr>
                          <td>
                            {{ $item->name }}
                          </td>
                          <td>
                            {{ $item->category->name }}
                          </td>
                          <td>
                            <img src="{{ $item->path() }}" alt="" style="max-width: 200px;">
                          </td>
                          <td>
                            @foreach ($item->tags as $tag)
                                <span class="badge badge-default" style="background-color:{{ $tag->color }}">{{ $tag->name }}</span>
                            @endforeach
                          </td>
                          <td>
                            {{ $item->created_at->format('Y-m-d') }}
                          </td>
                          @can('manage-items', App\User::class)
                            <td class="td-actions text-right">
                              <form action="{{ route('item.destroy', $item) }}" method="post">
                                  @csrf
                                  @method('delete')
                                  
                                  @can('update', $item)
                                    <a href="{{ route('item.edit', $item) }}" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                                  @endcan
                                  @can('delete', $item)
                                    <button type="button" class="btn btn-link btn-danger btn-icon btn-sm remove" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this item?") }}') ? this.parentElement.submit() : ''">
                                      <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                  @endcan
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
          searchPlaceholder: "Search items",
        },
        "columnDefs": [
          { "orderable": false, "targets": 5 },
        ],
      });
    });
  </script>
@endpush