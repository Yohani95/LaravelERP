@extends('layouts.app')

@section('template_title')
    {{ $employee->name ?? 'Show Employee' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información del Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary m-2" href="{{ route('employees.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $employee->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $employee->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>RUT:</strong>
                            {{ $employee->rut }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $employee->direcction }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $employee->email }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $employee->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del Usuario:</strong>
                            {{ $employee->user -> name }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $employee->jobPosition->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
