@extends('layouts.app')

@section('template_title')
    {{ $company->name ?? 'Show Company' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información de la Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('companies.index') }}">Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Razón Social:</strong>
                            {{ $company->razon_social }}
                        </div>
                        <div class="form-group">
                            <strong>Rut Empresa:</strong>
                            {{ $company->rut_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Giro:</strong>
                            {{ $company->giro }}
                        </div>
                        <div class="form-group">
                            <strong>Comuna:</strong>
                            {{ $company->comuna }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $company->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $company->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Página Web:</strong>
                            {{ $company->pagina_web }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $company->email }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta Logo:</strong>
                            {{ $company->ruta_logo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Resolución:</strong>
                            {{ $company->fecha_resolucion }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Resolución:</strong>
                            {{ $company->numero_resolucion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
