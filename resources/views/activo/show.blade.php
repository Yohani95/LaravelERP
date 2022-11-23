@extends('layouts.app')

@section('template_title')
    {{ $activo->name ?? 'Show Activo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información del Activo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary m-2" href="{{ route('activos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre del Activo:</strong>
                            {{ $activo->name }}
                        </div>
                        <div class="form-group">
                            <strong>Código del Activo:</strong>
                            {{ $activo->code }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Disponible:</strong>
                            {{ $activo->count }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Unitario:</strong>
                            {{ $activo->price }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del Usuario:</strong>
                            {{ $activo->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Bodega del Activo:</strong>
                            {{ $activo->cellar->name }}
                        </div>
                        <div class="form-group">
                            <strong>Categoría Asociada:</strong>
                            {{ $activo->subCategory->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
