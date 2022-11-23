@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? 'Show Client' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información del Cliente </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary m-2" href="{{ route('clients.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $client->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $client->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $client->rut }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $client->direcction }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $client->email }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $client->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del Usuario:</strong>
                            {{ $client->user -> name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
