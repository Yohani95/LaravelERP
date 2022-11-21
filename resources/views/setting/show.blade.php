@extends('layouts.app')

@section('template_title')
    {{ $setting->name ?? 'Show Setting' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Setting</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('settings.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type Print Id:</strong>
                            {{ $setting->type_print_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $setting->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
