<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('business_name') }}
            {{ Form::text('business_name', $provider->business_name, ['class' => 'form-control' . ($errors->has('business_name') ? ' is-invalid' : ''), 'placeholder' => 'Business Name']) }}
            {!! $errors->first('business_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rut') }}
            {{ Form::text('rut', $provider->rut, ['class' => 'form-control' . ($errors->has('rut') ? ' is-invalid' : ''), 'placeholder' => 'Rut']) }}
            {!! $errors->first('rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direcction') }}
            {{ Form::text('direcction', $provider->direcction, ['class' => 'form-control' . ($errors->has('direcction') ? ' is-invalid' : ''), 'placeholder' => 'Direcction']) }}
            {!! $errors->first('direcction', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $provider->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $provider->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('giro') }}
            {{ Form::text('giro', $provider->giro, ['class' => 'form-control' . ($errors->has('giro') ? ' is-invalid' : ''), 'placeholder' => 'Giro']) }}
            {!! $errors->first('giro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comuna') }}
            {{ Form::text('comuna', $provider->comuna, ['class' => 'form-control' . ($errors->has('comuna') ? ' is-invalid' : ''), 'placeholder' => 'Comuna']) }}
            {!! $errors->first('comuna', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pag_web') }}
            {{ Form::text('pag_web', $provider->pag_web, ['class' => 'form-control' . ($errors->has('pag_web') ? ' is-invalid' : ''), 'placeholder' => 'Pag Web']) }}
            {!! $errors->first('pag_web', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>