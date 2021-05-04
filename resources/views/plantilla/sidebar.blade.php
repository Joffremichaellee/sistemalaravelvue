
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="admin/index3.html" class="brand-link">
    <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="image">
        <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      
      <div class="info">
        <a href="#" class="d-block"> {{ Auth::user()->name }}  </a>
      </div>

    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">

      <div class="input-group" data-widget="sidebar-search">

        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>

      </div>

    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <li @click="menu=0" class="nav-item menu-open">

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="{{ route('inicio') }}"class="nav-link active">
                <i class="fa fa-home nav-icon"></i> 
                <p>Menú</p>
              </a>
            </li>

          </ul>

        </li>

        <li class="nav-item">

          <a  href="#" class="nav-link">
            <i class="nav-icon fas fa-briefcase"></i>
            <p>
              Almacen
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>

          <ul class="nav nav-treeview subindices">

            <li  class="nav-item">

              <a href="{{ route('categoriaindex') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Categorias</p>
              </a>

            </li>

            <li @click="menu=2" class="nav-item">
              <a href="#" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Productos</p>
              </a>
            </li>

          </ul>
          
        </li>

        <li class="nav-item">

          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cart-plus"></i>
            <p>
              Compras
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview subindices">

            <li @click="menu=3" class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ingresos</p>
              </a>
            </li>

            <li @click="menu=4" class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Proveedores</p>
              </a>
            </li>

          </ul>

        </li>

        <li class="nav-item">

          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p>
              Ventas
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>

          <ul class="nav nav-treeview subindices">

            <li @click="menu=5" class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ventas</p>
              </a>
            </li>

            <li @click="menu=6" class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Clientes</p>
              </a>
            </li>

          </ul>

        </li>
        
        <li class="nav-item">

          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-search"></i>
            <p>
              Search
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>

          <ul class="nav nav-treeview subindices">

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Search</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Enhanced</p>
              </a>
            </li>

          </ul>
          
        </li>

        <li class="nav-header">LABELS</li>
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Important</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Warning</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Informational</p>
          </a>
        </li>

      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>