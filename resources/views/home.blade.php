@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    {{-- <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Dashboard</li> --}}
    <!-- Breadcrumb Menu-->
    {{-- <li class="breadcrumb-menu d-md-down-none">
    <div class="btn-group" role="group" aria-label="Button group">
        <a class="btn" href="#">
            <i class="icon-speech"></i>
        </a>
        <a class="btn" href="./">
            <i class="icon-graph"></i>  Dashboard</a>
        <a class="btn" href="#">
            <i class="icon-settings"></i>  Settings</a>
    </div>
    </li> --}}
</ol>
<div class="container-fluid">
        <div class="animated fadeIn">
             <div class="row">
                {{-- <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe> --}}
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Lista de cambios
                        </div>
                        <div class="card-body">
                            <li>26 julio - Homepage - Textos de sliders de página principal sincronizados con la base de datos </li>
                            <li>25 julio - BackOffice - Administración de homepage (editar textos de sliders de página principal) </li>
                            <li>25 julio - BackOffice - Se añadió campó para ID de cursos </li>
                            <br>
                            <li>23 julio - Homepage - Se cambió "Cursos" por "Colegios" con su respectivo contenido</li> 
                            <li>20 julio - BackOffice - Se puede adjuntar PDF en el editor de cursos por medio del icono de "inservar vínculo"</li>
                            <li>20 julio - BackOffice - Se arregló el problema del almacenamiento de las imágenes en el editor de cursos</li>
                            <br>
                            <h6>Pendientes por hacer:</h6>
                            <li>Alta de alumnos en grupos </li>
                            <li>Habilitar espacio para dar de alta en cursos el material que se debe utilizar. Ej: Robot EV3, Robot Wedo 1.0, Robot Wedo 2.0, Neumática. </li>
                            <li>Habilitar un buscador de clases </li>
                            <li>Altas de alumnos de forma automática por listas de excel por colegios </li>
                            <li>Gestión de Colegios-cursos </li>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
