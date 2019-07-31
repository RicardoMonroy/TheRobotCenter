<div class="form-group">
    {{ Form::label('firstTitle', 'Cabecera (Primer Slide)') }}
    {{ Form::text('firstTitle', null, ['class' => 'form-control', 'id' => 'firstTitle']) }}
</div>
<div class="form-group">
    {{ Form::label('firstCopy', 'Título (Primer Slide)') }}
    {{ Form::text('firstCopy', null, ['class' => 'form-control', 'id' => 'firstCopy']) }}
</div>
<div class="form-group">
    {{ Form::label('firstText', 'Explicación (Primer Slide)') }}
    {{ Form::textarea('firstText', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('secondTitle', 'Cabecera (Segundo Slide)') }}
    {{ Form::text('secondTitle', null, ['class' => 'form-control', 'id' => 'secondTitle']) }}
</div>
<div class="form-group">
    {{ Form::label('secondCopy', 'Título (Segundo Slide)') }}
    {{ Form::text('secondCopy', null, ['class' => 'form-control', 'id' => 'secondCopy']) }}
</div>
<div class="form-group">
    {{ Form::label('secondText', 'Explicación (Segundo Slide)') }}
    {{ Form::textarea('secondText', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
