<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $supply->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('código') }}
            {{ Form::text('code', $supply->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Código']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('count', $supply->count, ['class' => 'form-control' . ($errors->has('count') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese la Cantidad']) }}
            {!! $errors->first('count', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('price', $supply->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Precio ($)']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group">
            {{ Form::label('categoría') }}
            {{ Form::select('sub_category_id',$subcategory ,$supply->sub_category_id, ['class' => 'form-control' . ($errors->has('sub_category_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la Categoría']) }}
            {!! $errors->first('sub_category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
    </div>
    <div class="box-footer mt20">
        <button type="submit m-2" class="btn btn-primary m-2">Aceptar</button>
        <a href="{{route('supplies.index')}}" class="btn btn-danger m-2">Volver</a>
    </div>
</div>