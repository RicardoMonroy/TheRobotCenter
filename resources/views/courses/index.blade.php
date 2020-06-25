@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        Clases
    </li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
    {{-- <div class="btn-group" role="group" aria-label="Button group">
        @can('courses.create')
            <a class="btn" href="{{ route('courses.create') }}">
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
                    <div class="card-header">Clases
                        <div class="card-header-actions">
                            {{-- <a class="card-header-action btn-setting" href="{{ route('schools.excel') }}">
                                <i class="icon-cloud-download"></i> Descargar</a> --}}
                            @can('schools.create')
                                <a class="card-header-action btn-setting" href="{{ route('courses.create') }}">
                                    <i class="icon-plus"></i> Crear</a>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="clases" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    {{-- <th width="10px">ID</th> --}}
                                    <th width="10px">Código</th>
                                    <th width="150px">Portada</th>
                                    <th>Nombre</th>
                                    @can('courses.show')
                                        <th>&nbsp;</th>
                                    @endcan
                                    @can('courses.edit')
                                        <th>&nbsp;</th>
                                    @endcan
                                    @can('courses.destroy')
                                        <th>&nbsp;</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                <tr>
                                    {{-- <td>{{ $course->id }}</td> --}}
                                    <td>{{ $course->code }}</td>
                                    <th><img src="{{ $course->picture }}" alt="{{ $course->name }}" class="img-responsive" width="150"></th>
                                    <td>{{ $course->name }}</td>
                                    @can('courses.show')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <a href="{{ route('courses.show', $course->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="icon-eye"></i></a>
                                            </div>
                                        </td>
                                    @endcan
                                    @can('courses.edit')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group" alt="Editar">
                                                <a href="{{ route('courses.edit', $course->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="icon-pencil"></i></a>
                                            </div>
                                        </td>
                                    @endcan
                                    @can('courses.destroy')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                {!! Form::open(['route' => ['courses.destroy', $course->id],
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
                        {{-- {{ $courses->render() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
