@extends('layouts.app')

@section('template_title')
    {{ $subCategory->name ?? 'Show Sub Category' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información de la Sub Categoría</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary m-2" href="{{ route('sub-categories.index') }}"> volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre de la Sub_Categoría:</strong>
                            {{ $subCategory->name }}
                        </div>
                        <div class="form-group">
                            <strong>Categoría Asociada:</strong>
                            {{ $subCategory->categories_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
