@extends('layouts.app')

@section('content')
@include('graphic.home.summary-admin')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido Estas en Digital Solutions ERP!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
