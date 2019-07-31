<div class="form-group">
    {{ Form::label('picture', 'Logotipo') }}
    {{ Form::file('picture', null, ['class' => 'form-control', 'id' => 'picture', 'id' => 'picture']) }}
</div>
<div class="form-group">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('address', 'Dirección') }}
    {{ Form::text('address', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
        {{ Form::label('phone', 'Teléfono') }}
        {{ Form::text('phone', null, ['class' => 'form-control']) }}
    </div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
