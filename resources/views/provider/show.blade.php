@extends('layouts.app')

@section('template_title')
    {{ $provider->name ?? 'Show Provider' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Provider</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('providers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Business Name:</strong>
                            {{ $provider->business_name }}
                        </div>
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $provider->rut }}
                        </div>
                        <div class="form-group">
                            <strong>Direcction:</strong>
                            {{ $provider->direcction }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $provider->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $provider->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Giro:</strong>
                            {{ $provider->giro }}
                        </div>
                        <div class="form-group">
                            <strong>Comuna:</strong>
                            {{ $provider->comuna }}
                        </div>
                        <div class="form-group">
                            <strong>Pag Web:</strong>
                            {{ $provider->pag_web }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
