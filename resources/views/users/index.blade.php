@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        Usuarios
    </li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
    <div class="btn-group" role="group" aria-label="Button group">
        @can('users.create')
            <a class="btn" href="{{ route('users.create') }}">
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
                        Usuarios
                    </div>
                    <div class="card-body">
                        <table id="users"" class="table table-striped table-hover">
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
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        @can('users.show')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <a href="{{ route('users.show', $user->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="icon-eye"></i></a>
                                            </div>
                                        </td>
                                        @endcan
                                        @can('users.edit')
                                            <td width="10px">
                                                <div class="btn-group" role="group" aria-label="Button group" alt="Editar">
                                                    <a href="{{ route('users.edit', $user->id) }}"
                                                        class="btn btn-sm btn-success">
                                                    <i class="icon-pencil"></i></a>
                                                </div>
                                            </td>
                                        @endcan
                                        @can('users.destroy')
                                            <td width="10px">
                                                <div class="btn-group" role="group" aria-label="Button group">
                                                    {!! Form::open(['route' => ['users.destroy', $user->id],
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
                        {{-- {{ $users->render() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
