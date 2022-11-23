<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $ingress->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('mount', $ingress->mount, ['class' => 'form-control' . ($errors->has('mount') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Monto']) }}
            {!! $errors->first('mount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('description', $ingress->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese un Detalle']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoría') }}
            {{ Form::select('categories_id', $categories,$ingress->categories_id, ['class' => 'form-control' . ($errors->has('categories_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la Categoría']) }}
            {!! $errors->first('categories_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary m-2">Aceptar</button>
        <a href="{{route('ingresses.index')}}" class="btn btn-danger m-2">Volver</a>
    </div>
</div>