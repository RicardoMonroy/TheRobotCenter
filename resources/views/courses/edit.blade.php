@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('courses.index') }}">Curso</a>
        </li>
        <li class="breadcrumb-item">
            Edición
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
                        <div class="card-header">Editar
                            <div class="card-header-actions">
                                {{-- <a class="card-header-action btn-setting" href="{{ route('schools.excel') }}">
                                    <i class="icon-cloud-download"></i> Descargar</a> --}}
                                @can('schools.create')
                                    <a class="card-header-action btn-setting" href="{{ route('courses.create') }}">
                                        <i class="icon-plus"></i> Crear</a>
                                @endcan
                            </div>
                        </div>
                        <div class="card-body">
                            {!! Form::model($course, ['route' => ['courses.update', $course->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                                @include('courses.partials.form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
