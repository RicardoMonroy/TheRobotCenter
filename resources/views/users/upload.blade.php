@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('users.index') }}">Usuarios</a>
        </li>
        <li class="breadcrumb-item">
            Creación
        </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            {{-- @can('users.create') --}}
                <a class="btn" href="{{ route('users.create') }}">
                    <i class="icon-plus"></i> Crear</a>
            {{-- @endcan --}}
        </div>
        </li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Subir un archivo de Excel
                        </div>
                        <div class="card-body">
                            <p>Para subir un arhchivo de Excel, debe asegurarse de tener una hoja electrónica de Excel con 3 columnas:</p>
                            <table class="table table-responsive-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Colegio</th>
                                        <th>Grupo</th>
                                        <th>Código interno</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nombre completo</td>
                                        <td>ejemplo@escuela.com</td>
                                        <td>PassdordSecreto</td>
                                        <td>Nombre del Colegio</td>
                                        <td>Grupo</td>
                                        <td>Código</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>El archivo no debe tener encabezados, quedando únicamente los datos de los usuarios que se quieren importar:</p>
                            <table class="table table-responsive-sm table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Nombre completo 1</td>
                                        <td>ejemplo1@escuela.com</td>
                                        <td>PassdordSecreto1</td>
                                        <td>Colegio 1</td>
                                        <td>Grupo 1</td>
                                        <td>Codigo 1</td>
                                    </tr>
                                    <tr>
                                        <td>Nombre completo 2</td>
                                        <td>ejemplo2@escuela.com</td>
                                        <td>PassdordSecreto2</td>
                                        <td>Colegio 2</td>
                                        <td>Grupo 2</td>
                                        <td>Codigo 2</td>
                                    </tr>
                                    <tr>
                                        <td>Nombre completo 3</td>
                                        <td>ejemplo3@escuela.com</td>
                                        <td>PassdordSecreto3</td>
                                        <td>Colegio 3</td>
                                        <td>Grupo 3</td>
                                        <td>Codigo 3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <form action="{{ route('users.import.excel') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file"><br><br>
                                <button type="submit">Importar usuarios</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
