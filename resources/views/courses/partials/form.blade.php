<div class="form-group">
    {{ Form::label('code', 'Código de la clase') }}
    {{ Form::text('code', null, ['class' => 'form-control', 'id' => 'code']) }}
</div>
<div class="form-group">
    {{ Form::label('name', 'Nombre de la clase') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Descripción') }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) }}
</div>
<div class="form-group">
    {{ Form::label('picture', 'Portada') }}
    {{ Form::file('picture', null, ['class' => 'form-control', 'id' => 'picture', 'id' => 'picture']) }}
</div>
<div class="form-group">
    {{ Form::label('editor', 'Contenido del curso') }}
    {{ Form::textarea('editor', null, ['class' => 'form-control', 'id' => 'editor']) }}
</div>
{{-- <div class="form-group">
    {{ Form::label('section_two', 'Segunda sección: DISEÑAR O CONSTRUIR') }}
    {{ Form::textarea('section_two', null, ['class' => 'form-control', 'id' => 'section_two']) }}
</div>
<div class="form-group">
    {{ Form::label('section_tree', 'Tercer sección: ANALIZAR') }}
    {{ Form::textarea('section_tree', null, ['class' => 'form-control', 'id' => 'section_tree']) }}
</div>
<div class="form-group">
    {{ Form::label('section_four', 'Cuarta sección: INNOVAR') }}
    {{ Form::textarea('section_four', null, ['class' => 'form-control', 'id' => 'section_four']) }}
</div> --}}

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
