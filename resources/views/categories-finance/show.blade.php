@extends('layouts.app')

@section('template_title')
    {{ $categoriesFinance->name ?? 'Show Categories Finance' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Categories Finance</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categories-finances.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $categoriesFinance->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
