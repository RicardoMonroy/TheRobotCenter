@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('users.index') }}">Usuarios</a>
        </li>
        <li class="breadcrumb-item">
            Ver Usuario
        </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            {{-- @can('users.create') --}}
                <a class="btn" href="{{ route('users.create') }}">
                    <i class="icon-plus"></i> Crear</a>
            {{-- @endcan --}}
        </div>
        </li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Crear
                        </div>
                        <div class="card-body">
                            <p><strong>Nombre</strong>     {{ $user->name }}</p>
                            <p><strong>Email</strong>  {{ $user->email }}</p>
                            <p><strong>Acceso a dashobard</strong>  {{ $user->dashboard }}</p>
                            <p><strong>Rol: </strong>
                            @foreach ($roles as $rol)
                                {{ $rol->name }}
                            @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
