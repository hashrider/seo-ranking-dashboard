@extends('layouts.app', ['activePage' => 'project-management', 'menuParent' => 'components', 'titlePage' => __('Project Management')])

@section('content')
<div class="content">
  <div class="col-md-10 mr-auto ml-auto">
    <!--      Wizard container        -->
    <div class="wizard-container">
      <div class="card card-wizard" data-color="primary" id="wizardProfile">
        <form>
          <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
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
                  <a class="nav-link" href="#account" data-toggle="tab">
                    <i class="tim-icons icon-zoom-split"></i>
                    <p>Keywords</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#address" data-toggle="tab">
                    <i class="tim-icons icon-paper"></i>
                    <p>Save</p>
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
              <div class="tab-pane" id="account">
                <h5 class="info-text">Select keywords to track</h5>
                <div class="row justify-content-center">
                  <label class="col-sm-2 col-form-label">Suggested keywords</label>
                  <div class="col-lg-10 checkbox-radios suggested-keywords grid-container">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="address">
                <div class="row justify-content-center">
                  <div class="col-sm-12">
                    <h5 class="info-text"> Save new project. </h5>
                  </div>
                  <div class="col-sm-10">
                    <div class="form-group">
                      <label>Project Name</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="pull-right">
              <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
              <input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
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
    });
  </script>
@endpush