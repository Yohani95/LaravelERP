@extends('layouts.app')

@section('template_title')
    {{ $ingress->name ?? 'Show Ingress' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ingress</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingresses.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $ingress->name }}
                        </div>
                        <div class="form-group">
                            <strong>Mount:</strong>
                            {{ $ingress->mount }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $ingress->description }}
                        </div>
                        <div class="form-group">
                            <strong>Categories Id:</strong>
                            {{ $ingress->categories_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $ingress->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
