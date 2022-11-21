<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $caf->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ruta') }}
            {{ Form::text('ruta', $caf->ruta, ['class' => 'form-control' . ($errors->has('ruta') ? ' is-invalid' : ''), 'placeholder' => 'Ruta']) }}
            {!! $errors->first('ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('expiration_date') }}
            {{ Form::text('expiration_date', $caf->expiration_date, ['class' => 'form-control' . ($errors->has('expiration_date') ? ' is-invalid' : ''), 'placeholder' => 'Expiration Date']) }}
            {!! $errors->first('expiration_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quantity_avaible') }}
            {{ Form::text('quantity_avaible', $caf->quantity_avaible, ['class' => 'form-control' . ($errors->has('quantity_avaible') ? ' is-invalid' : ''), 'placeholder' => 'Quantity Avaible']) }}
            {!! $errors->first('quantity_avaible', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('initial_folio') }}
            {{ Form::text('initial_folio', $caf->initial_folio, ['class' => 'form-control' . ($errors->has('initial_folio') ? ' is-invalid' : ''), 'placeholder' => 'Initial Folio']) }}
            {!! $errors->first('initial_folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_folio') }}
            {{ Form::text('last_folio', $caf->last_folio, ['class' => 'form-control' . ($errors->has('last_folio') ? ' is-invalid' : ''), 'placeholder' => 'Last Folio']) }}
            {!! $errors->first('last_folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('current_folio') }}
            {{ Form::text('current_folio', $caf->current_folio, ['class' => 'form-control' . ($errors->has('current_folio') ? ' is-invalid' : ''), 'placeholder' => 'Current Folio']) }}
            {!! $errors->first('current_folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('document_code') }}
            {{ Form::text('document_code', $caf->document_code, ['class' => 'form-control' . ($errors->has('document_code') ? ' is-invalid' : ''), 'placeholder' => 'Document Code']) }}
            {!! $errors->first('document_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $caf->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>