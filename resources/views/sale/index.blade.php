@extends('layouts.app')

@section('template_title')
    Sale
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
                                {{ __('Sale') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ url('sales/export') }}" class="btn btn-outline-success btn-sm float-right"  data-placement="left">
                                  {{ __('Descargar Excel') }}
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
                                        <th>No</th>
                                        
										<th>Description</th>
										<th>Iva</th>
										<th>Total</th>
										<th>Neto</th>
										<th>Type Document</th>
										<th>Discount</th>
										<th>Status Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sales as $sale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $sale->description }}</td>
											<td>{{ $sale->iva }}</td>
											<td>{{ $sale->total }}</td>
											<td>{{ $sale->neto }}</td>
											<td>{{ $sale->type_document }}</td>
											<td>{{ $sale->discount }}</td>
											<td>{{ $sale->status->name }}</td>

                                            <td>
                                                <form action="{{ route('sales.destroy',$sale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sales.show',$sale->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-ban"></i> Anular</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
