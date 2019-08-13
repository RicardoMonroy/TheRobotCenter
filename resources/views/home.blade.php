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
             <div class="row">..
                {{-- <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe> --}}
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Lista de cambios
                        </div>
                        <div class="card-body">
                            <li>13 Agosto - Homepage - Se aplicaron los filtros para que profesores vean solo sus clases</li>
                            <li>13 Agosto - BackOffice - Se actualizó la parte de alta de profesores; se pueden asignar clases a cada profcesor</li>
                            <li>11 Agosto - Homepage - Se hicieron modificaciones a la lógica de navegacionen cursos. Se aplicaron filtros por profesor, estudiante y administrativo</li>
                            <li>10 Agosto - Homepage - Se arregló el problema de visualización de menú en dispositivos pequeños (se añadió un menú lateral)</li>
                            <li>8 Agosto - BackOffice - Actualización de vista en los grupos (se puede ver a detalle cada grupo con clases y alumnos)</li>
                            <li>7 Agosto - BackOffice - Altas de alumnos de forma automática por listas de excel por colegios</li>
                            <li>4 Agosto - BackOffice - Importación de usuarios por medio de Excel</li>
                            <li>4 Agosto - BackOffice - Altas de Alumnos, relaciones con escuelas y grupos</li>
                            <li>3 Agosto - BackOffice - Se perfeccionaron las tablas en todas las secciones, se cuenta con filtrado y busquedas</li>
                            <li>2 Agosto - BackOffice - Se añadió al menú la parte correspondiente a Alumnos (Altas, bajas, edición, eliminar)</li>
                            <li>2 Agosto - HomePage - Arreglado el problema de las imágenes</li>
                            <li>2 Agosto - Database - Se arreglaron los registros correspondientes a las imagenes de cursos, escuelas y editor de cursos</li>
                            <li>1 Agosto - BackOffice - Gestión de Colegios/Grupos/Cursos</li>
                            <li>1 Agosto - Homepage - Vistas filtradas para Colegios/Grupos/Cursos</li>
                            <li>31 julio - Homepage - Se reemplazó cursos por grupos al seleccionar el colegio (se trabaja en la conexión con la base de datos) </li>
                            <li>26 julio - Homepage - Textos de sliders de página principal sincronizados con la base de datos </li>
                            <li>25 julio - BackOffice - Administración de homepage (editar textos de sliders de página principal) </li>
                            <li>25 julio - BackOffice - Se añadió campó para ID de cursos </li>
                            <br>
                            <li>23 julio - Homepage - Se cambió "Cursos" por "Colegios" con su respectivo contenido</li> 
                            <li>20 julio - BackOffice - Se puede adjuntar PDF en el editor de cursos por medio del icono de "inservar vínculo"</li>
                            <li>20 julio - BackOffice - Se arregló el problema del almacenamiento de las imágenes en el editor de cursos</li>
                            <br>
                            <h6>Pendientes por hacer:</h6>
                            <li>Habilitar espacio para dar de alta en cursos el material que se debe utilizar. Ej: Robot EV3, Robot Wedo 1.0, Robot Wedo 2.0, Neumática. </li>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
