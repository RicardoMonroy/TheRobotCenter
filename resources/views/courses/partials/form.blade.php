<div class="form-group">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Descripción') }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) }}
</div>
<div class="form-group">
    {{ Form::label('picture', 'Descripción') }}
    {{ Form::file('picture', null, ['class' => 'form-control', 'id' => 'picture', 'id' => 'picture']) }}
</div>
<div class="form-group">
    {{ Form::label('section_one', 'Primer sección: PREGUNTAR') }}
    {{ Form::textarea('section_one', null, ['class' => 'form-control', 'id' => 'section_one']) }}
</div>
<div class="form-group">
    {{ Form::label('section_two', 'Segunda sección: DISEÑAR O CONSTRUIR') }}
    {{ Form::textarea('section_two', null, ['class' => 'form-control', 'id' => 'section_two']) }}
</div>
<div class="form-group">
    {{ Form::label('section_tree', 'Tercer sección: ANALIZAR') }}
    {{ Form::textarea('section_tree', null, ['class' => 'form-control', 'id' => 'section_tree']) }}
</div>
<div class="form-group">
    {{ Form::label('section_for', 'Cuarta sección: INNOVAR') }}
    {{ Form::textarea('section_for', null, ['class' => 'form-control', 'id' => 'section_for']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
