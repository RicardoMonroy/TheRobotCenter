@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('courses.index') }}">Cursos</a>
        </li>
        <li class="breadcrumb-item">
            Ver
        </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            @can('courses.create')
                <a class="btn" href="{{ route('courses.create') }}">
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
                            <p><strong>Nombre: </strong>     {{ $course->name }}</p>
                            <p><strong>Descripción: </strong>     {{ $course->description }}</p>
                            <p><strong>Portada:</strong>  {{ $course->picture }}</p>
                            <p><strong>PREGUNTAR:</strong>  {{ $course->section_one }}</p>
                            <p><strong>DISEÑAR O CONSTRUIR:</strong>  {{ $course->section_two }}</p>
                            <p><strong>ANALIZAR:</strong>  {{ $course->section_tree }}</p>
                            <p><strong>INNOVAR:</strong>  {{ $course->section_four }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

