@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('materials.index') }}">Material</a>
        </li>
        <li class="breadcrumb-item">
            Ver Material
        </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
        {{-- <div class="btn-group" role="group" aria-label="Button group">
            @can('materials.create')
                <a class="btn" href="{{ route('materials.create') }}">
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
                                @can('schools.create')
                                    <a class="card-header-action btn-setting" href="{{ route('materials.create') }}">
                                        <i class="icon-plus"></i> Crear</a>
                                @endcan
                            </div>
                        </div>
                        <div class="card-body">
                            <p><strong>ID: </strong>     {{ $material->id }}</p>
                            <p><strong>Nombre: </strong>     {{ $material->name }}</p>
                            <p><strong>Descripción: </strong>  {{ $material->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

