@extends('layouts.app')

@section('template_title')
    Sale
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="pagetitle">
    <h1>Modulo de Ventas</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
<div class="section dashboard container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="col-xxl-12 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
    
                            <span id="card_title">
                                {{ __('Lista de Productos') }}
                            </span>
                        </div>
                    </div>
                    <br>
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
                                        <th>Categoría</th>
    
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->code }}</td>
                                            <td id="countProduct">{{ $product->count }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->subCategory->name }}</td>
    
                                            <td>
                                                {{-- <form action="{{ route('products.destroy',$product->id) }}" method="POST"> --}}
                                                    <a type="button" id="addRow" onclick="addProductButton({{$product}})" class="badge bg-success " ><i class="fa-solid fa-cart-plus"></i></i>  Añadir </a>
                                                {{-- </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
    
                            <span id="card_title">
                                <i class="fa-solid fa-cart-plus"></i>
                                {{ __('Lista de Productos en Carrito') }}
                            </span>
                        </div>
                    </div>
                    <br>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table-index-sold" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        
                                        <th>Nombre</th>
                                        <th>Código</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Categoría</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="table-index-sold-body" >
                                      
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
        <!-- Recent Activity -->

            <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datos de Venta <span>| </span></h5>
                <form action="">
              <ul class="list-group">
                <li class="list-group-item" ><i class="bi bi-cash me-1 text-primary"></i>Monto Neto : <input id="montoNeto" class="" value="0" disabled style="border: 0" ></li>
                <li class="list-group-item" ><i class="bi bi-collection me-1 text-primary"></i>Iva : <br> <input  id="iva" class="" value="0" disabled style="border: 0" ></li>
                <li class="list-group-item" ><i class="bi bi-check-circle me-1 text-success"></i>Total : <br> <input id="totalMonto"  class="" value="0" disabled style="border: 0"></li>
                <li class="list-group-item"><i class="bi bi-piggy-bank me-1 text-warning"></i>Descuentos : <input  class="" value="0" disabled style="border: 0"></li>
              </ul>
              <div class="d-grid gap-2 mt-3">
                <select class="form-select" aria-label="Default select example" required>
                  <option selected="" value="">Seleccione tipo de documento</option>
                  <option value="39">Boleta Afecta</option>
                  <option value="41">Boleta Exenta</option>
                  <option value="33">Factura Afecta</option>
                  <option value="34">Factura Exenta</option>
                </select>
              </div>
              <div class="d-grid gap-2 mt-3">
                <select class="form-select" aria-label="Default select example" required>
                  <option selected="" value="">Seleccione Medio de pago</option>
                  <option value="1">Efectivo</option>
                  <option value="2">Transferencia</option>
                  <option value="3">Debito</option>
                </select>
              </div>
              <div class="d-grid gap-2 mt-3"> <button id="buttonPay" class="btn btn-primary" onclick="payProducts()">
                Realizar Pago</button></div>
            </div>
            </form>
          </div><!-- End Recent Activity -->
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" herf="https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

 <script>
        var soldProduct=[];
        $(document).ready(function () {
            $('#table-index').DataTable({
                language: {
                    url :'//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json'
                }
            });
            $('#table-index-sold').DataTable(
                {
                    language: {
                    url :'//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json'
                    }
                }
            )
            $('#spinner').hide();
        });
        function addProductButton(product){
            if(product.count<=0){
                return; 
            }
            soldProduct.push(product)
            console.log(soldProduct)
            addRow(product)
        }
        function updateTotal(monto){
            var total=document.getElementById('totalMonto')
            var iva =document.getElementById('iva')
            var neto =document.getElementById('montoNeto')
            if(monto<0){
                neto.value=((Number(total.value)+Number(monto))*0.81).toFixed(0)
                iva.value=((Number(total.value)+monto)*0.19).toFixed(0)
                total.value=Number(total.value)+Number(monto)
            }else{
                neto.value=((Number(total.value)+Number(monto))*0.81).toFixed(0)
                iva.value=((Number(total.value)+Number(monto))*0.19).toFixed(0)
                total.value=Number(total.value)+Number(monto)
            }

        }
        function deleteRow(){
            var table = $('#table-index-sold').DataTable();
            table.one('click', '.delt', function() {
                let $tr = $(this).closest('tr');
                var valor = $(this).closest('tr').find('td:eq(4)').text();
                var code = $(this).closest('tr').find('td:eq(2)').text();
                updateTotal(Number(-valor))
                const solds=soldProduct.filter((item) => item.code !== code)
                soldProduct=solds
                // Le pedimos al DataTable que borre la fila
                table.row($tr).remove().draw(false);
                });
        }
        function addRow(product){
            var t = $('#table-index-sold').DataTable();          
            t.row.add(
                [
                    soldProduct.length,
                    product.name, 
                    product.code, 
                    product.count,
                    product.price, 
                    product.sub_category.name,
                    '<a type="button" onclick="deleteRow()" class="badge bg-danger delt"><i class="fa fa-fw fa-trash"></i> Eliminar </a>',
            ]).draw(false);
            updateTotal(product.price)
        }
        async  function payProducts(){
            const btncompra = document.getElementById('buttonPay');
            btncompra.innerHTML='<span id="spinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" ></span> Realizando Pago ...';
            btncompra.disabled = true; 
            var total=document.getElementById('totalMonto')
            var response=await responsePay()
            console.log(response)
            if(response==200){
                new swal({
                        title : 'Exito',
                        type  : 'success',
                        text  : "Pago Realizado Correctamente.",
                        confirmButtonText: "Aceptar"
                    }).then((value) => {
                        btncompra.innerHTML = "Realizar Pago";
                        btncompra.disabled = false;
                        window.location.href = "{{ route('shop.index')}}";
                    });
                }else{
                new swal({
                        title : 'Error',
                        type  : 'error',
                        text  : "Error al Realizar Pago, Contacte a Soporte Tecnico.",
                        confirmButtonText: "Aceptar"
                    }).then((value) => {
                        btncompra.innerHTML = "Realizar Pago";
                        btncompra.disabled = false;
                        
                    });
            }
        }
        function responsePay(){
            try {
                return new Promise(resolve=>{
            let token = $("input[name=_token]").val()
            $.ajax({
            type: "POST",
            headers: {
            'X-CSRF-TOKEN': token
                     },
            url: {{route('sales.index')}},
            data: soldProduct,
            dataType: "text",
            success: function(reponse){
                if (reponse=='success'){
                    resolve('200');
                }else{
                    resolve('500')
                }
            }
            });
            })
            } catch (error) {
                return '500'
            }
        }
    </script>
@endsection