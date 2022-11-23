@extends('layouts.app')

@section('template_title')
    {{ $category->name ?? 'Show Category' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Informacíon de la Categoría </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary m-2" href="{{ route('categories.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre de la Categoría:</strong>
                            {{ $category->name }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de Usuario:</strong>
                            {{ $category->user }}
                        </div>
                        
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
