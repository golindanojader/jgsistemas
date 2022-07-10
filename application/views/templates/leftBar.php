  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= BASE_URL()?>" class="brand-link">
     
      <span class="brand-text font-weight-light ml-5">JGSISTEMAS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="<?= BASE_URL()?>products" class="nav-link">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Almacén
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?= BASE_URL()?>rate" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
               Tasa de cambio
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
       

          <li class="nav-item">
            <a href="<?= BASE_URL()?>taxe" class="nav-link">
              <i class="nav-icon fas fa-percent"></i>
              <p>
               Impuestos
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>



       
       
        
         
     
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>