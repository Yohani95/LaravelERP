<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      {{-- Sales --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#shop-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-shop"></i><span>Ventas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="shop-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li class="nav-item">
            <a href="{{ route('sales.index') }}">
              <i class="bi bi-circle active"></i><span>Ventas</span>
            </a>
          </li>
        <a class="dropdown-item" href="{{ route('employees.index') }}">
          <i class="bi bi-circle"></i>Orden de Pago
        </a>
        <a class="dropdown-item" href="{{ route('sales.index') }}">
          <i class="bi bi-circle"></i> Ventas Realizadas
        </a>
        <li>
        <a class="dropdown-item" href="{{ route('sold-products.index') }}">
          <i class="bi bi-circle"></i> Productos Vendidos
        </a>
        </ul>
      </li>
      {{-- planification --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#planification-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-easel"></i></i><span>Planificaciones</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="planification-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li class="nav-item">
            <a href="{{ route('companies.index') }}">
              <i class="bi bi-circle active"></i><span>Orden de pedidos</span>
            </a>
          </li>
        <a class="dropdown-item" href="{{ route('job-positions.index') }}">
          <i class="bi bi-circle"></i> Planificar
        </a>
        <li>
        <a class="dropdown-item" href="{{ route('clients.index') }}">
          <i class="bi bi-circle"></i> Producción
        </a>
        </li>
        <li>
          <a class="dropdown-item" href="{{ route('clients.index') }}">
            <i class="bi bi-circle"></i> Despacho
          </a>
          </li>
        </ul>
      </li>
      {{-- admin --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journals"></i><span>Administración</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li class="nav-item">
            <a href="{{ route('companies.index') }}">
              <i class="bi bi-circle active"></i><span>Empresa</span>
            </a>
          </li>
          <a class="dropdown-item" href="{{ route('cellars.index') }}" >
            <i class="bi bi-circle"></i>
            Bodegas
        </a>
        <a class="dropdown-item" href="{{ route('employees.index') }}">
          <i class="bi bi-circle"></i>Empleados
        </a>
        <a class="dropdown-item" href="{{ route('job-positions.index') }}">
          <i class="bi bi-circle"></i> Cargos
        </a>
        <li>
        <a class="dropdown-item" href="{{ route('clients.index') }}">
          <i class="bi bi-circle"></i> Clientes
        </a>
         <li class="nav-item">
          <a href="{{ route('providers.index') }}">
            <i class="bi bi-circle active"></i><span>Proveedores</span>
          </a>
         </li>
        </ul>
      </li>
      {{-- finances --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-currency-exchange"></i><span>Finanzas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <a class="dropdown-item" href="{{ route('ingresses.index') }}">
            <i class="bi bi-circle"></i> Ingresos
        </a>
        <a class="dropdown-item" href="{{ route('egresses.index') }}">
          <i class="bi bi-circle"></i>Egresos
        </a>
        <a class="dropdown-item" href="{{ route('categories-finances.index') }}">
             <i class="bi bi-circle"></i>Categoria
        </a>
        <a class="dropdown-item" href="{{ route('payment-methods.index') }}">
          <i class="bi bi-circle"></i>Metodos de Pagos
        </a>
        
        </ul>
      </li>
      {{-- Dtes --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#dte-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-receipt"></i><span>DTEs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
       </li>
        <ul id="dte-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li class="nav-item">
          <a class="dropdown-item" href="{{ route('dtes.index') }}">
            <i class="bi bi-circle"></i> Boletas
        </a>
        </li>
        <li class="nav-item">
        <a class="dropdown-item" href="{{ route('dtes.index') }}">
          <i class="bi bi-circle"></i>Facturas
        </a>
        </li>
        <li class="nav-item">
        <a class="dropdown-item" href="{{ route('dtes.index') }}">
             <i class="bi bi-circle"></i>Notas de Creditos
        </a>
         </li>
        <li class="nav-item">
          <a class="dropdown-item" href="{{ route('certificados-digitales.index') }}">
            <i class="bi bi-circle"></i>Certificado Digital
         </a>
         </li>
        <li class="nav-item">
          <a class="dropdown-item" href="{{ route('cafs.index') }}">
            <i class="bi bi-circle"></i>CAFs
         </a>
        </li>
         </ul>
      </li>
      {{-- inventory --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#inventory-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-boxes"></i><span>Inventario</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="inventory-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('products.index')}}">
              <i class="bi bi-circle"></i><span>Productos</span>
            </a>
          </li>
          <li>
            <a href="{{route('supplies.index')}}">
              <i class="bi bi-circle"></i><span>Insumos</span>
            </a>
          </li>
          <li>
            <a href="{{route('activos.index')}}">
              <i class="bi bi-circle"></i><span>Activos</span>
            </a>
          </li>
          <li>
            <a href="{{route('categories.index')}}">
              <i class="bi bi-circle"></i><span>Categorias</span>
            </a>
          </li>
          <li>
            <a href="{{route('sub-categories.index')}}">
              <i class="bi bi-circle"></i><span>Sub-Categorias</span>
            </a>
          </li>
        </ul>
      </li>
<!-- End Components Nav -->

      {{-- *********** --}}
      <li class="nav-heading">Paginas</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('user.profile')}}">
          <i class="bi bi-person"></i>
          <span>Mi Perfil</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('users.index')}}">
          <i class="bi  bi-people-fill"></i>
          <span>Usuarios</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('users.index')}}">
          <i class="bi  bi-person-badge"></i>
          <span>Roles</span>
        </a>
      </li>
      </li><!-- End Error 404 Page Nav -->

  </aside><!-- End Sidebar-->