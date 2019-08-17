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
            Edición
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
                        <div class="card-header">Editar
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
                            {!! Form::model($material, ['route' => ['materials.update', $material->id],
                                'method' => 'PUT']) !!}
                                @include('materials.partials.form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
