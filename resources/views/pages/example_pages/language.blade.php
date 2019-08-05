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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('black') }}/demo/demo.css" rel="stylesheet" />
</head>

<body class="sidebar-mini rtl menu-on-right">
  <div class="wrapper">
    <div class="navbar-minimize-fixed">
      <button class="minimize-sidebar btn btn-link btn-just-icon">
        <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
        <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
      </button>
    </div>
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            ط م
          </a>
          <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            توقيت الإبداعية
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="{{ route('home') }}">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>لوحة القيادة</p>
            </a>
          </li>
          <li>
            <a data-toggle="collapse" href="#pagesExamples">
              <i class="tim-icons icon-image-02"></i>
              <p>
                صفحات
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="pagesExamples">
              <ul class="nav">
                <li>
                  <a href="{{ route('page.pricing') }}">
                    <span class="sidebar-mini-icon">ع</span>
                    <span class="sidebar-normal"> التسعير </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.rtl-support') }}">
                    <span class="sidebar-mini-icon">صو</span>
                    <span class="sidebar-normal"> دعم رتل </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.timeline') }}">
                    <span class="sidebar-mini-icon">تي</span>
                    <span class="sidebar-normal"> الجدول الزمني </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.lock') }}">
                    <span class="sidebar-mini-icon">هذاع</span>
                    <span class="sidebar-normal"> اقفل الشاشة </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('profile.edit') }}">
                    <span class="sidebar-mini-icon">شع</span>
                    <span class="sidebar-normal"> ملف تعريفي للمستخدم </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#componentsExamples">
              <i class="tim-icons icon-molecule-40"></i>
              <p>
                المكونات
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="componentsExamples">
              <ul class="nav">
                <li>
                  <a data-toggle="collapse" aria-expanded="false" href="#multicollapse">
                    <span class="sidebar-mini-icon">ر</span>
                    <span class="sidebar-normal"> انهيار متعدد المستويات
                      <b class="caret"></b>
                    </span>
                  </a>
                  <div class="collapse" id="multicollapse">
                    <ul class="nav">
                      <li>
                        <a>
                          <span class="sidebar-mini-icon">ش</span>
                          <span class="sidebar-normal"> مثال </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a href="{{ route('page.buttons') }}">
                    <span class="sidebar-mini-icon">ب</span>
                    <span class="sidebar-normal"> وصفت </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.grid') }}">
                    <span class="sidebar-mini-icon">زو</span>
                    <span class="sidebar-normal"> نظام الشبكة </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.panels') }}">
                    <span class="sidebar-mini-icon">ع</span>
                    <span class="sidebar-normal"> لوحات </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.sweet-alert') }}">
                    <span class="sidebar-mini-icon">ومن</span>
                    <span class="sidebar-normal"> التنبيه الحلو </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.notifications') }}">
                    <span class="sidebar-mini-icon">ن</span>
                    <span class="sidebar-normal"> إخطارات </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.icons') }}">
                    <span class="sidebar-mini-icon">و</span>
                    <span class="sidebar-normal"> الرموز </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.typography') }}">
                    <span class="sidebar-mini-icon">ر</span>
                    <span class="sidebar-normal"> طباعة </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#formsExamples">
              <i class="tim-icons icon-notes"></i>
              <p>
                إستمارات
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="formsExamples">
              <ul class="nav">
                <li>
                  <a href="{{ route('page.regular_forms') }}">
                    <span class="sidebar-mini-icon">صو</span>
                    <span class="sidebar-normal"> أشكال منتظمة </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.extended_forms') }}">
                    <span class="sidebar-mini-icon">هوو</span>
                    <span class="sidebar-normal"> أشكال موسعة </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.validation_forms') }}">
                    <span class="sidebar-mini-icon">تو</span>
                    <span class="sidebar-normal"> نماذج التحقق </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.wizard_forms') }}">
                    <span class="sidebar-mini-icon">ث</span>
                    <span class="sidebar-normal"> ساحر </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#tablesExamples">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>
                الجداول
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="tablesExamples">
              <ul class="nav">
                <li>
                  <a href="{{ route('page.regular_tables') }}">
                    <span class="sidebar-mini-icon">صر</span>
                    <span class="sidebar-normal"> الجداول العادية </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.extended_tables') }}">
                    <span class="sidebar-mini-icon">هور</span>
                    <span class="sidebar-normal"> الجداول الموسعة </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.datatable_tables') }}">
                    <span class="sidebar-mini-icon">در</span>
                    <span class="sidebar-normal"> جداول البيانات صافي </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#mapsExamples">
              <i class="tim-icons icon-pin"></i>
              <p>
                خرائط
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="mapsExamples">
              <ul class="nav">
                <li>
                  <a href="{{ route('page.google_maps') }}">
                    <span class="sidebar-mini-icon">زم</span>
                    <span class="sidebar-normal"> خرائط جوجل </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.fullscreen_maps') }}">
                    <span class="sidebar-mini-icon">ووم</span>
                    <span class="sidebar-normal"> خريطة كاملة الشاشة </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.vector_maps') }}">
                    <span class="sidebar-mini-icon">تم</span>
                    <span class="sidebar-normal"> سهم التوجيه، الخريطة </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="{{ route('page.widgets') }}">
              <i class="tim-icons icon-settings"></i>
              <p>الحاجيات</p>
            </a>
          </li>
          <li>
            <a href="{{ route('page.charts') }}">
              <i class="tim-icons icon-chart-bar-32"></i>
              <p>الرسوم البيانية</p>
            </a>
          </li>
          <li>
            <a href="{{ route('page.calendar') }}">
              <i class="tim-icons icon-time-alarm"></i>
              <p>التقويم</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize d-inline">
              <button class="minimize-sidebar btn btn-link btn-just-icon" rel="tooltip" data-original-title="Sidebar toggle" data-placement="right">
                <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
                <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i>
              </button>
            </div>
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">RTL</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav  mr-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="{{ asset('black') }}/img/mike.jpg" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link">
                    <a href="{{ route('logout') }}" class="nav-item dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                  </li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-lg-6 col-sm-6 text-center">
            <div class="card  card-tasks text-left">
              <div class="card-header ">
                <h6 class="title d-inline">تتبع</h6>
                <p class="card-category d-inline">اليوم</p>
                <div class="dropdown">
                  <a class="btn btn-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="tim-icons icon-settings-gear-63"></i></a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">عمل</a>
                    <a class="dropdown-item" href="#">عمل آخر</a>
                    <a class="dropdown-item" href="#">شيء آخر هنا</a>
                  </div>
                </div>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="text-center">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td class="text-right">
                          <p class="title">مركز معالجة موقع محور</p>
                          <p class="text-muted">نص آخر هناالوثائق</p>
                        </td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="مهمة تحرير">
                            <i class="tim-icons icon-settings"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td class="text-right">
                          <p class="title">لامتثال GDPR</p>
                          <p class="text-muted">الناتج المحلي الإجمالي هو نظام يتطلب من الشركات حماية البيانات الشخصية والخصوصية لمواطني أوروبا بالنسبة للمعاملات التي تتم داخل الدول الأعضاء في الاتحاد الأوروبي.</p>
                        </td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="مهمة تحرير">
                            <i class="tim-icons icon-settings"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td class="text-right">
                          <p class="title">القضاياالقضايا</p>
                          <p class="text-muted">سيكونونقال 50٪ من جميع المستجيبين أنهم سيكونون أكثر عرضة للتسوق في شركة</p>
                        </td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="مهمة تحرير">
                            <i class="tim-icons icon-settings"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td class="text-right">
                          <p class="title">تصدير الملفات التي تمت معالجتها</p>
                          <p class="text-muted">كما يبين التقرير أن المستهلكين لن يغفروا شركة بسهولة بمجرد حدوث خرق يعرض بياناتهم الشخصية.</p>
                        </td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="مهمة تحرير">
                            <i class="tim-icons icon-settings"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td class="text-right">
                          <p class="title">الوصول إلى عملية التصدير</p>
                          <p class="text-muted">سياسة السيء إنطلاق في قبل, مساعدة والمانيا أخذ قد. بل أما أمام ماشاء الشتاء،, تكاليف الإقتصادي بـ حين. ٣٠ يتعلّق للإتحاد ولم, وتم هناك مدينة بتحدّي إذ, كان بل عمل</p>
                        </td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="مهمة تحرير">
                            <i class="tim-icons icon-settings"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td class="text-right">
                          <p class="title">الافراج عن v2.0.0</p>
                          <p class="text-muted">عن رئيس طوكيو البولندي لمّ, مايو مرجع وباءت قبل هو, تسمّى الطريق الإقتصادي ذات أن. لغات الإطلاق الفرنسية دار ان, بين بتخصيص الساحة اقتصادية أم. و الآخ</p>
                        </td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="مهمة تحرير">
                            <i class="tim-icons icon-settings"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="card card-contributions">
              <div class="card-body ">
                <h1 class="card-title">6,332</h1>
                <h3 class="card-category">مجموع المساهمات العامة </h3>
                <p class="card-description">بعد نجاح ناجح لمدة عامين ، سنقوم بتغيير طريقة عمل المساهمات.</p>
              </div>
              <hr>
              <div class="card-footer ">
                <div class="row">
                  <div class="col-lg-6 col-md-9 ml-auto mr-auto">
                    <div class="card-stats justify-content-center">
                      <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="على" data-off-label="إيقاف" checked>
                      <span>جميع المساهمات العامة </span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-9 ml-auto mr-auto">
                    <div class="card-stats justify-content-center">
                      <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="على" data-off-label="إيقاف">
                      <span>مساهمات الأسبوع الماضي </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="card card-timeline card-plain">
              <div class="card-body">
                <ul class="timeline timeline-simple">
                  <li class="timeline-inverted">
                    <div class="timeline-badge danger">
                      <i class="tim-icons icon-bag-16"></i>
                    </div>
                    <div class="timeline-panel text-right">
                      <div class="timeline-heading">
                        <span class="badge badge-pill badge-danger">بعض العنوان </span>
                      </div>
                      <div class="timeline-body">
                        <p>ل Wifey قدم أفضل وجبة يوم الأب على الإطلاق. ممتن جدا سعيد جدا حتى المباركة. شكراً لك على صنع عائلتي لقد استمتعنا بالموضوع "المستقبلي" !!! كانت ليلة ممتعة معًا ...</p>
                      </div>
                      <h6>
                        <i class="ti-time"></i> قبل ساعتين عبر تويتر
                      </h6>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge success">
                      <i class="tim-icons icon-gift-2"></i>
                    </div>
                    <div class="timeline-panel text-right">
                      <div class="timeline-heading">
                        <span class="badge badge-pill badge-success">واحدة أخرى </span>
                      </div>
                      <div class="timeline-body">
                        <p>أشكر الله على دعم زوجتي وأصدقائي الحقيقيين. أود أيضًا الإشارة إلى أنه أول ألبوم ينتقل إلى رقم 1 من البث المباشر !!! أنا أحبك إلين وأيضا قاعدة بلدي رقم واحد تصميم أي شيء أفعله من الأحذية إلى الموسيقى إلى المنازل.</p>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge info">
                      <i class="tim-icons icon-planet"></i>
                    </div>
                    <div class="timeline-panel text-right">
                      <div class="timeline-heading">
                        <span class="badge badge-pill badge-info">عنوان آخر</span>
                      </div>
                      <div class="timeline-body">
                        <p>يطلق عليه أنا أفتقد كاني القديم هذا كل ما كان كاني وأنا أحبك مثل كانيي يحب كاني الشهير مشاهدة فيجويروا والثاني عشر في وسط المدينة LA 11:10 PM</p>
                        <p>ماذا لو قدمت كاني أغنية عن كاني رويير لا تصنع سرير الدب القطبي ولكن الأريكة الدببة القطبية هي قطعة الأثاث المفضلة لدينا التي نملكها. لم يكن أي مجموعة من على أهدافه كاني
                        </p>
                        <hr>
                      </div>
                      <div class="timeline-footer">
                        <div class="dropdown">
                          <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                            <i class="tim-icons icon-bullet-list-67"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">عمل</a>
                            <a class="dropdown-item" href="#">عمل آخر</a>
                            <a class="dropdown-item" href="#">شيء آخر هنا</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="card card-pricing card-primary">
              <div class="card-body">
                <h1 class="card-title">طليعة</h1>
                <img class="card-img" src="{{ asset('black') }}/img/card-primary.png" alt="Card image">
                <ul class="list-group">
                  <li class="list-group-item">300 رسائل</li>
                  <li class="list-group-item">150 رسائل البريد الإلكتروني
                  </li>
                  <li class="list-group-item">24/7 الدعم
                  </li>
                </ul>
                <div class="card-prices">
                  <h3 class="text-on-front">
                    <span>$</span>95</h3>
                  <h5 class="text-on-back">95</h5>
                  <p class="plan">خطة مهنية</p>
                </div>
              </div>
              <div class="card-footer text-center mb-3 mt-3">
                <button class="btn btn-round btn-just-icon btn-primary">البدء</button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-pricing card-primary card-white">
              <div class="card-body">
                <h1 class="card-title">طليعة</h1>
                <img class="card-img" src="{{ asset('black') }}/img/card-primary.png" alt="Card image">
                <ul class="list-group">
                  <li class="list-group-item">300 رسائل</li>
                  <li class="list-group-item">150 رسائل البريد الإلكتروني
                  </li>
                  <li class="list-group-item">24/7 الدعم
                  </li>
                </ul>
                <div class="card-prices">
                  <h3 class="text-on-front">
                    <span>$</span>95</h3>
                  <h5 class="text-on-back">95</h5>
                  <p class="plan">خطة مهنية</p>
                </div>
              </div>
              <div class="card-footer text-center mb-3 mt-3">
                <button class="btn btn-round btn-just-icon btn-primary">البدء</button>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-testimonial">
              <div class="card-header card-header-avatar">
                <a href="#pablo">
                  <img class="img img-raised" src="{{ asset('black') }}/img/james.jpg" alt="Card image">
                </a>
              </div>
              <div class="card-body ">
                <p class="card-description">
                  إن التشبيك في قمة الويب لا يشبه أي مؤتمر تقني أوروبي آخر.
                </p>
                <div class="icon icon-primary">
                  <i class="fa fa-quote-right"></i>
                </div>
              </div>
              <div class="card-footer ">
                <h4 class="card-title">روبرت بريسن</h4>
                <p class="category">@خطةطليعة</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
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
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js


    });
  </script>
</body>

</html>