@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        Alumnos
    </li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
    <div class="btn-group" role="group" aria-label="Button group">
        @can('students.create')
            <a class="btn" href="{{ route('students.create') }}">
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
                        Alumnos
                    </div>
                    <div class="card-body">
                        <table id="students" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th width="10px">Código</th>
                                    <th>Nombre</th>
                                    <th>Escuela</th>
                                    <th>Grupo</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->code }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ !empty($student->school->name) ? $student->school->name:'' }}</td>
                                    <td>{{ !empty($student->group->name) ? $student->group->name:'' }}</td>
                                    @can('students.show')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <a href="{{ route('students.show', $student->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="icon-eye"></i></a>
                                            </div>
                                        </td>
                                    @endcan
                                    @can('students.edit')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group" alt="Editar">
                                                <a href="{{ route('students.edit', $student->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="icon-pencil"></i></a>
                                            </div>
                                        </td>
                                    @endcan
                                    @can('students.destroy')
                                        <td width="10px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                {!! Form::open(['route' => ['students.destroy', $student->id],
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
                        {{-- {{ $students->render() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
