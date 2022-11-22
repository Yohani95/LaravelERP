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
                            <span class="card-title">Información de la Bodega</span>
                        </div>   
                        <div class="float-right">
                        <a class="btn btn-primary m-2" href="{{ route('cellars.index') }}"> Volver</a>
                        </div>                     
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cellar->name }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de Usuario:</strong>
                            {{ $cellar->user -> name }}
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
