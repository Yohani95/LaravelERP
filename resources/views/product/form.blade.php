<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $product->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese un nombre para el producto']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('code', $product->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Código']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('count', $product->count, ['class' => 'form-control' . ($errors->has('count') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese la Cantidad']) }}
            {!! $errors->first('count', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('price', $product->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Precio ($)']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>       
        <div class="form-group">
            {{ Form::label('bodega') }}
            {{ Form::select('cellar_id',$cellar ,$product->cellar_id, ['class' => 'form-control' . ($errors->has('cellar_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la Bodega']) }}
            {!! $errors->first('cellar_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoría') }}
            {{ Form::Select('sub_category_id',$subcategory ,$product->sub_category_id, ['class' => 'form-control' . ($errors->has('sub_category_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la Categoría']) }}
            {!! $errors->first('sub_category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary m-2">Aceptar</button>
        <a href="{{route('products.index')}}" class="btn btn-danger m-2">Volver</a>
    </div>
</div>