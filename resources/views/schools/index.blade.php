@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        Colegios
    </li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
    {{-- <div class="btn-group" role="group" aria-label="Button group">
        @can('schools.create')
            <a class="btn" href="{{ route('schools.create') }}">
                <i class="icon-plus"></i> Crear</a>
        @endcan
    </div> --}}
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
                    <div class="card-header">Escuelas
                        <div class="card-header-actions">
                            <a class="card-header-action btn-setting" href="{{ route('users.upload') }}">
                                <i class="icon-arrow-up-circle"></i> Subir un Excel</a>
                            {{-- @can('schools.create') --}}
                                <a class="card-header-action btn-setting" href="{{ route('schools.create') }}">
                                    <i class="icon-plus"></i> Crear</a>
                            {{-- @endcan --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="schools" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th width="150px">Logotipo</th>
                                    <th>Nombre</th>
                                    <th>Teléfono</th>
                                    {{-- @can('schools.show') --}}
                                        <th>&nbsp;</th>
                                    {{-- @endcan --}}
                                    {{-- @can('schools.edit') --}}
                                        <th>&nbsp;</th>
                                    {{-- @endcan --}}
                                    {{-- @can('schools.destroy') --}}
                                        <th>&nbsp;</th>
                                    {{-- @endcan --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($schools as $school)
                                <tr>
                                    <td>{{ $school->id }}</td>
                                    <td><img src="{{ $school->picture }}" alt="{{ $school->name }}" class="img-responsive" width="150"></td>
                                    <td>{{ $school->name }}</td>
                                    <td>{{ $school->phone }}</td>
                                    {{-- @can('schools.show') --}}
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <a href="{{ route('schools.show', $school->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="icon-eye"></i></a>
                                            </div>
                                        </td>
                                    {{-- @endcan --}}
                                    {{-- @can('schools.edit') --}}
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group" alt="Editar">
                                                <a href="{{ route('schools.edit', $school->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="icon-pencil"></i></a>
                                            </div>
                                        </td>
                                    {{-- @endcan --}}
                                    {{-- @can('schools.destroy') --}}
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                {!! Form::open(['route' => ['schools.destroy', $school->id],
                                                'method' => 'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="icon-close"></i>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    {{-- @endcan --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $schools->render() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- <div class="card">
    <div class="card-header">Card actions
        <div class="card-header-actions">
            <a class="card-header-action btn-setting" href="#">
                <i class="icon-settings"></i>
            </a>
            <a class="card-header-action btn-minimize" href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true">
                <i class="icon-arrow-up"></i>
            </a>
            <a class="card-header-action btn-close" href="#">
                <i class="icon-close"></i>
            </a>
        </div>
    </div>
    <div class="collapse show" id="collapseExample">
    <div class="card-body">
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
    </div>
    </div>
    </div> --}}
