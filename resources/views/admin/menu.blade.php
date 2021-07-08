<li class="nav-item">
    <a class="nav-link {{ Request::is('home*') ? 'active' : '' }}" href="{{ route('home') }}">
        <i class="nav-icon icon-speedometer"></i> Dashboard
        <span class="badge badge-primary"></span>
    </a>
</li>

<li class="nav-item nav-dropdown {{ Request::is('groups*') ? 'open' : '' }}
                                 {{ Request::is('levels*') ? 'open' : '' }}
                                 {{ Request::is('categories*') ? 'open' : '' }}
                                 {{ Request::is('teachers*') ? 'open' : '' }}
                                 {{ Request::is('curses*') ? 'open' : '' }}
                                 {{ Request::is('students*') ? 'open' : '' }}
                                 {{ Request::is('materials*') ? 'open' : '' }}
                                 ">
    <a class="nav-link nav-dropdown-toggle" href="">
    <i class="nav-icon icon-graduation"></i> Academico</a>
    <ul class="nav-dropdown-items">
        @can('schools.index')
            <li class="nav-item {{ Request::is('schools*') ? 'active' : '' }}">
                <a class="nav-link" href="{!! route('schools.index') !!}">
                    <i class="nav-icon icon-home"></i>
                    <span>Colegios</span>
                </a>
            </li>
        @endcan
        @can('groups.index')
            <li class="nav-item {{ Request::is('groups*') ? 'active' : '' }}">
                <a class="nav-link" href="{!! route('groups.index') !!}">
                    <i class="nav-icon icon-list"></i>
                    <span>Grupos</span>
                </a>
            </li>
        @endcan
        @can('levels.index')
            <li class="nav-item {{ Request::is('levels*') ? 'active' : '' }}">
                <a class="nav-link" href="{!! route('levels.index') !!}">
                    <i class="nav-icon icon-layers"></i>
                    <span>Niveles</span>
                </a>
            </li>
        @endcan

        @can('categories.index')
            <li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
                <a class="nav-link" href="{!! route('categories.index') !!}">
                    <i class="nav-icon icon-book-open"></i>
                    <span>Categorías</span>
                </a>
            </li>
        @endcan

        @can('teachers.index')
            <li class="nav-item {{ Request::is('teachers*') ? 'active' : '' }}">
                <a class="nav-link" href="{!! route('teachers.index') !!}">
                    <i class="nav-icon icon-eyeglass"></i>
                    <span>Profesores</span>
                </a>
            </li>
        @endcan

        @can('courses.index')
            <li class="nav-item {{ Request::is('courses*') ? 'active' : '' }}">
                <a class="nav-link" href="{!! route('courses.index') !!}">
                    <i class="nav-icon icon-notebook"></i>
                    <span>Clases</span>
                </a>
            </li>
        @endcan

        @can('students.index')
            <li class="nav-item {{ Request::is('students*') ? 'active' : '' }}">
                <a class="nav-link" href="{!! route('students.index') !!}">
                    <i class="nav-icon icon-graduation"></i>
                    <span>Alumnos</span>
                </a>
            </li>
        @endcan

        @can('materials.index')
            <li class="nav-item {{ Request::is('materials*') ? 'active' : '' }}">
                <a class="nav-link" href="{!! route('materials.index') !!}">
                    <i class="nav-icon icon-puzzle"></i>
                    <span>Materiales</span>
                </a>
            </li>
        @endcan
    </ul>
</li>



<li class="nav-item nav-dropdown {{ Request::is('roles*') ? 'open' : '' }}
                                 {{ Request::is('users*') ? 'open' : '' }}
                                 {{ Request::is('permissions*') ? 'open' : '' }}
                                 ">
    <a class="nav-link nav-dropdown-toggle" href="">
    <i class="nav-icon icon-settings"></i> Herramientas</a>
    {{-- <ul class="nav-dropdown-items"> --}}
        @can('roles.index')
            <li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">
                <a class="nav-link" href="{!! route('roles.index') !!}">
                    <i class="nav-icon icon-mustache"></i>
                    <span>Roles</span>
                </a>
            </li>
        @endcan
        {{-- @if(auth()->user()->hasPermissionTo('users.index') == 1) --}}
        @can('users.index')
            <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
                <a class="nav-link" href="{!! route('users.index') !!}">
                    <i class="nav-icon icon-people"></i>
                    <span>Usuarios</span>
                </a>
            </li>
        @endcan
        {{-- @endif --}}

        @can('permissions.index')
            <li class="nav-item {{ Request::is('permissions*') ? 'active' : '' }}">
                <a class="nav-link" href="{!! route('permissions.index') !!}">
                    <i class="nav-icon icon-lock"></i>
                    <span>Permisos</span>
                </a>
            </li>
        @endcan

        @can('homepage.index')
            <li class="nav-item {{ Request::is('homepage*') ? 'active' : '' }}">
                <a class="nav-link" href="{!! route('homepage.index') !!}">
                    <i class="nav-icon icon-globe"></i>
                    <span>Página de Inicio</span>
                </a>
            </li>
        @endcan

    {{-- </ul> --}}
    <li class="nav-item">
      <a class="nav-link" href="https://www.paypal.me/therobotcenter" target="_blank">
          <i class="nav-icon icon-paypal"></i>
          <span>Pagar Online</span>
      </a>
    </li>
</li>


{{--
    <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="nav-icon icon-speedometer"></i> Dashboard
                <span class="badge badge-primary">NEW</span>
              </a>
            </li>
            <li class="nav-title">Theme</li>
            <li class="nav-item">
              <a class="nav-link" href="colors.html">
                <i class="nav-icon icon-drop"></i> Colors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="typography.html">
                <i class="nav-icon icon-pencil"></i> Typography</a>
            </li>
            <li class="nav-title">Components</li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-puzzle"></i> Base</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="base/breadcrumb.html">
                    <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/cards.html">
                    <i class="nav-icon icon-puzzle"></i> Cards</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/carousel.html">
                    <i class="nav-icon icon-puzzle"></i> Carousel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/collapse.html">
                    <i class="nav-icon icon-puzzle"></i> Collapse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/forms.html">
                    <i class="nav-icon icon-puzzle"></i> Forms</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/jumbotron.html">
                    <i class="nav-icon icon-puzzle"></i> Jumbotron</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/list-group.html">
                    <i class="nav-icon icon-puzzle"></i> List group</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/navs.html">
                    <i class="nav-icon icon-puzzle"></i> Navs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/pagination.html">
                    <i class="nav-icon icon-puzzle"></i> Pagination</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/popovers.html">
                    <i class="nav-icon icon-puzzle"></i> Popovers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/progress.html">
                    <i class="nav-icon icon-puzzle"></i> Progress</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/scrollspy.html">
                    <i class="nav-icon icon-puzzle"></i> Scrollspy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/switches.html">
                    <i class="nav-icon icon-puzzle"></i> Switches</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/tables.html">
                    <i class="nav-icon icon-puzzle"></i> Tables</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/tabs.html">
                    <i class="nav-icon icon-puzzle"></i> Tabs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/tooltips.html">
                    <i class="nav-icon icon-puzzle"></i> Tooltips</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-cursor"></i> Buttons</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="buttons/buttons.html">
                    <i class="nav-icon icon-cursor"></i> Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buttons/button-group.html">
                    <i class="nav-icon icon-cursor"></i> Buttons Group</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buttons/dropdowns.html">
                    <i class="nav-icon icon-cursor"></i> Dropdowns</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buttons/brand-buttons.html">
                    <i class="nav-icon icon-cursor"></i> Brand Buttons</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="charts.html">
                <i class="nav-icon icon-pie-chart"></i> Charts</a>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-star"></i> Icons</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="icons/coreui-icons.html">
                    <i class="nav-icon icon-star"></i> CoreUI Icons
                    <span class="badge badge-success">NEW</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icons/flags.html">
                    <i class="nav-icon icon-star"></i> Flags</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icons/font-awesome.html">
                    <i class="nav-icon icon-star"></i> Font Awesome
                    <span class="badge badge-secondary">4.7</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icons/simple-line-icons.html">
                    <i class="nav-icon icon-star"></i> Simple Line Icons</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-bell"></i> Notifications</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="notifications/alerts.html">
                    <i class="nav-icon icon-bell"></i> Alerts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="notifications/badge.html">
                    <i class="nav-icon icon-bell"></i> Badge</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="notifications/modals.html">
                    <i class="nav-icon icon-bell"></i> Modals</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="widgets.html">
                <i class="nav-icon icon-calculator"></i> Widgets
                <span class="badge badge-primary">NEW</span>
              </a>
            </li>
            <li class="divider"></li>
            <li class="nav-title">Extras</li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-star"></i> Pages</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="login.html" target="_top">
                    <i class="nav-icon icon-star"></i> Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.html" target="_top">
                    <i class="nav-icon icon-star"></i> Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="404.html" target="_top">
                    <i class="nav-icon icon-star"></i> Error 404</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="500.html" target="_top">
                    <i class="nav-icon icon-star"></i> Error 500</a>
                </li>
              </ul>
            </li>
            <li class="nav-item mt-auto">
              <a class="nav-link nav-link-success" href="https://coreui.io" target="_top">
                <i class="nav-icon icon-cloud-download"></i> Download CoreUI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
                <i class="nav-icon icon-layers"></i> Try CoreUI
                <strong>PRO</strong>
              </a>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div> --}}
