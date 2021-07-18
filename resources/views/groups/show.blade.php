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
        {{-- <div class="btn-group" role="group" aria-label="Button group">
            @can('groups.create')
                <a class="btn" href="{{ route('groups.create') }}">
                    <i class="icon-plus"></i> Crear</a>
            @endcan
        </div> --}}
        </li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Ver
                            <div class="card-header-actions">
                                <a class="card-header-action btn-setting" href="{{ route('users.upload') }}">
                                    <i class="icon-arrow-up-circle"></i> Subir un Excel</a>
                                {{-- @can('schools.create') --}}
                                    <a class="card-header-action btn-setting" href="{{ route('groups.create') }}">
                                        <i class="icon-plus"></i> Crear</a>
                                {{-- @endcan --}}
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- <p><strong>ID: </strong>     {{ $group->id }}</p> --}}
                            <p><strong>Nombre: </strong>     {{ $group->name }}</p>
                            <p><strong>Escuela: </strong>     {{ !empty($group->school->name) ? $group->school->name:'' }}</p>
                            <p><strong>Nivel: </strong>  {{ !empty($group->level->name) ? $group->level->name:'' }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="col-md-12 col-sm-12">
                                <p>Este grupo tiene las siguientes clases</p>
                                @foreach($courses as $course)
                                    <p>{{ $course->code }} - {{ $course->name }}</p>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Alumnos
                                <div class="card-header-actions">
                                    {{-- <a class="card-header-action btn-setting" href="{{ route('users.upload') }}">
                                        <i class="icon-arrow-up-circle"></i> Subir un Excel</a>
                                    @can('schools.create')
                                        <a class="card-header-action btn-setting" href="{{ route('groups.create') }}">
                                            <i class="icon-plus"></i> Crear</a>
                                    @endcan --}}
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Este grupo tiene los siguientes alumnos</p>
                                    @foreach($students as $student)
                                        <p>{{ $student->user->name }}</p>
                                    @endforeach
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
