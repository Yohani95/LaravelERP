<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $certificadosDigitale->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rut') }}
            {{ Form::text('rut', $certificadosDigitale->rut, ['class' => 'form-control' . ($errors->has('rut') ? ' is-invalid' : ''), 'placeholder' => 'Rut']) }}
            {!! $errors->first('rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('password') }}
            {{ Form::text('password', $certificadosDigitale->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group m-2">
            {{ Form::label('ruta') }}
            {{ Form::file('ruta', $certificadosDigitale->ruta, ['class' => 'form-control' . ($errors->has('ruta') ? ' is-invalid' : ''), 'placeholder' => 'Ruta','accept' => 'text/xml']) }}
            {!! $errors->first('ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>