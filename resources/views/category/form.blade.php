<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $category->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese un Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary m-2">Aceptar</button>
        <a href="{{route('categories.index')}}" class="btn btn-danger m-2">Volver</a>
    </div>
</div>