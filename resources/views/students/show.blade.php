@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('students.index') }}">Alumno</a>
        </li>
        <li class="breadcrumb-item">
            Ver
        </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            @can('students.create')
                <a class="btn" href="{{ route('students.create') }}">
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
                            {{-- <p><strong>ID: </strong>     {{ $student->id }}</p> --}}
                            <p><strong>Nombre: </strong>     {{ $student->name }}</p>
                            <p><strong>Código de acceso: </strong>     {{ $student->code }}</p>
                            <p><strong>Colegio: </strong>  {{ !empty($student->school->name) ? $student->school->name:'' }}</p>
                            <p><strong>Grupo: </strong>  {{ !empty($student->group->name) ? $student->group->name:'' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
