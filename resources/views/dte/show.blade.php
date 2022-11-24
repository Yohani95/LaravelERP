@extends('layouts.app')

@section('template_title')
    {{ $dte->name ?? 'Show Dte' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Dte</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dtes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type Document:</strong>
                            {{ $dte->type_document }}
                        </div>
                        <div class="form-group">
                            <strong>Num Folio:</strong>
                            {{ $dte->num_folio }}
                        </div>
                        <div class="form-group">
                            <strong>Track Id:</strong>
                            {{ $dte->track_id }}
                        </div>
                        <div class="form-group">
                            <strong>Name Route Xml:</strong>
                            {{ $dte->name_route_xml }}
                        </div>
                        <div class="form-group">
                            <strong>Confirmed Send Sii:</strong>
                            {{ $dte->confirmed_send_sii }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $dte->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Status Id:</strong>
                            {{ $dte->status_id }}
                        </div>
                        <div class="form-group">
                            <strong>Payment Status:</strong>
                            {{ $dte->payment_status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
