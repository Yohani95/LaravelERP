<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre del Cargo') }}
            {{ Form::text('name', $jobPosition->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingresar Nombre del Cargo']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
        <a href="{{route('job-positions.index')}}" class="btn btn-danger m-2">Volver</a>
    </div>
</div>