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
                                  <div class="card-header" id="headingZero">
                                    <h2 class="mb-0">
                                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
                                        Crear una clase con video en Google Drive
                                      </button>
                                    </h2>
                                  </div>
                                  <div id="collapseZero" class="collapse" aria-labelledby="headingZero" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                Pasos para crear y embeber un video almacenado en Google Drive: <br><br>
                                                <b>1.- Crear un nuevo curso:</b> Esto en la sección de <b>Herramientas / Usuarios</b> <br><br>
                                                <img src="{{ asset('help/drive/1.Crear.gif') }} " width="100%"><br><br>
                                                <b>2.- Llenar los datos básocos: </b>  Tales como el código de la clase, el nombre de la clase y la descripción <br><br>
                                                <img src="{{ asset('help/drive/2.Basicos.gif') }} " width="100%"><br><br>
                                                <b>3.- Elección de una protada: </b> Es importante, ya que le da al curso una imágen más profesional <br><br>
                                                <img src="{{ asset('help/drive/3.Portada.gif') }} " width="100%"><br><br>
                                                <b>4.- Preparar nuestro editor: </b> Aquí va el contenido del curso con contenidos visuales y texto formateado <br><br>
                                                <img src="{{ asset('help/drive/4.Editor.gif') }} " width="100%"><br><br>
                                                <b>5.- Preparar enlace en Drive: </b> Aquí va el contenido del curso con contenidos visuales y texto formateado: Se debe: <br>
                                                  <ul>
                                                    <li>Elegir el archivo a compartir</li>
                                                    <li>Dar click secundario en el video y seleccionar  <b>+ Obtener enlace para compartir</b> </li>
                                                    <li>En el cuadro de diálogo, en la sección de obtener enlace, cambiar el permispo actual por: <b>Cualquier persona con el enlace</b> *Es importante <b>no copiar </b> el enlace de ese cuadro de diálogo, eso se hará más adelante. Dar click en <b>Aceptar</b></li>
                                                  </ul> <br>
                                                <img src="{{ asset('help/drive/5.Enlace.gif') }} " width="100%"><br><br>
                                                <b>6.- Obtener el código de inserción de video: </b> Este código es el que utilizaremos para añadirlo a nuestra clase, para ello ya que preparamos los permisos en el enlace de nuestro video: <br>
                                                  <ul>
                                                    <li>Damos doble click al archivo de video (para previsualizarlo)</li>
                                                    <li>En la primer vista previa del video buscamos el menú punteado en la esquina superior derecha y al seleccionarlo buscamos la opción de <b>Abrir en una nueva ventana</b> </li>
                                                    <li>Al obtener la segunda vista previa del video, buscamos nuevamente el menú punteado en la esquina superior derecha (a un lado de nuesto avatar), y seleccionamos la opción de <b>Insertar elemento</b> </li>
                                                    <li>Copiamos el código que se encuentra dentro del cuadro de diálogo</li>
                                                    <li>Listo, tenemos todo listo para incrustarlo en nuestro editor de cursos</li>
                                                  </ul><br>
                                                <img src="{{ asset('help/drive/6.iframe.gif') }} " width="100%"><br><br>
                                                <b>7.- Insertar el código: </b> Ya que tenemos el código de inserción, vamos a nuestro editor en la plataforma de TheRobotCenter, debemos: <br>
                                                  <ul>
                                                    <li>Tener claro en que parte del curso queremos instertar el video</li>
                                                    <li>Cambiar de tipo de editor de texto enriquecido a HTML, esto se hace en el botón <b>Fuente HTML</b> que se encuentra en la esquina superior derecha de nuestro editor </li>
                                                    <li>Al tener nuestro curso en version de etiquetas en HTML, simplemente pegamos el código que obtuvimos en Drive de Google</li>
                                                    <li>Podemos regresar a la vista normal presionando nuevamente el botón de <b>Fuente HTML</b></li>
                                                  </ul><br>
                                                <img src="{{ asset('help/drive/7.Insertar.gif') }} " width="100%"><br><br>
                                                <b>8.- Guardamos nuestro curso: </b> Recuerda que si el curso lo requiere, se debe seleccionar algún elemento de la lista de materiales <br><br>
                                                <img src="{{ asset('help/drive/8.Guardar.gif') }} " width="100%"><br><br>
                                                <b>9.- (Opcional) Ver y asignar la nueva clase: </b> Podemos verificar que la clase esté verdaderamente listo mediante el Dashboard Administrativo, o directamente desde la página principal ya que fué añadido a un grupo o a un profesor, esta tarea se hace de la siguiente forma: <br>
                                                  <ul>
                                                    <li><b>Por el Dashboard Administrativo:</b> En la página de listado de clases, presionar en el botón de <b>ver</b></li>
                                                    <img src="{{ asset('help/drive/9.VerDashboard.gif') }} " width="100%"><br><br>
                                                    <li><b>Por La página principal:</b> En la página principal ir a la sección de <b>Mis Clases</b> y seleccionar de la lista el curso</li>
                                                    <img src="{{ asset('help/drive/11.VerPlataforma.gif') }} " width="100%"><br><br>
                                                    <li><b>Si se desea asignar la clase a un profesor:</b> Debemos hacer lo siguiente: <br>
                                                      <ul>
                                                        <li>Ir a la sección de <b>Académico/Profesores</b></li>
                                                        <li><b>Asignar</b> un nuevo profesor o <b>editar</b> un profesor existente</li>
                                                        <li>En la lista de clases existentes, buscar la clase que se desea asignar al profesor para su visualización en la página principal</li>
                                                        <li>Guardar</li>
                                                      </ul> 
                                                    </li>
                                                    <img src="{{ asset('help/drive/10.Profesor.gif') }} " width="100%"><br><br>
                                                  </ul> <br><br>
                                            </div>
                                             
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="card" style="margin-bottom: 0rem;">
                                    <div class="card-header" id="headingOne">
                                      <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                          Asignar un rol a un usuario
                                        </button>
                                      </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  Pasos para asignar un rol a un usuario: <br><br>
                                                  <b>1.- Elige al usuario a quine se le asignara un rol:</b> Esto en la sección de <b>Herramientas / Usuarios</b> <br><br>
                                                  <b>2.- (Opcional) Ver el rol que tiene el usuario: </b> Una vez encontrado el usuario dar click en el botón de vista <button class="btn btn-sm btn-primary"><i class="icon-eye"></i></button> y al dar click se 
                                                  mostrará la información del usuario <br><br>
                                                  <b>3.- Asignar un rol: </b> Presionar el botón de edición <button class="btn btn-sm btn-success"><i class="icon-pencil"></i></button> y llenar en la parte de <b>Lista de roles</b> el rol que le 
                                                  corresponda. Cada rol tiene una descripción. Luego de ello dar click en <b>Guardar</b><br><br>
                                                  <img src="{{ asset('help/Rol-Usuarios.gif') }} " width="100%">
                                              </div>
                                               
                                          </div>
                                      </div>
                                    </div>
                                  </div>
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
                              <li>25 Junio - FrontEnd - Se creó la documentacion para seguir lo pasos para añadir correctamente videos desde Google Drive</li>
                              <li>25 Junio - BackEnd - Se añadió un plugin para preparar la inserción de videos desde Google Drive</li>
                              <li>1 Junio - FrontEnd - Se añadió la opción de pago mediante PayPal en el menú lateral</li>
                            </b>
                            <li>11 Dic - Backend - Se restringieron permisos a usuarios profesores para impedir eliminar</li>
                            <li>10 Dic - FrontEnd - Se añadió un baner y se elimino el baner de curso de verano</li>
                            <li>2 Nov - Backend - Se habilitó el cambio de password para usuarios</li>
                            <li>2 nov - Backend - Se añadió una sección de preguntas frecuentes con pequeños tutoriales</li>
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
