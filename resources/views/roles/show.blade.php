@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('roles.index') }}">Roles</a>
        </li>
        <li class="breadcrumb-item">
            Ver Rol
        </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            @can('roles.create')
                <a class="btn" href="{{ route('roles.create') }}">
                    <i class="icon-plus"></i> Crear</a>
            @endcan
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
                            <p><strong>Nombre</strong>     {{ $role->name }}</p>
                            <p><strong>Slug</strong>     {{ $role->slug }}</p>
                            <p><strong>Descripción</strong>  {{ $role->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
