@extends('layouts.app')

@section('template_title')
    {{ $supply->name ?? 'Show Supply' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información del Insumo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary m-2" href="{{ route('supplies.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre del Insumo:</strong>
                            {{ $supply->name }}
                        </div>
                        <div class="form-group">
                            <strong>Código del Insumo:</strong>
                            {{ $supply->code }}
                        </div>
                        <div class="form-group">
                            <strong>Cántidad Disponible:</strong>
                            {{ $supply->count }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Unitario:</strong>
                            {{ $supply->price }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del Usuario:</strong>
                            {{ $supply->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Categoría Asociada:</strong>
                            {{ $supply->subCategory->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
