@extends('layouts.app')

@section('template_title')
    Egress
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de Egresos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('egresses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir Egreso') }}
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
                                        <th>N°</th>
                                        
										<th>Nombre</th>
										<th>Monto</th>
										<th>Descripción</th>
										<th>Categoría</th>
										<th>Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($egresses as $egress)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $egress->name }}</td>
											<td>{{ $egress->mount }}</td>
											<td>{{ $egress->description }}</td>
											<td>{{ $egress->categoriesFinance->name }}</td>
											<td>{{ $egress->user->name}}</td>

                                            <td>
                                                <form action="{{ route('egresses.destroy',$egress->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('egresses.show',$egress->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('egresses.edit',$egress->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $egresses->links() !!}
            </div>
        </div>
    </div>
@endsection
