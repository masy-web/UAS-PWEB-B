  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img class="profile-img " src="dist/img/logo.jpg" style="width: 20px; height: 20px;color: blue; margin-left: auto; margin-right: auto;">
      <span class="brand-text font-weight-primary " >SatwaKu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block" style="color: #007bff;">@uaspwebB</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item " >
            <a href="<?= base_url; ?>/home" class="nav-link" style="color: #007bff;">
              <i class="nav-icon fas fa-home"></i>
              <p >
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Data</li>
          <li class="nav-item">
            <a href="<?= base_url; ?>/jenis" class="nav-link" style="color: #007bff;">
              <i class="nav-icon fas fa-server"></i>
              <p>
                Data Jenis Hewan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url; ?>/hewan" class="nav-link" style="color: #007bff;">
              <i class="nav-icon fas fa-dragon"></i>
              <p>
                Data Hewan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url; ?>/user" class="nav-link" style="color: #007bff;">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-header">Extra</li>
          <li class="nav-item">
            <a href="<?= base_url; ?>/about" class="nav-link" style="color: #007bff;">
              <i class="nav-icon fa fa-users"></i>
              <p>
                About Us
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
