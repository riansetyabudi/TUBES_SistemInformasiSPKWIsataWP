  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('AdminLTE-3.2.0') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RIANTRAVEL</span>
    </a>

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
          <li class="nav-item menu-open">
            <a href="http://127.0.0.1:8000/home" class="nav-link active">
              <i class="fa-regular fa-torii-gate"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Tabel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/alternatif" class="nav-link">
                  <i class="nav-icon fa-regular fa-torii-gate"></i>
                  <p>Alternatif Wisata</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/bobot" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bobot Kriteria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/nilai_kriteria" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Kriteria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/normalisasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Normalisasi</p>
                </a>
              </li>
            </li>
            <li class="nav-item">
              <a href="/penilaian_preferensi" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Penilaian Preferensi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/perangkingan" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Perangkingan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/hasil" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Hasil Keputusan</p>
              </a>
              <li class="nav-item">
                <a href="/users" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
            </li>
          </ul>
          </ul>
          </ul>
          </ul>
          </ul>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                  Jenis
                  <i class="right fas fa-angle-left"></i>
              </a>
            </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
                UI Elements
                <i class="fas fa-angle-left right"></i>
            </a>
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
