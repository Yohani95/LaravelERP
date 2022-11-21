<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('type_invoice') }}
            {{ Form::text('type_invoice', $typesPrint->type_invoice, ['class' => 'form-control' . ($errors->has('type_invoice') ? ' is-invalid' : ''), 'placeholder' => 'Type Invoice']) }}
            {!! $errors->first('type_invoice', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type_ticket') }}
            {{ Form::text('type_ticket', $typesPrint->type_ticket, ['class' => 'form-control' . ($errors->has('type_ticket') ? ' is-invalid' : ''), 'placeholder' => 'Type Ticket']) }}
            {!! $errors->first('type_ticket', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $typesPrint->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>