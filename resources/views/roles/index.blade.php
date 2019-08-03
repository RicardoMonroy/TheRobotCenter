@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        Roles
    </li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
    <div class="btn-group" role="group" aria-label="Button group">
        @can('roles.create')
            <a class="btn" href="{{ route('roles.create') }}">
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
                        Roles
                    </div>
                    <div class="card-body">
                        <table id="roles" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>Nombre</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    @can('roles.show')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <a href="{{ route('roles.show', $role->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="icon-eye"></i></a>
                                            </div>
                                        </td>
                                    @endcan
                                    @can('roles.edit')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group" alt="Editar">
                                                <a href="{{ route('roles.edit', $role->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="icon-pencil"></i></a>
                                            </div>
                                        </td>
                                    @endcan
                                    @can('roles.destroy')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                {!! Form::open(['route' => ['roles.destroy', $role->id],
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
                        {{-- {{ $roles->render() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
