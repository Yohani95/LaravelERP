@extends('layouts.app')

@section('template_title')
    Company
@endsection

@section('content')
<div class="pagetitle">
    <h1>Empresa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
      </ol>
    </nav>
  </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de Compañías') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('companies.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Compañía') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Razón Social</th>
										<th>Rut Empresa</th>
										<th>Giro</th>
										<th>Comuna</th>
										<th>Dirección</th>
										<th>Teléfono</th>
										<th>Página Web</th>
										<th>Email</th>
										<th>Logo</th>
										<th>Fecha Resolución</th>
										<th>N° Resolución</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companies as $company)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $company->razon_social }}</td>
											<td>{{ $company->rut_empresa }}</td>
											<td>{{ $company->giro }}</td>
											<td>{{ $company->comuna }}</td>
											<td>{{ $company->direccion }}</td>
											<td>{{ $company->telefono }}</td>
											<td>{{ $company->pagina_web }}</td>
											<td>{{ $company->email }}</td>
											<td>{{ $company->ruta_logo }}</td>
											<td>{{ $company->fecha_resolucion }}</td>
											<td>{{ $company->numero_resolucion }}</td>

                                            <td>
                                                <form action="{{ route('companies.destroy',$company->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary mb-2" href="{{ route('companies.show',$company->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success mb-2" href="{{ route('companies.edit',$company->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm mb-2"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $companies->links() !!}
            </div>
        </div>
    </div>
@endsection
