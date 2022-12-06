@extends('layouts.app')

@section('template_title')
    Caf
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
                                {{ __('Caf') }}
                            </span>   
                             <div class="float-right">
                                <a data-bs-toggle="modal" data-bs-target="#modalDownload" class="btn btn-outline-success btn-sm float-right"  data-placement="left">
                                    Descargar CAF
                                  </a>
                                <a href="{{ route('cafs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Name</th>
										<th>Ruta</th>
										<th>Expiration Date</th>
										<th>Quantity Avaible</th>
										<th>Initial Folio</th>
										<th>Last Folio</th>
										<th>Current Folio</th>
										<th>Document Code</th>
										<th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cafs as $caf)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caf->name }}</td>
											<td>{{ $caf->ruta }}</td>
											<td>{{ $caf->expiration_date }}</td>
											<td>{{ $caf->quantity_avaible }}</td>
											<td>{{ $caf->initial_folio }}</td>
											<td>{{ $caf->last_folio }}</td>
											<td>{{ $caf->current_folio }}</td>
											<td>{{ $caf->document_code }}</td>
											<td>{{ $caf->user_id }}</td>

                                            <td>
                                                <form action="{{ route('cafs.destroy',$caf->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cafs.show',$caf->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cafs.edit',$caf->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
@section('modal')
<div  class="modal fade" id="modalDownload" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Descargar Caf</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <div class="row">
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Folio:</label>
                <div class="col-sm-10">
                  <select id="doc" class="form-select" aria-label="Default select example" required>
                    <option selected="" value="">Seleccione tipo de documento</option>
                    <option value="39">Boleta Afecta</option>
                    <option value="41">Boleta Exenta</option>
                    <option value="33">Factura Afecta</option>
                    <option value="34">Factura Exenta</option>
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">N°Folios:</label>
                <div class="col-sm-10">
                  <input class="form-control" type="number" name="" id="quantity_folio" required>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Ambiente:</label>
                <div class="col-sm-10">
                  <select id="doc" class="form-select" aria-label="Default select example" required>
                    <option selected="" value="">Seleccione Ambiente</option>
                    <option value="1">Producción</option>
                    <option value="0">Certificación</option>
                  </select>
                </div>
              </div>
            </form>
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
          <button onclick="downloadCaf" type="button" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div><!-- End Basic Modal-->
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
        function downloadCaf(){
            try {
               var doc= document.getElementById('doc').value
            return new Promise(resolve=>{
            let token = $("input[name=_token]").val()
            $.ajax({
            type: "POST",
            headers: {
            'X-CSRF-TOKEN': token
                     },
            url: 'https://servicios.simpleapi.cl/api/folios/get/'+doc+'/'+$('#quantity_folio').val(),
            data: {
                
            },
            dataType: "text",
            success: function(data){
               
            }
            });
            })
            } catch (error) {
                return '500'
            }
        }
        </script>
@endsection