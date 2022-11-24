<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $sale->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iva') }}
            {{ Form::text('iva', $sale->iva, ['class' => 'form-control' . ($errors->has('iva') ? ' is-invalid' : ''), 'placeholder' => 'Iva']) }}
            {!! $errors->first('iva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $sale->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('neto') }}
            {{ Form::text('neto', $sale->neto, ['class' => 'form-control' . ($errors->has('neto') ? ' is-invalid' : ''), 'placeholder' => 'Neto']) }}
            {!! $errors->first('neto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_folio') }}
            {{ Form::text('num_folio', $sale->num_folio, ['class' => 'form-control' . ($errors->has('num_folio') ? ' is-invalid' : ''), 'placeholder' => 'Num Folio']) }}
            {!! $errors->first('num_folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type_document') }}
            {{ Form::text('type_document', $sale->type_document, ['class' => 'form-control' . ($errors->has('type_document') ? ' is-invalid' : ''), 'placeholder' => 'Type Document']) }}
            {!! $errors->first('type_document', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('discount') }}
            {{ Form::text('discount', $sale->discount, ['class' => 'form-control' . ($errors->has('discount') ? ' is-invalid' : ''), 'placeholder' => 'Discount']) }}
            {!! $errors->first('discount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name_route_xml') }}
            {{ Form::text('name_route_xml', $sale->name_route_xml, ['class' => 'form-control' . ($errors->has('name_route_xml') ? ' is-invalid' : ''), 'placeholder' => 'Name Route Xml']) }}
            {!! $errors->first('name_route_xml', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('payment_date') }}
            {{ Form::text('payment_date', $sale->payment_date, ['class' => 'form-control' . ($errors->has('payment_date') ? ' is-invalid' : ''), 'placeholder' => 'Payment Date']) }}
            {!! $errors->first('payment_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $sale->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status_id') }}
            {{ Form::text('status_id', $sale->status_id, ['class' => 'form-control' . ($errors->has('status_id') ? ' is-invalid' : ''), 'placeholder' => 'Status Id']) }}
            {!! $errors->first('status_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>