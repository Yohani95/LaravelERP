@extends('layouts.app')

@section('template_title')
    {{ $egress->name ?? 'Show Egress' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información del Egreso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary m-2" href="{{ route('egresses.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Etiqueta de Egreso:</strong>
                            {{ $egress->name }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Asociado:</strong>
                            {{ $egress->mount }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle del Egreso:</strong>
                            {{ $egress->description }}
                        </div>
                        <div class="form-group">
                            <strong>Categoría Asociada:</strong>
                            {{ $egress->categoriesFinance->name }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del Usuario:</strong>
                            {{ $egress->user->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
