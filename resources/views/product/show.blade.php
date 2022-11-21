@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $product->name }}
                        </div>
                        <div class="form-group">
                            <strong>Code:</strong>
                            {{ $product->code }}
                        </div>
                        <div class="form-group">
                            <strong>Count:</strong>
                            {{ $product->count }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $product->price }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $product->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cellar Id:</strong>
                            {{ $product->cellar_id }}
                        </div>
                        <div class="form-group">
                            <strong>Sub Category Id:</strong>
                            {{ $product->sub_category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
