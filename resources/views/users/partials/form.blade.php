<div class="form-group">
    {{ Form::label('name', 'Nombre completo') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('email', 'Correo Electrónico') }}
    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', ['class' => 'form-control', 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('dashboard', 'Dashboard') }}
    {{Form::select('dashboard',['1' => 'Con acceso', '0' => 'Sin acceso'], null, ['class' => 'form-control', 'id' => 'dashboard'])}}
</div>
<hr>
<h3>Lista de roles</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach($roles as $role)
        <li>
            <label>
            {{ Form::checkbox('roles[]', $role->id, null) }}
            {{ $role->name }}
            <em>({{ $role->description ?: 'Sin descripción' }})</em>
            </label>
        </li>
        @endforeach
    </ul>
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
