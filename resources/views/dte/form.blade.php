<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('type_document') }}
            {{ Form::text('type_document', $dte->type_document, ['class' => 'form-control' . ($errors->has('type_document') ? ' is-invalid' : ''), 'placeholder' => 'Type Document']) }}
            {!! $errors->first('type_document', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_folio') }}
            {{ Form::text('num_folio', $dte->num_folio, ['class' => 'form-control' . ($errors->has('num_folio') ? ' is-invalid' : ''), 'placeholder' => 'Num Folio']) }}
            {!! $errors->first('num_folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('track_id') }}
            {{ Form::text('track_id', $dte->track_id, ['class' => 'form-control' . ($errors->has('track_id') ? ' is-invalid' : ''), 'placeholder' => 'Track Id']) }}
            {!! $errors->first('track_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name_route_xml') }}
            {{ Form::text('name_route_xml', $dte->name_route_xml, ['class' => 'form-control' . ($errors->has('name_route_xml') ? ' is-invalid' : ''), 'placeholder' => 'Name Route Xml']) }}
            {!! $errors->first('name_route_xml', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('confirmed_send_sii') }}
            {{ Form::text('confirmed_send_sii', $dte->confirmed_send_sii, ['class' => 'form-control' . ($errors->has('confirmed_send_sii') ? ' is-invalid' : ''), 'placeholder' => 'Confirmed Send Sii']) }}
            {!! $errors->first('confirmed_send_sii', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $dte->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status_id') }}
            {{ Form::text('status_id', $dte->status_id, ['class' => 'form-control' . ($errors->has('status_id') ? ' is-invalid' : ''), 'placeholder' => 'Status Id']) }}
            {!! $errors->first('status_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('payment_status') }}
            {{ Form::text('payment_status', $dte->payment_status, ['class' => 'form-control' . ($errors->has('payment_status') ? ' is-invalid' : ''), 'placeholder' => 'Payment Status']) }}
            {!! $errors->first('payment_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>