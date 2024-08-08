    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-book"></i>
            </div>
            <div class="sidebar-brand-text mx-8">LKP Anissa Gorden Palu</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Admin
        </div>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('daftar'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span class="m-0 font-weight-bold">Daftar</span></a>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('daftar/data_pendaftar'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span class="m-0 font-weight-bold">Data Pendaftaran</span></a>
          </li>

        <!-- Nav Item - Charts -->

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('daftar/jadwal'); ?>">
            <i class="fas fa-fw fa-file"></i>
            <span class="m-0 font-weight-bold">Jadwal</span></a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('daftar/data_usaha'); ?>">
              <i class="fas fa-fw fa-book"></i>
              <span class="m-0 font-weight-bold">Data Usaha</span></a>
            </li>

          <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">


        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Login/logout'); ?>">
                <i class="fas fa-fw fa-user"></i>
                <span class="m-0 font-weight-bold">Logout</span></a>
        </li>


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
