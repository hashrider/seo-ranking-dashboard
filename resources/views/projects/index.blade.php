@extends('layouts.app', ['activePage' => 'project-management', 'menuParent' => 'components', 'titlePage' => __('Project Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ __('Projects') }}</h4>
              </div>
              <div class="card-body">
                @can('create', App\User::class)
                  <div class="row">
                    <div class="col-12 text-right mb-3">
                      <a href="{{ route('project.create') }}" class="btn btn-sm btn-primary">{{ __('Add Project') }}</a>
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
                        {{ __('User') }}
                      </th>
                      <th>
                        {{ __('Domain') }}
                      </th>
                      <th>
                        {{ __('Keywords') }}
                      </th>
                      <th>
                        {{ __('Competitors') }}
                      </th>
                      <th>
                        {{ __('Creation date') }}
                      </th>
                      @can('manage-projects', App\User::class)
                        <th class="text-right">
                          {{ __('Actions') }}
                        </th>
                      @endcan
                    </thead>
                    <tbody>
                      @foreach($projects as $project)
                        <tr>
                          <td>
                            {{ $project->name }}
                          </td>
                          <td>
                            {{ $project->user->name }}
                          </td>
                          <td>
                            {{ $project->domain }}
                          </td>
                          <td>
                            {{ $project->keywords }}
                          </td>
                          <td>
                            {{ $project->competitor }}
                          </td>
                          <td>
                            {{ $project->created_at->format('Y-m-d') }}
                          </td>
                          @can('manage-projects', App\User::class)
                            <td class="td-actions text-right">
                              <form action="{{ route('project.destroy', $project) }}" method="post">
                                  @csrf
                                  @method('delete')
                                  
                                  @can('update', $project)
                                    <a href="{{ route('project.edit', $project) }}" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                                  @endcan
                                  @can('delete', $project)
                                    <button type="button" class="btn btn-link btn-danger btn-icon btn-sm remove" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this project?") }}') ? this.parentElement.submit() : ''">
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