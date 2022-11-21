@extends('layouts.app')

@section('template_title')
    {{ $certificadosDigitale->name ?? 'Show Certificados Digitale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Certificados Digitale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('certificados-digitales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $certificadosDigitale->name }}
                        </div>
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $certificadosDigitale->rut }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta:</strong>
                            {{ $certificadosDigitale->ruta }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $certificadosDigitale->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
