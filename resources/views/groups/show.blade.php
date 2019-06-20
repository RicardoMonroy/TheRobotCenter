@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('groups.index') }}">Grupos</a>
        </li>
        <li class="breadcrumb-item">
            Ver grupo
        </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            @can('groups.create')
                <a class="btn" href="{{ route('groups.create') }}">
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
                            <p><strong>ID: </strong>     {{ $group->id }}</p>
                            <p><strong>Nombre: </strong>     {{ $group->name }}</p>
                            <p><strong>Escuela: </strong>     {{ $group->school->name }}</p>
                            <p><strong>Nivel: </strong>  {{ $group->level->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
