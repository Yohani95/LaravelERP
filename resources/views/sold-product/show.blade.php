@extends('layouts.app')

@section('template_title')
    {{ $soldProduct->name ?? 'Show Sold Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sold Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sold-products.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $soldProduct->name }}
                        </div>
                        <div class="form-group">
                            <strong>Code:</strong>
                            {{ $soldProduct->code }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $soldProduct->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Unit Price:</strong>
                            {{ $soldProduct->unit_price }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $soldProduct->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cellar Id:</strong>
                            {{ $soldProduct->cellar_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
