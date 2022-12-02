
<div class="pagetitle">
    <h1>Resumen</h1>
    <nav>
      <ol class="breadcrumb">
       <li class="breadcrumb-item"> <a href="{{route('home')}}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
        {{-- <li class="breadcrumb-item active">Usuario</li> --}}
      </ol>
    </nav>
</div>
<section class="section dashboard">
{{-- ventas del dia --}}
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
  
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
  
                  <div class="card-body">
                    <h5 class="card-title">Ventas <span>| Hoy</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$totalDay[0]->total}}</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Crecimiento</span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Sales Card -->

               <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
  
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
  
                  <div class="card-body">
                    <h5 class="card-title">Ingresos <span>| Este Mes</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$totalMonth[0]->total}}</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">Crecimiento</span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Revenue Card -->
                <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">
  
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filtro</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
  
                  <div class="card-body">
                    <h5 class="card-title">Documentos Emitidos <span>| Este Mes</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-card-checklist"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$dte}}</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Decrecimiento</span>
  
                      </div>
                    </div>
  
                  </div>
                </div>
  
              </div><!-- End Customers Card -->

              </div>
        </div>
    </div>

    
{{-- resumen de graficos --}}
<div class="row">
    <div class="col-sm-4 center text-center" style="max-width:600px; margin:auto;">
        <div class="card recent-sales overflow-auto">
         <div class="card-body">
          <div class="card-title">Ganancias por Mes</div>
           <canvas id="months" width="400" height="400"></canvas>
         </div>
        </div>
    </div>
    <div class="col-sm-4 center text-center" style="max-width:600px; margin:auto;">
        <div class="card recent-sales overflow-auto">
         <div class="card-body">
            <div class="card-title">Productos mas Vendidos <span> | Este Mes</span></div>
           <canvas id="products" width="400" height="400"></canvas>
         </div>
        </div>
    </div>
    <div class="col-sm-4 center text-center" style="max-width:600px; margin:auto;">
        <div class="card recent-sales overflow-auto">
         <div class="card-body">
          <div class="card-title">Participación de productos<span> | Este Mes</span></div>
           <canvas id="productsSell" width="400" height="400"></canvas>
         </div>
        </div>
    </div>
</div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script>
    fillMonths()
    FillChartProducts()
    FillChartSell()
    function fillMonths(){
    var sale=<?php echo json_encode($sale); ?>; 
    var arrayCalculo=[];
    var arrayName=[];
     for(item of sale){
    arrayName.push(item.mes);
     arrayCalculo.push(Number(item.total).toFixed(1));
     }
    const data = {
    labels: arrayName,
    datasets: [{
      label: 'Ganancias según mes',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: arrayCalculo,
    }]
    };

    const config = {
    type: 'line',
    data: data,
    options: {}
    };
    const myChart = new Chart(
      document.getElementById('months'),
    config
    );
  }
  function FillChartProducts(){
    var protuct=<?php echo json_encode($product); ?>; 
    var arrayName=[];
    var arrayCalculo=[];
    console.log(protuct)
     for(item of protuct){
     arrayName.push(item.name.trim());
     arrayCalculo.push(Number(item.quantity).toFixed(1));
     }
     const ctx = document.getElementById('products');
    const myChartr = new Chart(ctx , {
    type: 'bar',
    data: {
        labels: arrayName,
        datasets: [{
            label: ['Productos vendidos '],
            data:arrayCalculo,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        },]
    },
    
    });
  }
  function FillChartSell(){
    var sold=<?php echo json_encode($soldParticipe); ?>; 
    var arrayCalculo=[];
    var arrayName=[];
     for(item of sold){
    arrayName.push(item.name);
     arrayCalculo.push(Number(item.total).toFixed(1));
     }
    const ctx = document.getElementById('productsSell');
    const myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: arrayName,
        datasets: [{
            label: 'Participación',
            data: arrayCalculo,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        },]
    },

        });
    }
</script>
