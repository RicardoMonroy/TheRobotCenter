@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        Grupos
    </li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
    {{-- <div class="btn-group" role="group" aria-label="Button group">
        @can('groups.create')
            <a class="btn" href="{{ route('groups.create') }}">
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
                    <div class="card-header">Grupos
                        <div class="card-header-actions">
                            <a class="card-header-action btn-setting" href="{{ route('users.upload') }}">
                                <i class="icon-arrow-up-circle"></i> Subir un Excel</a>
                            @can('schools.create')
                                <a class="card-header-action btn-setting" href="{{ route('groups.create') }}">
                                    <i class="icon-plus"></i> Crear</a>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="groups" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>Nombre</th>
                                    <th>Escuela</th>
                                    <th>Nivel</th>
                                    @can('groups.show')
                                        <th>&nbsp;</th>
                                    @endcan
                                    @can('groups.edit')
                                        <th>&nbsp;</th>
                                    @endcan
                                    @can('groups.destroy')
                                        <th>&nbsp;</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($groups as $group)
                                <tr>
                                    <td>{{ $group->id }}</td>
                                    <td>{{ $group->name }}</td>
                                    <td>{{ !empty($group->school->name) ? $group->school->name:'' }}</td>
                                    <td>{{ !empty($group->level->name) ? $group->school->name:'' }}</td>
                                    @can('groups.show')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <a href="{{ route('groups.show', $group->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="icon-eye"></i></a>
                                            </div>
                                        </td>
                                    @endcan
                                    @can('groups.edit')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group" alt="Editar">
                                                <a href="{{ route('groups.edit', $group->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="icon-pencil"></i></a>
                                            </div>
                                        </td>
                                    @endcan
                                    @can('groups.destroy')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                {!! Form::open(['route' => ['groups.destroy', $group->id],
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
                        {{-- {{ $groups->render() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
