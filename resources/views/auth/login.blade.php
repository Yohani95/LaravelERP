@extends('layouts.app')

@section('content')
<!--Diseño del Login-->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>
  <!-- Formulario de Inicio -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55);backdrop-filter: blur(30px);">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">{{ __('Inicio de Sesión') }}</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <!-- Entrada de Email -->
              <div class="form-outline mb-4">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                 
                <label class="form-label" for="email">Correo Electrónico </label>
              </div>

              <!-- Entrada de contraseña -->
              <div class="form-outline mb-4">              
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label class="form-label" for="password">{{ __('Contraseña') }}</label>
              </div>

              <!-- Checkbox -->
              <div class="offset-md-4">
              <div class="form-check d-flex mb-2">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                   <label class="form-check-label" for="remember">{{ __('Recordar Credenciales') }}</label>
              </div>
              </div>

              <!-- Submit button -->
              <div class="form-outline mb-4">
                    <button type="submit" class="btn btn-primary">{{ __('Acceder') }}</button>
                    @if (Route::has('password.request')) <br>
                    <a class="btn btn-link " href="{{ route('password.request') }}">{{ __('Recuperar Contraseña?') }}</a>
                    @endif
              </div>             
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="assets/img/LogoDigitalSolutions.png" class="w-100 rounded-4 shadow-4 opacity=100" alt="" />
      </div>
    </div>
  </div>
</section>

@endsection
