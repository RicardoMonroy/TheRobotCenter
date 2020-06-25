@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        Homepage
    </li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
    <div class="btn-group" role="group" aria-label="Button group">
        @can('homepage.edit')
            <a class="btn" href="{{ route('homepage.edit', $page) }}">
                <i class="icon-pencil"></i> Editar</a>
        @endcan
    </div>
    </li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        @if (session('info'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('info') }}
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Página de inicio
                    </div>
                    <div class="card-body">
                        <h5>Texto del primer Slide</h5>
                        <p><strong>Cabecera: </strong> {{ $page->firstTitle }}   </p>
                        <p><strong>Título: </strong> {{ $page->firstCopy }}   </p>
                        <p><strong>Explicación: </strong> {{ $page->firstText }}   </p>
                        <br>
                        <h5>Texto del segundo Slide</h5>
                        <p><strong>Cabecera: </strong> {{ $page->secondTitle }}   </p>
                        <p><strong>Título: </strong> {{ $page->secondCopy }}   </p>
                        <p><strong>Explicación: </strong> {{ $page->secondText }}   </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
