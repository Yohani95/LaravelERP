@extends('layouts.app')

@section('template_title')
    {{ $sale->name ?? 'Show Sale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $sale->description }}
                        </div>
                        <div class="form-group">
                            <strong>Iva:</strong>
                            {{ $sale->iva }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $sale->total }}
                        </div>
                        <div class="form-group">
                            <strong>Neto:</strong>
                            {{ $sale->neto }}
                        </div>
                        <div class="form-group">
                            <strong>Num Folio:</strong>
                            {{ $sale->num_folio }}
                        </div>
                        <div class="form-group">
                            <strong>Type Document:</strong>
                            {{ $sale->type_document }}
                        </div>
                        <div class="form-group">
                            <strong>Discount:</strong>
                            {{ $sale->discount }}
                        </div>
                        <div class="form-group">
                            <strong>Name Route Xml:</strong>
                            {{ $sale->name_route_xml }}
                        </div>
                        <div class="form-group">
                            <strong>Payment Date:</strong>
                            {{ $sale->payment_date }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $sale->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Status Id:</strong>
                            {{ $sale->status_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
