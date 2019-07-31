@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('schools.index') }}">Colegios</a>
        </li>
        <li class="breadcrumb-item">
            Ver colegio
        </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            @can('schools.create')
                <a class="btn" href="{{ route('schools.create') }}">
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
                            <p><img src="{{ $school->picture }}" alt="{{ $school->name }}" class="img-responsive" width="150"></p>
                            {{-- <p><strong>ID: </strong>     {{ $school->id }}</p> --}}
                            <p><strong>Nombre: </strong>     {{ $school->name }}</p>
                            <p><strong>Dirección: </strong>  {{ $school->address }}</p>
                            <p><strong>Teléfono: </strong>  {{ $school->phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
