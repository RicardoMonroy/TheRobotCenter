<div class="form-group">
    {{ Form::label('code', 'Código de control interno') }}
    {{ Form::text('code', null, ['class' => 'form-control', 'id' => 'code']) }}
</div>

<div class="form-group">
    <label for="user_id">Selecciona al usuario</label>
    <select class="form-control" id="select1" name="user_id">
        <option selected>{{ !empty($student->user->name) ? $student->user->name:'Elige uno' }}</option>
        @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="school_id">A que escuela pertenece</label>
    <select class="form-control" id="select1" name="school_id">
        <option selected>{{ !empty($student->school->name) ? $student->school->name:'Elige una escuela' }}</option>
        @foreach($schools as $school)
            <option value="{{$school->id}}">{{$school->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="group_id">Selecciona un grupo</label>
    <select class="form-control" id="select1" name="group_id">
        <option selected>{{ !empty($student->group->name) ? $student->group->name:'Elige un grupo' }}</option>
        @foreach($groups as $group)
            <option value="{{$group->id}}">{{$group->name}} - {{ $group->school->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


