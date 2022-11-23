<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $employee->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('lastname', $employee->lastname, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Apellido']) }}
            {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RUT') }}
            {{ Form::text('rut', $employee->rut, ['class' => 'form-control' . ($errors->has('rut') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo: xx.xxx.xxx-x']) }}
            {!! $errors->first('rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dirección') }}
            {{ Form::text('direcction', $employee->direcction, ['class' => 'form-control' . ($errors->has('direcction') ? ' is-invalid' : ''), 'placeholder' => 'Ingresar una dirección']) }}
            {!! $errors->first('direcction', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $employee->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo@gmail.cl']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Teléfono') }}
            {{ Form::text('phone', $employee->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo: 912345678']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cargo') }}
            {{ Form::select('job_position_id',$job ,$employee->job_position_id, ['class' => 'form-control' . ($errors->has('job_position_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar el Cargo']) }}
            {!! $errors->first('job_position_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary m-2">Añadir</button>
        <a href="{{route('employees.index')}}" class="btn btn-danger m-2">Volver</a>
    </div>
</div>