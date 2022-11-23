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
                            <span class="card-title">Información de la Categoría Financiera</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary m-2" href="{{ route('categories-finances.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre de la Categoría:</strong>
                            {{ $categoriesFinance->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
