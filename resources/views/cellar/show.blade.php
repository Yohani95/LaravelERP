@extends('layouts.app')

@section('template_title')
    {{ $cellar->name ?? 'Show Cellar' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cellar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cellars.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $cellar->name }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $cellar->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
