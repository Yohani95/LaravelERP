@extends('layouts.app')

@section('template_title')
    Update User
@endsection

@section('content')
<div class="pagetitle">
    <h1>Editar Usuario de sistema</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('users.index')}}">Inicio</a></li>
        <li class="breadcrumb-item active">Editar</li>
      </ol>
    </nav>
</div>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Usuario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('user.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
