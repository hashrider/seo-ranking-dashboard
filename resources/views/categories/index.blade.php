@extends('layouts.app', ['activePage' => 'category-management', 'menuParent' => 'laravel', 'titlePage' => __('Category Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ __('Categories') }}</h4>
              </div>
              <div class="card-body">
                @can('create', App\Category::class)
                  <div class="row">
                    <div class="col-12 text-right mb-3">
                      <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary">{{ __('Add category') }}</a>
                    </div>
                  </div>
                @endcan
                <div class="table-responsive">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover datatable-primary" style="display:none">
                    <thead class="text-primary">
                      <th>
                          {{ __('Name') }}
                      </th>
                      <th>
                        {{ __('Description') }}
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
                      @foreach($categories as $category)
                        <tr>
                          <td>
                            {{ $category->name }}
                          </td>
                          <td>
                            {{ $category->description }}
                          </td>
                          <td>
                            {{ $category->created_at->format('Y-m-d') }}
                          </td>
                          @can('manage-items', App\User::class)
                            <td class="td-actions text-right">
                              <form action="{{ route('category.destroy', $category) }}" method="post">
                                @csrf
                                @method('delete')
                                
                                @can('update', $category)
                                  <a href="{{ route('category.edit', $category) }}" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                                @endcan
                                @if ($category->items->isEmpty() && auth()->user()->can('delete', $category))
                                  <button type="button" class="btn btn-link btn-danger btn-icon btn-sm remove" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this category?") }}') ? this.parentElement.submit() : ''">
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
          searchPlaceholder: "Search categories",
        },
        "columnDefs": [
          { "orderable": false, "targets": 3 },
        ],
      });
    });
  </script>
@endpush