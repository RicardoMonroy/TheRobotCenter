@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        Levels
    </li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
    {{-- <div class="btn-group" role="group" aria-label="Button group">
        @can('levels.create')
            <a class="btn" href="{{ route('levels.create') }}">
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
                    <div class="card-header">Niveles
                        <div class="card-header-actions">
                            {{-- <a class="card-header-action btn-setting" href="{{ route('schools.excel') }}">
                                <i class="icon-cloud-download"></i> Descargar</a> --}}
                            @can('schools.create')
                                <a class="card-header-action btn-setting" href="{{ route('levels.create') }}">
                                    <i class="icon-plus"></i> Crear</a>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="levels" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    {{-- <th width="10px">ID</th> --}}
                                    <th>Nombre</th>
                                    @can('levels.show')
                                        <th>&nbsp;</th>
                                    @endcan
                                    @can('levels.edit')
                                        <th>&nbsp;</th>
                                    @endcan
                                    @can('levels.destroy')
                                        <th>&nbsp;</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($levels as $level)
                                <tr>
                                    {{-- <td>{{ $level->id }}</td> --}}
                                    <td>{{ $level->name }}</td>
                                    @can('levels.show')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <a href="{{ route('levels.show', $level->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="icon-eye"></i></a>
                                            </div>
                                        </td>
                                    @endcan
                                    @can('levels.edit')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group" alt="Editar">
                                                <a href="{{ route('levels.edit', $level->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="icon-pencil"></i></a>
                                            </div>
                                        </td>
                                    @endcan
                                    @can('levels.destroy')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                {!! Form::open(['route' => ['levels.destroy', $level->id],
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
                        {{-- {{ $levels->render() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
