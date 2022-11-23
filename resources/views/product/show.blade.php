@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información del Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary m-2" href="{{ route('products.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre del Producto:</strong>
                            {{ $product->name }}
                        </div>
                        <div class="form-group">
                            <strong>Código del Producto:</strong>
                            {{ $product->code }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Disponible:</strong>
                            {{ $product->count }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Unitario:</strong>
                            {{ $product->price }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de Usuario:</strong>
                            {{ $product->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Bodega del Producto:</strong>
                            {{ $product->cellar->name }}
                        </div>
                        <div class="form-group">
                            <strong>Categoría Asociada al Producto:</strong>
                            {{ $product->sub_category_name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
