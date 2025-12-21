<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
          <!--begin::Sidebar-->
      <!-- <aside class="app-sidebar bg-body-secondary" data-bs-theme="dark"> -->
      <aside class="app-sidebar bg-body-secondary" data-bs-theme="dark" style="background-color: #003580 !important;">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="../index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{asset('AdminLTE/dist/assets/img/himasif 24-25.png')}}"
              alt="AdminLTE Logo"
              class="brand-image"
            />

            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text">SI HIMASIF</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Beranda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Surat-menyurat
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Surat Masuk</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../index2.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Surat Keluar</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Sertifikat</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Dokumen Kegiatan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Anggota</p>
                </a>
              </li
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
</body>
</html>