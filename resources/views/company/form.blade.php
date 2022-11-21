<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('razon_social') }}
            {{ Form::text('razon_social', $company->razon_social, ['class' => 'form-control' . ($errors->has('razon_social') ? ' is-invalid' : ''), 'placeholder' => 'Razon Social']) }}
            {!! $errors->first('razon_social', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rut_empresa') }}
            {{ Form::text('rut_empresa', $company->rut_empresa, ['class' => 'form-control' . ($errors->has('rut_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Rut Empresa']) }}
            {!! $errors->first('rut_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('giro') }}
            {{ Form::text('giro', $company->giro, ['class' => 'form-control' . ($errors->has('giro') ? ' is-invalid' : ''), 'placeholder' => 'Giro']) }}
            {!! $errors->first('giro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comuna') }}
            {{ Form::text('comuna', $company->comuna, ['class' => 'form-control' . ($errors->has('comuna') ? ' is-invalid' : ''), 'placeholder' => 'Comuna']) }}
            {!! $errors->first('comuna', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $company->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $company->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pagina_web') }}
            {{ Form::text('pagina_web', $company->pagina_web, ['class' => 'form-control' . ($errors->has('pagina_web') ? ' is-invalid' : ''), 'placeholder' => 'Pagina Web']) }}
            {!! $errors->first('pagina_web', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $company->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ruta_logo') }}
            {{ Form::text('ruta_logo', $company->ruta_logo, ['class' => 'form-control' . ($errors->has('ruta_logo') ? ' is-invalid' : ''), 'placeholder' => 'Ruta Logo']) }}
            {!! $errors->first('ruta_logo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_resolucion') }}
            {{ Form::text('fecha_resolucion', $company->fecha_resolucion, ['class' => 'form-control' . ($errors->has('fecha_resolucion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Resolucion']) }}
            {!! $errors->first('fecha_resolucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_resolucion') }}
            {{ Form::text('numero_resolucion', $company->numero_resolucion, ['class' => 'form-control' . ($errors->has('numero_resolucion') ? ' is-invalid' : ''), 'placeholder' => 'Numero Resolucion']) }}
            {!! $errors->first('numero_resolucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>