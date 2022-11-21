@extends('layouts.app')

@section('template_title')
    {{ $typesPrint->name ?? 'Show Types Print' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Types Print</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('types-prints.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type Invoice:</strong>
                            {{ $typesPrint->type_invoice }}
                        </div>
                        <div class="form-group">
                            <strong>Type Ticket:</strong>
                            {{ $typesPrint->type_ticket }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $typesPrint->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
