<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('razón_social') }}
            {{ Form::text('razon_social', $company->razon_social, ['class' => 'form-control' . ($errors->has('razon_social') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la Empresa']) }}
            {!! $errors->first('razon_social', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rut_empresa') }}
            {{ Form::text('rut_empresa', $company->rut_empresa, ['class' => 'form-control' . ($errors->has('rut_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo: xx.xxx.xxx-x']) }}
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
            {{ Form::label('dirección') }}
            {{ Form::text('direccion', $company->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese una dirección']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('teléfono') }}
            {{ Form::text('telefono', $company->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo: 123456789']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('página_web') }}
            {{ Form::text('pagina_web', $company->pagina_web, ['class' => 'form-control' . ($errors->has('pagina_web') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo@prueba.cl']) }}
            {!! $errors->first('pagina_web', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $company->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('logo') }}
            {{ Form::text('ruta_logo', $company->ruta_logo, ['class' => 'form-control' . ($errors->has('ruta_logo') ? ' is-invalid' : ''), 'placeholder' => 'Ruta Logo']) }}
            {!! $errors->first('ruta_logo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_resolucion') }}
            {{ Form::text('fecha_resolucion', $company->fecha_resolucion, ['class' => 'form-control' . ($errors->has('fecha_resolucion') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Fecha']) }}
            {!! $errors->first('fecha_resolucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('n°_resolución') }}
            {{ Form::text('numero_resolucion', $company->numero_resolucion, ['class' => 'form-control' . ($errors->has('numero_resolucion') ? ' is-invalid' : ''), 'placeholder' => 'N° Resolución']) }}
            {!! $errors->first('numero_resolucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit m-2" class="btn btn-primary m-2">Aceptar</button>
        <a href="{{route('companies.index')}}" class="btn btn-danger m-2">Volver</a>
    </div>
</div>