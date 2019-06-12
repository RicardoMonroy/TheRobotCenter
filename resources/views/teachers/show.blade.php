@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('teachers.index') }}">Profesor</a>
        </li>
        <li class="breadcrumb-item">
            Ver
        </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            @can('teachers.create')
                <a class="btn" href="{{ route('teachers.create') }}">
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
                            <p><strong>ID: </strong>     {{ $teacher->id }}</p>
                            <p><strong>Título: </strong>     {{ $teacher->title }}</p>
                            <p><strong>Nombre: </strong>     {{ $teacher->user->name }}</p>
                            <p><strong>Biografía: </strong>  {{ $teacher->biography }}</p>
                            <p><strong>Website URL: </strong>  {{ $teacher->website_url }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
