<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $cellar->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">

    </div>
    <div class="box-footer mt20">
        <button type="submit m-2" class="btn btn-primary m-2">Aceptar</button>
        <a href="{{route('cellars.index')}}" class="btn btn-danger m-2">Volver</a>
    </div>
</div>