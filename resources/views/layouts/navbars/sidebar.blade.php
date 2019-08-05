<div class="navbar-minimize-fixed">
  <button class="minimize-sidebar btn btn-link btn-just-icon">
    <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
    <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
  </button>
</div>
<div class="sidebar" data="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
-->
  <div class="sidebar-wrapper">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          {{ __('CT') }}
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          {{ __('Creative Tim') }}
        </a>
    </div>
    <ul class="nav">
      <li class="{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a href="{{ route('home') }}">
          <i class="tim-icons icon-chart-pie-36"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="{{ ($menuParent == 'laravel' || $activePage == 'dashboard') ? ' active' : '' }}">
        <a data-toggle="collapse" href="#laravelExamples" >
          <i class="fab fa-laravel"></i>
          <p>
            {{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($menuParent == 'laravel' || $activePage == 'dashboard') ? ' show' : '' }}" id="laravelExamples">
          <ul class="nav">
            <li class="{{ $activePage == 'profile' ? ' active' : '' }}">
              <a href="{{ route('profile.edit') }}">
                <span class="sidebar-mini-icon">UP</span>
                <span class="sidebar-normal"> {{ __('User profile') }} </span>
              </a>
            </li>
            @can('manage-users', App\User::class)
            <li class="{{ $activePage == 'role-management' ? ' active' : '' }}">
              <a href="{{ route('role.index') }}">
                <span class="sidebar-mini-icon">RM</span>
                <span class="sidebar-normal"> {{ __('Role Management') }} </span>
              </a>
            </li>
            @endcan
            @can('manage-users', App\User::class)
            <li class="{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a href="{{ route('user.index') }}">
                <span class="sidebar-mini-icon">UM</span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
            @endcan
            @can('manage-items', App\User::class)
            <li class="{{ $activePage == 'category-management' ? ' active' : '' }}">
              <a href="{{ route('category.index') }}">
                <span class="sidebar-mini-icon">CM</span>
                <span class="sidebar-normal"> {{ __('Category Management') }} </span>
              </a>
            </li>
            @endcan
            @can('manage-items', App\User::class)
            <li class="{{ $activePage == 'tag-management' ? ' active' : '' }}">
              <a href="{{ route('tag.index') }}">
                <span class="sidebar-mini-icon">TM</span>
                <span class="sidebar-normal"> {{ __('Tag Management') }} </span>
              </a>
            </li>
            @endcan
            @can('manage-items', App\User::class)
              <li class="{{ $activePage == 'item-management' ? ' active' : '' }}">
                <a href="{{ route('item.index') }}">
                  <span class="sidebar-mini-icon">IM</span>
                  <span class="sidebar-normal"> {{ __('Item Management') }} </span>
                </a>
              </li>
            @else
              <li class="{{ $activePage == 'item-management' ? ' active' : '' }}">
                <a href="{{ route('item.index') }}">
                  <span class="sidebar-mini-icon"> IM </span>
                  <span class="sidebar-normal"> {{ __('Items') }} </span>
                </a>
              </li>
            @endcan
          </ul>
        </div>
      </li>
      <li class="{{ $menuParent == 'pages' ? 'active' : '' }}">
        <a data-toggle="collapse" href="#pagesExamples">
          <i class="tim-icons icon-image-02"></i>
          <p>
            {{ __('Pages') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ $menuParent == 'pages' ? ' show' : '' }}" id="pagesExamples">
          <ul class="nav">
            <li>
              <a href="{{ route('page.pricing') }}">
                <span class="sidebar-mini-icon">P</span>
                <span class="sidebar-normal"> {{ __('Pricing') }} </span>
              </a>
            </li>
            <li>
              <a href="{{ route('page.rtl-support') }}">
                <span class="sidebar-mini-icon">RS</span>
                <span class="sidebar-normal"> {{ __('RTL Support') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'timeline' ? ' active' : '' }}">
              <a href="{{ route('page.timeline') }}">
                <span class="sidebar-mini-icon">T</span>
                <span class="sidebar-normal"> {{ __('Timeline') }} </span>
              </a>
            </li>
            <li>
              <a href="{{ route('page.lock') }}">
                <span class="sidebar-mini-icon">LS</span>
                <span class="sidebar-normal"> {{ __('Lock Screen') }} </span>
              </a>
            </li>
            <li>
              <a href="{{ route('profile.edit') }}">
                <span class="sidebar-mini-icon">UP</span>
                <span class="sidebar-normal"> {{ __('User Profile') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="{{ $menuParent == 'compoments' ? 'active' : '' }}" {{ $menuParent == 'components' ? 'aria-expanded="true"' : '' }}>
        <a data-toggle="collapse" href="#componentsExamples">
          <i class="tim-icons icon-molecule-40"></i>
          <p>
            {{ __('My Account') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ $menuParent == 'components' ? ' show' : '' }}" id="componentsExamples">
          <ul class="nav">
            <li class="{{ $activePage == 'project-management' ? ' active' : '' }}">
              <a href="{{ route('project.index') }}">
                <span class="sidebar-mini-icon">P</span>
                <span class="sidebar-normal"> {{ __('Projects') }} </span>
              </a>
            </li>
            <li>
              <a data-toggle="collapse" aria-expanded="false" href="#multicollapse">
                <span class="sidebar-mini-icon">MLT</span>
                <span class="sidebar-normal"> {{ __('Multi Level Collapse') }}
                  <b class="caret"></b>
                </span>
              </a>
              <div class="collapse" id="multicollapse">
                <ul class="nav">
                  <li>
                    <a>
                      <span class="sidebar-mini-icon">E</span>
                      <span class="sidebar-normal"> {{ __('Example') }} </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="{{ $activePage == 'buttons' ? ' active' : '' }}">
              <a href="{{ route('page.buttons') }}">
                <span class="sidebar-mini-icon">B</span>
                <span class="sidebar-normal"> {{ __('Buttons') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'grid' ? ' active' : '' }}">
              <a href="{{ route('page.grid') }}">
                <span class="sidebar-mini-icon">G</span>
                <span class="sidebar-normal"> {{ __('Grid System') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'panels' ? ' active' : '' }}">
              <a href="{{ route('page.panels') }}">
                <span class="sidebar-mini-icon">P</span>
                <span class="sidebar-normal"> {{ __('Panels') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'sweet-alert' ? ' active' : '' }}">
              <a href="{{ route('page.sweet-alert') }}">
                <span class="sidebar-mini-icon">SA</span>
                <span class="sidebar-normal"> {{ __('Sweet Alert') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'notifications' ? ' active' : '' }}">
              <a href="{{ route('page.notifications') }}">
                <span class="sidebar-mini-icon">N</span>
                <span class="sidebar-normal"> {{ __('Notifications') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'icons' ? ' active' : '' }}">
              <a href="{{ route('page.icons') }}">
                <span class="sidebar-mini-icon">I</span>
                <span class="sidebar-normal"> {{ __('Icons') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'typography' ? ' active' : '' }}">
              <a href="{{ route('page.typography') }}">
                <span class="sidebar-mini-icon">T</span>
                <span class="sidebar-normal"> {{ __('Typography') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="{{ $menuParent == 'forms' ? ' active' : '' }}">
        <a data-toggle="collapse" href="#formsExamples" {{ $menuParent == 'forms' ? 'aria-expanded="true"' : '' }}>
          <i class="tim-icons icon-notes"></i>
          <p>
            {{ __('Forms') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ $menuParent == 'forms' ? 'show' : '' }}" id="formsExamples">
          <ul class="nav">
            <li class="{{ $activePage == 'form_regular' ? ' active' : '' }}">
              <a href="{{ route('page.regular_forms') }}">
                <span class="sidebar-mini-icon">RF</span>
                <span class="sidebar-normal"> {{ __('Regular Forms') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'form_extended' ? ' active' : '' }}">
              <a href="{{ route('page.extended_forms') }}">
                <span class="sidebar-mini-icon">EF</span>
                <span class="sidebar-normal"> {{ __('Extended Forms') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'form_validation' ? ' active' : '' }}">
              <a href="{{ route('page.validation_forms') }}">
                <span class="sidebar-mini-icon">V</span>
                <span class="sidebar-normal"> {{ __('Validation Forms') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'form_wizard' ? ' active' : '' }}">
              <a href="{{ route('page.wizard_forms') }}">
                <span class="sidebar-mini-icon">W</span>
                <span class="sidebar-normal"> {{ __('Wizard') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="{{ $menuParent == 'tables' ? 'active' : '' }}">
        <a data-toggle="collapse" href="#tablesExamples" {{ $menuParent == 'tables' ? 'aria-expanded="true"' : '' }}>
          <i class="tim-icons icon-puzzle-10"></i>
          <p>
            {{ __('Tables') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ $menuParent == 'tables' ? 'show' : '' }}" id="tablesExamples">
          <ul class="nav">
            <li class="{{ $activePage == 'regular' ? ' active' : '' }}">
              <a href="{{ route('page.regular_tables') }}">
                <span class="sidebar-mini-icon">RT</span>
                <span class="sidebar-normal"> {{ __('Regular Tables') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'extended' ? ' active' : '' }}">
              <a href="{{ route('page.extended_tables') }}">
                <span class="sidebar-mini-icon">ET</span>
                <span class="sidebar-normal"> {{ __('Extended Tables') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'datatables' ? ' active' : '' }}">
              <a href="{{ route('page.datatable_tables') }}">
                <span class="sidebar-mini-icon">DT</span>
                <span class="sidebar-normal"> {{ __('DataTables.net') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="{{ $menuParent == 'maps' ? 'active' : '' }}">
        <a data-toggle="collapse" href="#mapsExamples" {{ $menuParent == 'maps' ? 'aria-expanded="true"' : '' }}>
          <i class="tim-icons icon-pin"></i>
          <p>
            {{ __('Maps') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ $menuParent == 'maps' ? 'show' : '' }}" id="mapsExamples">
          <ul class="nav">
            <li class="{{ $activePage == 'google_maps' ? ' active' : '' }}">
              <a href="{{ route('page.google_maps') }}">
                <span class="sidebar-mini-icon">GM</span>
                <span class="sidebar-normal"> {{ __('Google Maps') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'fullscreen_maps' ? ' active' : '' }}">
              <a href="{{ route('page.fullscreen_maps') }}">
                <span class="sidebar-mini-icon">FM</span>
                <span class="sidebar-normal"> {{ __('Full Screen Map') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'vector_maps' ? ' active' : '' }}">
              <a href="{{ route('page.vector_maps') }}">
                <span class="sidebar-mini-icon">VM</span>
                <span class="sidebar-normal"> {{ __('Vector Map') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="{{ $activePage == 'widgets' ? ' active' : '' }}">
        <a href="{{ route('page.widgets') }}">
          <i class="tim-icons icon-settings"></i>
          <p>{{ __('Widgets') }}</p>
        </a>
      </li>
      <li class="{{ $activePage == 'charts' ? ' active' : '' }}">
        <a href="{{ route('page.charts') }}">
          <i class="tim-icons icon-chart-bar-32"></i>
          <p>{{ __('Charts') }}</p>
        </a>
      </li>
      <li class="{{ $activePage == 'calendar' ? ' active' : '' }}">
        <a href="{{ route('page.calendar') }}">
          <i class="tim-icons icon-time-alarm"></i>
          <p>{{ __('Calendar') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>