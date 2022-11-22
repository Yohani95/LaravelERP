<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $employee->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastname') }}
            {{ Form::text('lastname', $employee->lastname, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : ''), 'placeholder' => 'Lastname']) }}
            {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rut') }}
            {{ Form::text('rut', $employee->rut, ['class' => 'form-control' . ($errors->has('rut') ? ' is-invalid' : ''), 'placeholder' => 'Rut']) }}
            {!! $errors->first('rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direcction') }}
            {{ Form::text('direcction', $employee->direcction, ['class' => 'form-control' . ($errors->has('direcction') ? ' is-invalid' : ''), 'placeholder' => 'Direcction']) }}
            {!! $errors->first('direcction', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $employee->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $employee->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('job_position_id') }}
            {{ Form::select('job_position_id',$job ,$employee->job_position_id, ['class' => 'form-control' . ($errors->has('job_position_id') ? ' is-invalid' : ''), 'placeholder' => 'Job Position Id']) }}
            {!! $errors->first('job_position_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>