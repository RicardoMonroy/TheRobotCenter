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
        {{-- <div class="btn-group" role="group" aria-label="Button group">
            @can('courses.create')
                <a class="btn" href="{{ route('courses.create') }}">
                    <i class="icon-plus"></i> Crear</a>
            @endcan
        </div> --}}
        </li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Ver
                            <div class="card-header-actions">
                                {{-- <a class="card-header-action btn-setting" href="{{ route('schools.excel') }}">
                                    <i class="icon-cloud-download"></i> Descargar</a> --}}
                                @can('schools.edit')
                                    <a class="card-header-action btn-setting" href="{{ route('courses.edit', $course->id) }}">
                                        <i class="icon-pencil"></i> Editar</a>
                                @endcan
                                @can('schools.create')
                                    <a class="card-header-action btn-setting" href="{{ route('courses.create') }}">
                                        <i class="icon-plus"></i> Crear</a>
                                @endcan
                            </div>
                        </div>
                        <div class="card-body">
                            <p><strong>Código de curso: </strong>     {{ $course->code }}</p>
                            <p><strong>Nombre: </strong>     {{ $course->name }}</p>
                            <p><strong>Descripción: </strong>     {{ $course->description }}</p>
                            <p><strong>Materiales a utilizar: </strong><br>
                                <ul>
                                    @foreach ($materials as $material)
                                        <li>{{ $material->name }} - {{ !empty($material->description) ? $material->description:'Este material no tiene descripción' }}</li>    
                                    @endforeach                                    
                                </ul>
                            
                            </p>
                            <p><strong>Portada:</strong>  <img src="{{ $course->picture }}" alt="{{ $course->name }}"></p>
                            <p><strong>Contenido del curso:</strong>  {!! $course->editor !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

