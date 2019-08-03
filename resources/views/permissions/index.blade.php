@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        Permisos
    </li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
    <div class="btn-group" role="group" aria-label="Button group">
        @can('permissions.create')
            <a class="btn" href="{{ route('permissions.create') }}">
                <i class="icon-plus"></i> Crear</a>
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
                        Permisos
                    </div>
                    <div class="card-body">
                        <table id="permissions" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->id }}</td>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->description }}</td>
                                    @can('permissions.show')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <a href="{{ route('permissions.show', $permission->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="icon-eye"></i></a>
                                            </div>
                                        </td>
                                    @endcan
                                    @can('permissions.edit')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group" alt="Editar">
                                                <a href="{{ route('permissions.edit', $permission->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="icon-pencil"></i></a>
                                            </div>
                                        </td>
                                    @endcan
                                    @can('permissions.destroy')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                {!! Form::open(['route' => ['permissions.destroy', $permission->id],
                                                'method' => 'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="icon-close"></i>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    @endcan
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $permissions->render() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
