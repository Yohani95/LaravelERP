@extends('layouts.app')

@section('template_title')
    {{ $caf->name ?? 'Show Caf' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Caf</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cafs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $caf->name }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta:</strong>
                            {{ $caf->ruta }}
                        </div>
                        <div class="form-group">
                            <strong>Expiration Date:</strong>
                            {{ $caf->expiration_date }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity Avaible:</strong>
                            {{ $caf->quantity_avaible }}
                        </div>
                        <div class="form-group">
                            <strong>Initial Folio:</strong>
                            {{ $caf->initial_folio }}
                        </div>
                        <div class="form-group">
                            <strong>Last Folio:</strong>
                            {{ $caf->last_folio }}
                        </div>
                        <div class="form-group">
                            <strong>Current Folio:</strong>
                            {{ $caf->current_folio }}
                        </div>
                        <div class="form-group">
                            <strong>Document Code:</strong>
                            {{ $caf->document_code }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $caf->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
