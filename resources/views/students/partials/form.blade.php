<div class="form-group">
    {{ Form::label('name', 'Nombre completo del Alumno') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('code', 'Código de ingreso del Alumno') }}
    {{ Form::text('code', null, ['class' => 'form-control', 'id' => 'code']) }}
</div>

<div class="form-group">
    <label for="school_id">A que escuela pertenece</label>
    <select class="form-control" id="select1" name="school_id">
        <option disabled selected>Elige una escuela</option>
        @foreach($schools as $school)
            <option value="{{$school->id}}">{{$school->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="group_id">Selecciona un grupo</label>
    <select class="form-control" id="select1" name="group_id">
        <option disabled selected>Elige un grupo</option>
        @foreach($groups as $group)
            <option value="{{$group->id}}">{{$group->name}} - {{ $group->school->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


