@extends('layouts.app')

@section('template_title')
    {{ $egress->name ?? 'Show Egress' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Egress</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('egresses.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $egress->name }}
                        </div>
                        <div class="form-group">
                            <strong>Mount:</strong>
                            {{ $egress->mount }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $egress->description }}
                        </div>
                        <div class="form-group">
                            <strong>Categories Id:</strong>
                            {{ $egress->categories_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $egress->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
