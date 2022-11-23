@extends('layouts.app')

@section('template_title')
    {{ $jobPosition->name ?? 'Show Job Position' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información del Puesto de Trabajo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary m-2" href="{{ route('job-positions.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre del Cargo:</strong>
                            {{ $jobPosition->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
