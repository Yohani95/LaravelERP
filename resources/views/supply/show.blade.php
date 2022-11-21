@extends('layouts.app')

@section('template_title')
    {{ $supply->name ?? 'Show Supply' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Supply</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('supplies.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $supply->name }}
                        </div>
                        <div class="form-group">
                            <strong>Code:</strong>
                            {{ $supply->code }}
                        </div>
                        <div class="form-group">
                            <strong>Count:</strong>
                            {{ $supply->count }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $supply->price }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $supply->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Sub Category Id:</strong>
                            {{ $supply->sub_category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
