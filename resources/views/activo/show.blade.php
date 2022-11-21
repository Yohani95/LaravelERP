@extends('layouts.app')

@section('template_title')
    {{ $activo->name ?? 'Show Activo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Activo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('activos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $activo->name }}
                        </div>
                        <div class="form-group">
                            <strong>Code:</strong>
                            {{ $activo->code }}
                        </div>
                        <div class="form-group">
                            <strong>Count:</strong>
                            {{ $activo->count }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $activo->price }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $activo->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cellar Id:</strong>
                            {{ $activo->cellar_id }}
                        </div>
                        <div class="form-group">
                            <strong>Sub Category Id:</strong>
                            {{ $activo->sub_category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
