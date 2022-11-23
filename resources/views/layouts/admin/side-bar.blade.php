<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      {{-- admin --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Administración</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('companies.index') }}">
              <i class="bi bi-circle"></i><span>Empresa</span>
            </a>
          </li>
          <a class="dropdown-item" href="{{ route('cellars.index') }}">
            Bodegas
        </a>
        <a class="dropdown-item" href="{{ route('employees.index') }}">
            Empleados
        </a>
        <a class="dropdown-item" href="{{ route('job-positions.index') }}">
            Cargos
        </a>
        <a class="dropdown-item" href="{{ route('clients.index') }}">
            Clientes
        </a>
        </ul>
      </li>
      {{-- finances --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-currency-exchange"></i><span>Finanzas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <a class="dropdown-item" href="{{ route('ingresses.index') }}">
            Ingresos
        </a>
        <a class="dropdown-item" href="{{ route('egresses.index') }}">
            Egresos
        </a>
        <a class="dropdown-item" href="{{ route('categories-finances.index') }}">
            Categoria
        </a>
        </ul>
      </li>
      {{-- iventory --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#inventory-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Inventario</span><i class="bi bi-chevron-down ms-auto"></i>
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
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

  </aside><!-- End Sidebar-->