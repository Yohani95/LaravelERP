<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $activo->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('código') }}
            {{ Form::text('code', $activo->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Código']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('count', $activo->count, ['class' => 'form-control' . ($errors->has('count') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese la Cantidad']) }}
            {!! $errors->first('count', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('price', $activo->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Precio ($)']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group">
            {{ Form::label('Bodega') }}
            {{ Form::select('cellar_id',$cellar ,$activo->cellar_id, ['class' => 'form-control' . ($errors->has('cellar_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Bodega']) }}
            {!! $errors->first('cellar_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoría') }}
            {{ Form::select('sub_category_id',$subcategory ,$activo->sub_category_id, ['class' => 'form-control' . ($errors->has('sub_category_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Categoría']) }}
            {!! $errors->first('sub_category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">

    </div>
    <div class="box-footer mt20">
        <button type="submit m-2" class="btn btn-primary ms">Aceptar</button>
        <a href="{{route('activos.index')}}" class="btn btn-danger m-2">Volver</a>
    </div>
</div>