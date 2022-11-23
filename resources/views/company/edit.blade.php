@extends('layouts.app')

@section('template_title')
    Update Company
@endsection

@section('content')
<div class="pagetitle">
    <h1>Editar Empresa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('companies.index')}}">Empresa</a></li>
        <li class="breadcrumb-item">Editar</li>
    </ol>
    </nav>
  </div>
    <section class="content container-fluid">
        <div class="">
            
            <div class="col-md-12">

                @includeif('partials.errors')
                
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Compañía</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('companies.update', $company->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('company.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
