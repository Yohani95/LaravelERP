@extends('layouts.app')

@section('template_title')
    {{ $jobPosition->name ?? 'Show Job Position' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Job Position</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('job-positions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $jobPosition->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
