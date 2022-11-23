@extends('layouts.app')
@section('template_title')
    Create Company
@endsection

@section('content')
<div class="pagetitle">
    <h1>Crear Empresa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('companies.index')}}">Empresa</a></li>
        <li class="breadcrumb-item">Crear</li>
    </ol>
    </nav>
  </div>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Ingresar Empresa</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('companies.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                           
                            @include('company.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
