<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.12
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="TheRobotCenter Admin Webpage">
    <meta name="author" content="Ricardo Monroy">
    <meta name="keyword" content="">
    <title>The Robot Center Dashboard</title>
    <!-- Icons-->
    <link href="{{ asset('dashboard/node_modules/@coreui/icons/css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/node_modules/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/node_modules/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/node_modules/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
    {{-- DataTables --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">   
    
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
        @include('admin.navbar')
    </header>
    <div class="app-body">
        @include('admin.sidebar')
        <main class="main">
            @yield('content')
        </main>
        <aside class="aside-menu">
            @include('admin.aside')
        </aside>
    </div>
    <footer class="app-footer">
        @include('admin.footer')
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('dashboard/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/pace-progress/pace.min.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/@coreui/coreui/dist/js/coreui.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script src="{{ asset('dashboard/vendors/ckeditor/ckeditor.js') }}"></script>
    {{-- <script>
        CKEDITOR.config.height = 400;
        CKEDITOR.config.width = 'auto';

        CKEDITOR.replace('editor');
    </script> --}}

    {{-- <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> --}}
    <script>
            var options = {
              filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
              filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
              filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
              filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            };
    </script>
    <script>
      CKEDITOR.replace('editor', options);
    </script>

    <script>
      $(document).ready(function() {
        $('#schools').DataTable({
          "language": {
            "info": "_TOTAL_ registros",
            "search": "Buscar",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            },
            "lengthMenu": 'Mostrar <select class="form-control">'+'<option value="10">10</option>'+
                                             '<option value="25">25</option>'+
                                             '<option value="50">50</option>'+
                                             '<option value="100">100</option>'+
                                             '<option value="-1">Todos</option>'+
                                             '</select> registros',
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "infoEmpty": "Ningún registro",
            "infoFiltered": "encontrados"

          }
        });
      } );
    </script>

    <script>
      $(document).ready(function() {
        $('#groups').DataTable({
          "language": {
            "info": "_TOTAL_ registros",
            "search": "Buscar",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            },
            "lengthMenu": 'Mostrar <select class="form-control">'+'<option value="10">10</option>'+
                                             '<option value="25">25</option>'+
                                             '<option value="50">50</option>'+
                                             '<option value="100">100</option>'+
                                             '<option value="-1">Todos</option>'+
                                             '</select> registros',
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "infoEmpty": "Ningún registro",
            "infoFiltered": "encontrados"

          }
        });
      } );
    </script>

    <script>
      $(document).ready(function() {
        $('#levels').DataTable({
          "language": {
            "info": "_TOTAL_ registros",
            "search": "Buscar",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            },
            "lengthMenu": 'Mostrar <select class="form-control">'+'<option value="10">10</option>'+
                                             '<option value="25">25</option>'+
                                             '<option value="50">50</option>'+
                                             '<option value="100">100</option>'+
                                             '<option value="-1">Todos</option>'+
                                             '</select> registros',
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "infoEmpty": "Ningún registro",
            "infoFiltered": "encontrados"

          }
        });
      } );
    </script>

    <script>
      $(document).ready(function() {
        $('#categories').DataTable({
          "language": {
            "info": "_TOTAL_ registros",
            "search": "Buscar",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            },
            "lengthMenu": 'Mostrar <select class="form-control">'+'<option value="10">10</option>'+
                                             '<option value="25">25</option>'+
                                             '<option value="50">50</option>'+
                                             '<option value="100">100</option>'+
                                             '<option value="-1">Todos</option>'+
                                             '</select> registros',
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "infoEmpty": "Ningún registro",
            "infoFiltered": "encontrados"

          }
        });
      } );
    </script>

    <script>
      $(document).ready(function() {
        $('#teachers').DataTable({
          "language": {
            "info": "_TOTAL_ registros",
            "search": "Buscar",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            },
            "lengthMenu": 'Mostrar <select class="form-control">'+'<option value="10">10</option>'+
                                             '<option value="25">25</option>'+
                                             '<option value="50">50</option>'+
                                             '<option value="100">100</option>'+
                                             '<option value="-1">Todos</option>'+
                                             '</select> registros',
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "infoEmpty": "Ningún registro",
            "infoFiltered": "encontrados"

          }
        });
      } );
    </script>

    <script>
      $(document).ready(function() {
        $('#clases').DataTable({
          "language": {
            "info": "_TOTAL_ registros",
            "search": "Buscar",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            },
            "lengthMenu": 'Mostrar <select class="form-control">'+'<option value="10">10</option>'+
                                             '<option value="25">25</option>'+
                                             '<option value="50">50</option>'+
                                             '<option value="100">100</option>'+
                                             '<option value="-1">Todos</option>'+
                                             '</select> registros',
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "infoEmpty": "Ningún registro",
            "infoFiltered": "encontrados"

          }
        });
      } );
    </script>

    <script>
      $(document).ready(function() {
        $('#students').DataTable({
          "language": {
            "info": "_TOTAL_ registros",
            "search": "Buscar",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            },
            "lengthMenu": 'Mostrar <select class="form-control">'+'<option value="10">10</option>'+
                                             '<option value="25">25</option>'+
                                             '<option value="50">50</option>'+
                                             '<option value="100">100</option>'+
                                             '<option value="-1">Todos</option>'+
                                             '</select> registros',
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "infoEmpty": "Ningún registro",
            "infoFiltered": "encontrados"

          }
        });
      } );
    </script>

    <script>
      $(document).ready(function() {
        $('#users').DataTable({
          "language": {
            "info": "_TOTAL_ registros",
            "search": "Buscar",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            },
            "lengthMenu": 'Mostrar <select class="form-control">'+'<option value="10">10</option>'+
                                             '<option value="25">25</option>'+
                                             '<option value="50">50</option>'+
                                             '<option value="100">100</option>'+
                                             '<option value="-1">Todos</option>'+
                                             '</select> registros',
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "infoEmpty": "Ningún registro",
            "infoFiltered": "encontrados"

          }
        });
      } );
    </script>

    <script>
      $(document).ready(function() {
        $('#permissions').DataTable({
          "language": {
            "info": "_TOTAL_ registros",
            "search": "Buscar",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            },
            "lengthMenu": 'Mostrar <select class="form-control">'+'<option value="10">10</option>'+
                                             '<option value="25">25</option>'+
                                             '<option value="50">50</option>'+
                                             '<option value="100">100</option>'+
                                             '<option value="-1">Todos</option>'+
                                             '</select> registros',
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "infoEmpty": "Ningún registro",
            "infoFiltered": "encontrados"

          }
        });
      } );
    </script>

    <script>
      $(document).ready(function() {
        $('#roles').DataTable({
          "language": {
            "info": "_TOTAL_ registros",
            "search": "Buscar",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            },
            "lengthMenu": 'Mostrar <select class="form-control">'+'<option value="10">10</option>'+
                                             '<option value="25">25</option>'+
                                             '<option value="50">50</option>'+
                                             '<option value="100">100</option>'+
                                             '<option value="-1">Todos</option>'+
                                             '</select> registros',
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "infoEmpty": "Ningún registro",
            "infoFiltered": "encontrados"

          }
        });
      } );
    </script>

  </body>
</html>
