@extends('layouts.app', ['activePage' => 'project-management', 'menuParent' => 'components', 'titlePage' => __('Project Management')])

@section('content')
<div class="content">
  <div class="col-md-10 mr-auto ml-auto">
    <!--      Wizard container        -->
    <div class="wizard-container">
      <div class="card card-wizard" data-color="primary">
        <form method="post" action="{{ route('project.store') }}" autocomplete="off" id="projectform">
          @csrf
          @method('post')
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <div class="card-header text-center">
            <h3 class="card-title">
              Add Project
            </h3>
            <h5 class="description">Please follow the steps to add new project.</h5>
            <div class="wizard-navigation">
              <div class="progress-with-circle">
                <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
              </div>
              <ul>
                <li class="nav-item">
                  <a class="nav-link active" href="#domain" data-toggle="tab">
                    <i class="tim-icons icon-single-02"></i>
                    <p>Domain</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#keywords" data-toggle="tab">
                    <i class="tim-icons icon-zoom-split"></i>
                    <p>Keywords</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#competitor" data-toggle="tab">
                    <i class="tim-icons icon-paper"></i>
                    <p>Competitor</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane show active" id="domain">
                <h5 class="info-text"> Let's start with the basic info (with validation)</h5>
                <div class="row justify-content-center mt-5">
                  <div class="col-sm-10">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-app"></i>
                        </div>
                      </div>
                      <input type="text" required name="name" class="form-control" placeholder="Project Name...">
                    </div>
                  </div>
                  <div class="col-sm-10">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-world"></i>
                        </div>
                      </div>
                      <input type="text" required name="domain" class="form-control" placeholder="Domain...">
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="keywords">
                <input type="hidden" name="keywords">
                <h5 class="info-text">Select keywords to track</h5>
                <div class="row justify-content-center">
                  <label class="col-sm-2 col-form-label">Suggested keywords</label>
                  <div class="col-lg-10 checkbox-radios suggested-keywords grid-container">
                    <table class="table table-striped">
                      <thead class="text-primary">
                        <tr>
                          <th class="text-center">
                            #
                          </th>
                          <th>
                            Keyword
                          </th>
                          <th class="text-center">
                            CPC
                          </th>
                          <th class="text-center">
                            Competition
                          </th>
                          <th class="text-center">
                            Search Volume
                          </th>
                        </tr>
                      </thead>
                      <tbody class="suggested-keywords">
                        <tr class="load-more">
                          <td colspan="4"></td>
                          <td class="text-center">
                            <button type="button" class="btn btn-sm">Load More</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="competitor">
                <input type="hidden" name="competitor">
                <div class="row justify-content-center">
                  <div class="col-sm-12">
                    <h5 class="info-text">Select Competitors.</h5>
                  </div>
                  <div class="col-sm-10">
                    <table class="table table-striped">
                      <thead class="text-primary">
                        <tr>
                          <th class="text-center">
                            #
                          </th>
                          <th>
                            Competitor
                          </th>
                        </tr>
                      </thead>
                      <tbody class="suggested-competitors">
                        <!-- <tr class="load-more">
                          <td colspan="4"></td>
                          <td class="text-center">
                            <button type="button" class="btn btn-sm">Load More</button>
                          </td>
                        </tr> -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="pull-right">
              <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
              <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
            </div>
            <div class="pull-left">
              <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
            </div>
            <div class="clearfix"></div>
          </div>
        </form>
      </div>
    </div>
    <!-- wizard container -->
  </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Initialise the wizard
      demo.initNowUiWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 60);
      $(document).on('click', '.load-more button', function() {
        const _token = "{{ csrf_token() }}";
        $('.spinner-container').show();
        const keywords_num = $('.keyword').length;
        let require_keywords = [];
        for(i = keywords_num; i < keywords_num + 25; i++) {
          require_keywords.push(window.keywords[i]);
        }
        $.ajax({
          url: '/exkeywords',
          method: 'POST',
          data: {
            _token: _token,
            keywords: require_keywords
          }
        })
        .done(function(response) {
          const result = JSON.parse(response);
          let newrows = '';
          for(i = 0; i < 25 || i < result['keywords'].length; i++) {
            const kwd = result['keywords'][i];
            if(result['related_keywords'][kwd]) {
              const { cpc, competition, search_volume } = result['related_keywords'][kwd];
              newrows += `
              <tr>
                <td class="text-center">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">
                      <span class="form-check-sign"></span>
                    </label>
                  </div>
                </td>
                <td>
                  ${kwd}
                </td>
                <td class="text-center">
                  ${cpc}
                </td>
                <td class="text-center">
                  ${competition}
                </td>
                <td class="text-center">
                  ${search_volume}
                </td>
              </tr>`;
            }
          }

          $(newrows).insertBefore('.load-more');
          $('.spinner-container').hide();
        });
      });
      $(document).on('click', '.btn-finish', function() {
        let keyword_list = [];
        let competitor_list = [];
        const selected_keywords = $('.suggested-keywords input:checked');
        const selected_competitors = $('.suggested-competitors input:checked');
        console.log(selected_keywords, selected_competitors)
        for(var i = 0; i < selected_keywords.length; i++) {
          keyword_list.push(selected_keywords.eq(i).closest('tr').find('span.keyword').text());
        }
        for(var i = 0; i < selected_competitors.length; i++) {
          competitor_list.push(selected_competitors.eq(i).closest('tr').find('span.competitor').text());
        }
        $('[name=keywords]').val(keyword_list.join(', '));
        $('[name=competitor]').val(competitor_list.join(', '));
      });
    });
  </script>
@endpush