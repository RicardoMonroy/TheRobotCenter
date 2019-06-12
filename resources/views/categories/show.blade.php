@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('categories.index') }}">Categoría</a>
        </li>
        <li class="breadcrumb-item">
            Ver Categoría
        </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            @can('categories.create')
                <a class="btn" href="{{ route('categories.create') }}">
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
                            <p><strong>ID: </strong>     {{ $category->id }}</p>
                            <p><strong>Nombre: </strong>     {{ $category->name }}</p>
                            <p><strong>Descripción: </strong>  {{ $category->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
