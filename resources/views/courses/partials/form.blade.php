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
</div> --}}
<hr>
<h3>Lista de materiales que requiere la clase</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach($materials as $material)
        <li>
            <label>
            {{ Form::checkbox('materials[]', $material->id, null) }}
            {{ $material->name }}
            <em>({{ !empty($material->description) ? $material->description:'Este material no tiene una descripción' }})</em>
            </label>
        </li>
        @endforeach
    </ul>
</div>


<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
