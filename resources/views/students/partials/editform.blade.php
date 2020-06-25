{{-- <div class="form-group">
    <label for="user_id">Selecciona a un usuario</label>
        <select class="form-control" id="select1" name="user_id">
            <option disabled selected>Elige a un usuario</option>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div> --}}
<div class="form-group">
    {{ Form::label('title', 'Título') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
</div>
<div class="form-group">
    {{ Form::label('biography', 'Biografía') }}
    {{ Form::textarea('biography', null, ['class' => 'form-control', 'id' => 'biography']) }}
</div>
<div class="form-group">
    {{ Form::label('website_url', 'Website URL') }}
    {{ Form::text('website_url', null, ['class' => 'form-control', 'id' => 'website_url']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


