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
                            Preguntas Frecuentes
                        </div>
                        <div class="card-body">
                            <div class="accordion" id="accordionExample">
                                {{-- <div class="card" style="margin-bottom: 0rem;">
                                  <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Cambiar Passwords o datos de usuario
                                      </button>
                                    </h2>
                                  </div>
                              
                                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                      Para cambiar información relacionada con los usuarios debe ir al menú <b>Herramientas</b> -> <b> Usuarios</b> y buscar al usuario que quiere editar. 
                                      Busque el ícono editar <button class="btn btn-sm btn-success"><i class="icon-pencil"></i></button> y a continuación dar click. Rellenar la información y dar click en <b>Guardar</b>
                                      <br>
                                      Importante: <b>Dejar el campo de password en blando si NO se desea cambiar la contraseña.</b>
                                    </div>
                                  </div>
                                </div> --}}
                                <div class="card" style="margin-bottom: 0rem;">
                                  <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Crear un usuario
                                      </button>
                                    </h2>
                                  </div>
                                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                Para crear un usuario existen 3 formas: <br><br>
                                                <b>1.- El usuario se registra por si mismo:</b> En la página principal existen las opciones de "Logín" y "Registro". Al acceder al Registro el usuario introduce sus datos. Por default
                                                el usuario creado no cuenta con acceso al dashboard administrativo, previo a su registro un administrador debe otorgarle permisos. <br><br>
                                                <b>2.- Un administrador da de alta a un usuario: </b> Para que un administrador pueda crear un usuario, debe ir al menú <b>Herramientas</b> -> <b> Usuarios</b> y buscar
                                                el botón <button class="card-header-action btn-setting"><i class="icon-plus"></i> Crear un usuario</button> y al dar click se deben llenar los datos que pide el formulario,
                                                a continuación dar click en <b>guardar</b>. <br><br>
                                                <b>3.- Importar una colección de usuarios mediante Excel: </b> Para importar una lista de usuarios desde Excel, debe ir al menú <b>Herramientas</b> -> <b> Usuarios</b> y buscar
                                                el botón <button class="card-header-action btn-setting"><i class="icon-arrow-up-circle"></i> Subir un Excel</button> y al dar click se deben seguir las instrucciones; se debe tener el
                                                archivo de excel con su respectivo formato, y finalmente dar click en <b>Subir</b>. Esta última opción crea los usuarios, da de alta a los usuarios como alumnos, y los
                                                distribuye a sus grupos y colegios correspondientes.
                                            </div>
                                            <div class="col-md-4">
                                                <img src="{{ asset('help/Menu-Herramientas-Usuarios.gif') }} " alt="" width="100%">
                                            </div>   
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="card" style="margin-bottom: 0rem;">
                                  <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Cambiar Passwords o datos de usuario
                                      </button>
                                    </h2>
                                  </div>
                                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                      Para cambiar información relacionada con los usuarios debe ir al menú <b>Herramientas</b> -> <b> Usuarios</b> y buscar al usuario que quiere editar. 
                                      Busque el ícono editar <button class="btn btn-sm btn-success"><i class="icon-pencil"></i></button> y a continuación dar click. Rellenar la información y dar click en <b>Guardar</b>
                                      <br>
                                      Importante: <b>Dejar el campo de password en blando si NO se desea cambiar la contraseña.</b> <br><br>
                                      <img src="{{ asset('help/ActualizarPassword.gif') }} " width="100%">
                                    </div>
                                  </div>
                                </div>
                              </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Lista de cambios
                        </div>
                        <div class="card-body">
                            <b>
                                <li>2 Nov - Backend - Se habilitó el cambio de password para usuarios</li>
                                <li>2 nov - Backend - Se añadió una sección de preguntas frecuentes con pequeños tutoriales</li>
                            </b>
                            <li>14 Octubre - Backend - Pruebas para los perfiles de usuarios</li>
                            <li>14 Octubre - FrontEnd - Modificaciones en perfiles de usuarios (ver el rol de cada usuario)</li>
                            <li>28 Septiembre - BackEnd - Se añadieron listas ordenadas alfabeticamente al momento de crear alumnos, grupos, profesores</li>
                            <li>25 Septiembre - BackEnd - Se revisó a fondo el algoritmo de importacion de usuarios/alumnos/grupos de Excel a la plataforma</li>
                            <li>31 Agosto - Global - Se habilitó el servidor de correo para restablecimiento de passwords</li>
                            <li>17 Agosto - Homepage - Se trabajó en la página del curso para visualizar la lista de materiales</li>
                            <li>17 Agosto - BackOffice - Se realizaron las actualizaciones para relacionar cursos con materiales</li>
                            <li>16 Agosto - BackOffice - Se creó la lógica de los materiales para las clases y se implementó en la base de datos</li>
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
                            <li>Trabajar en la lógica para implementar ciclos escolares (cada colegio tiene sus respectivos ciclos)</li>
                            <li>Implementar en el Dashboard una sección para recibir los requerimientos de forma directa (requerimientos al programador)</li>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
