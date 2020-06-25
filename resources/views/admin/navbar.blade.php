<button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="{{ url('/') }}">
    <img class="navbar-brand-full" src="{{ asset('dashboard/img/brand/logo.png') }}" width="89" height="25" alt="CoreUI Logo">
    <img class="navbar-brand-minimized" src="{{ asset('dashboard/img/brand/sygnet.svg') }}" width="30" height="30" alt="CoreUI Logo">
</a>
<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
    <span class="navbar-toggler-icon"></span>
</button>
<ul class="nav navbar-nav ml-auto">
    <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">
            <i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">0</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="{{ asset('dashboard/img/avatars/6.jpg') }}" alt="admin@bootstrapmaster.com">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            {{-- <div class="dropdown-header text-center">
                <strong>Cuenta</strong>
            </div> --}}
            {{-- <a class="dropdown-item" href="#">
                <i class="fa fa-bell-o"></i> Perfil
                <span class="badge badge-info"></span>
            </a>
            <a class="dropdown-item" href="#">
                <i class="fa fa-envelope-o"></i> Messages
                <span class="badge badge-success">42</span>
            </a>
            <a class="dropdown-item" href="#">
                <i class="fa fa-tasks"></i> Tasks
                <span class="badge badge-danger">42</span>
            </a>
            <a class="dropdown-item" href="#">
                <i class="fa fa-comments"></i> Comments
                <span class="badge badge-warning">42</span>
            </a> --}}
            <div class="dropdown-header text-center">
                <strong>Settings</strong>
            </div>
            <a class="dropdown-item" href="#">
                <i class="fa fa-user"></i> {{ auth()->user()->name }}
            </a>
            <a class="dropdown-item" href="#">
                {{-- @foreach ($roles as $rol)
                    <i class="fa fa-wrench"></i> {{ $rol->name }}
                @endforeach --}}
            </a>
            
                {{-- <i class="fa fa-wrench"></i> Rol: --}}
                
            <div class="dropdown-divider"></div>
            {{-- <a class="dropdown-item" href="#">
                <i class="fa fa-shield"></i> Lock Account
            </a> --}}
            <a class="dropdown-item" href="{!! url('/logout') !!}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-lock"></i> Logout
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </li>
</ul>
{{-- <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
    <span class="navbar-toggler-icon"></span>
</button>
<button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
    <span class="navbar-toggler-icon"></span>
</button> --}}
