<div class="form-group">
    {{ Form::label('name', 'Nombre del grupo') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    <label for="school_id">Selecciona a una escuela</label>
    <select class="form-control" id="select1" name="school_id">
        <option disabled selected>Elige...</option>
        @foreach($schools as $school)
            <option value="{{$school->id}}">{{$school->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="level_id">Selecciona un nivel</label>
    <select class="form-control" id="select1" name="level_id">
        <option disabled selected>Elige un nivel</option>
        @foreach($levels as $level)
            <option value="{{$level->id}}">{{$level->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
