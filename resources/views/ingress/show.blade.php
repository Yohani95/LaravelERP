@extends('layouts.app')

@section('template_title')
    {{ $ingress->name ?? 'Show Ingress' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información del Ingreso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingresses.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ingress->name }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $ingress->mount }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $ingress->description }}
                        </div>
                        <div class="form-group">
                            <strong>Categoría:</strong>
                            {{ $ingress->categories->name }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de Usuario:</strong>
                            {{ $ingress->user->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
