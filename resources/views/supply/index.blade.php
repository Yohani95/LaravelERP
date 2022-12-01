@extends('layouts.app')

@section('template_title')
    Supply
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de Insumos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('supplies.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir Insumo') }}
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
                            <table id="table-index" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        
										<th>Nombre</th>
										<th>Código</th>
										<th>Cantidad</th>
										<th>Precio</th>
										<th>Usuario</th>
										<th>Categoría</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($supplies as $supply)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $supply->name }}</td>
											<td>{{ $supply->code }}</td>
											<td>{{ $supply->count }}</td>
											<td>{{ $supply->price }}</td>
											<td>{{ $supply->user->name }}</td>
											<td>{{ $supply->subCategory->name }}</td>

                                            <td>
                                                <form action="{{ route('supplies.destroy',$supply->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('supplies.show',$supply->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('supplies.edit',$supply->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm m-2"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $supplies->links() !!}
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table-index').DataTable({
                language: {
                    url :'//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json'
                }
            });
        });
        </script>
@endsection