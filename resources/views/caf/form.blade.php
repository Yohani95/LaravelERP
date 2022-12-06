<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $caf->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('expiration_date') }}
            {{ Form::text('expiration_date', $caf->expiration_date, ['class' => 'form-control' . ($errors->has('expiration_date') ? ' is-invalid' : ''), 'placeholder' => 'Expiration Date','disabled']) }}
            {!! $errors->first('expiration_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quantity_avaible') }}
            {{ Form::text('quantity_avaible', $caf->quantity_avaible, ['class' => 'form-control' . ($errors->has('quantity_avaible') ? ' is-invalid' : ''), 'placeholder' => 'Quantity Avaible','disabled']) }}
            {!! $errors->first('quantity_avaible', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('initial_folio') }}
            {{ Form::text('initial_folio', $caf->initial_folio, ['class' => 'form-control' . ($errors->has('initial_folio') ? ' is-invalid' : ''), 'placeholder' => 'Initial Folio','disabled']) }}
            {!! $errors->first('initial_folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_folio') }}
            {{ Form::text('last_folio', $caf->last_folio, ['class' => 'form-control' . ($errors->has('last_folio') ? ' is-invalid' : ''), 'placeholder' => 'Last Folio','disabled']) }}
            {!! $errors->first('last_folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('current_folio') }}
            {{ Form::text('current_folio', $caf->current_folio, ['class' => 'form-control' . ($errors->has('current_folio') ? ' is-invalid' : ''), 'placeholder' => 'Current Folio','disabled']) }}
            {!! $errors->first('current_folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('document_code') }}
            {{ Form::text('document_code', $caf->document_code, ['class' => 'form-control' . ($errors->has('document_code') ? ' is-invalid' : ''), 'placeholder' => 'Document Code','disabled']) }}
            {!! $errors->first('document_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ruta') }}
            <input class="form-control" onchange="updateData(this)" accept="text/xml" type="file" id="ruta" name="ruta" required>
            {!! $errors->first('ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary m-2">Submit</button>
    </div>
</div>
@section('js')
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/x2js/1.2.0/xml2json.min.js" integrity="sha512-HX+/SvM7094YZEKOCtG9EyjRYvK8dKlFhdYAnVCGNxMkA59BZNSZTZrqdDlLXp0O6/NjDb1uKnmutUeuzHb3iQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
function updateData(){
    var xml=document.getElementById('ruta')
    var x2js = new X2JS();
    let xmlDoc = new DOMParser().parseFromString(xml.files[0], 'text/xml');
    let td = xmlDoc.getElementsByTagName('TD');
    var jsonObj = x2js.xml_str2json( xml.files[0].text() );
    console.log(td.value)
    //var jsonData = $.parseXML(xml.files[0].text());
    document.getElementById('document_code').value=1;
    document.getElementById('current_folio').value=1
    document.getElementById('last_folio').value=1
    document.getElementById('initial_folio').value=1
    document.getElementById('quantity_avaible').value=1
    document.getElementById('expiration_date').value='2022-01-01'
}
</script>