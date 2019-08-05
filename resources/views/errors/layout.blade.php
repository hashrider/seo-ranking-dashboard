<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('black') }}/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('black') }}/img/favicon.png">
  <title>
    Black Dashboard PRO by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset('black') }}/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('black') }}/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('black') }}/demo/demo.css" rel="stylesheet" />
</head>
      <body class="{{ $class ?? '' }}">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @include('layouts.page_templates.guest')
        
        <div class="fixed-plugin">
            <div class="dropdown show-dropdown">
              <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
              </a>
              <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Background</li>
                <li class="adjustments-line">
                  <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
                      <span class="badge filter badge-primary active" data-color="primary"></span>
                      <span class="badge filter badge-info" data-color="blue"></span>
                      <span class="badge filter badge-success" data-color="green"></span>
                      <span class="badge filter badge-warning" data-color="orange"></span>
                      <span class="badge filter badge-danger" data-color="red"></span>
                    </div>
                    <div class="clearfix"></div>
                  </a>
                </li>
                <li class="header-title">
                  Sidebar Mini
                </li>
                <li class="adjustments-line">
                  <div class="togglebutton switch-sidebar-mini">
                    <span class="label-switch">OFF</span>
                    <input type="checkbox" name="checkbox" checked class="bootstrap-switch" data-on-label="" data-off-label="" />
                    <span class="label-switch label-right">ON</span>
                  </div>
                  <div class="togglebutton switch-change-color mt-3">
                    <span class="label-switch">LIGHT MODE</span>
                    <input type="checkbox" name="checkbox" checked class="bootstrap-switch" data-on-label="" data-off-label="" />
                    <span class="label-switch label-right">DARK MODE</span>
                  </div>
                </li>
                <li class="button-container mt-4">
                  <a href="../../docs/1.0/getting-started/introduction.html" class="btn btn-default btn-block btn-round">
                    Documentation
                  </a>
                </li>
                <li class="header-title">Thank you for 95 shares!</li>
                <li class="button-container text-center">
                  <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
                  <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
                  <br>
                  <br>
                  <a class="github-button" href="https://github.com/creativetimofficial/ct-black-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                </li>
              </ul>
            </div>
          </div>

        
        <!--   Core JS Files   -->
        <script src="{{ asset('black') }}/js/core/jquery.min.js"></script>
        
        <!--   Core JS Files   -->
        <script src="{{ asset('black') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('black') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('black') }}/js/core/bootstrap.min.js"></script>
        <script src="{{ asset('black') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <script src="{{ asset('black') }}/js/plugins/moment.min.js"></script>
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="{{ asset('black') }}/js/plugins/bootstrap-switch.js"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="{{ asset('black') }}/js/plugins/sweetalert2.min.js"></script>
        <!--  Plugin for Sorting Tables -->
        <script src="{{ asset('black') }}/js/plugins/jquery.tablesorter.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{ asset('black') }}/js/plugins/jquery.validate.min.js"></script>
        <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{ asset('black') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{ asset('black') }}/js/plugins/bootstrap-selectpicker.js"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('black') }}/js/plugins/bootstrap-datetimepicker.js"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
        <script src="{{ asset('black') }}/js/plugins/jquery.dataTables.min.js"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{ asset('black') }}/js/plugins/bootstrap-tagsinput.js"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{ asset('black') }}/js/plugins/jasny-bootstrap.min.js"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="{{ asset('black') }}/js/plugins/fullcalendar.min.js"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="{{ asset('black') }}/js/plugins/jquery-jvectormap.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{ asset('black') }}/js/plugins/nouislider.min.js"></script>
        <!--  Google Maps Plugin    -->
        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chart JS -->
        <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('black') }}/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('black') }}/js/black-dashboard.min.js?v=1.0.0"></script>
        <!-- Black Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('black') }}/demo/demo.js"></script>
        <script src="{{ asset('black') }}/js/settings.js"></script>
        <script>
          $(document).ready(function () {
            @if (session('status'))
              $.notify({
                icon: "tim-icons icon-check-2",
                message: "{{ session('status') }}"
              }, {
                type: 'success',
                timer: 3000,
                placement: {
                  from: 'top',
                  align: 'right'
                }
              });
            @endif
          });
        </script>
        @stack('js')
        
</body>

</html>