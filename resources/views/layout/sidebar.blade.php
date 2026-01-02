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
          <a href="#l" class="brand-link">
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
            <!-- Sekretaris Umum -->
            @if (Str::length(Auth::guard('user')->user()) > 0)
            @if (Auth::guard('user')->user()->level=="Sekretaris Umum")
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-house"></i>
                  <p>Beranda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-envelope"></i>
                  <p>
                    Surat-menyurat
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('suratmasuk.index')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Surat Masuk</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('suratkeluar.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Surat Keluar</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ route('sertifikat.index') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-file"></i> 
                  <p>Sertifikat</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('dokumenkegiatan.index') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-file-fragment"></i>
                  <p>Dokumen Kegiatan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('member.index') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-users"></i>
                  <p>Anggota</p>
                </a>
                </li>
            @endif
            @endif
            
            <!-- Bendahara Umum -->
            @if (Str::length(Auth::guard('user')->user()) > 0)
            @if (Auth::guard('user')->user()->level=="Bendahara Umum")
              <li class="nav-item">
                <a href="{{ route('home-bendum') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-house"></i>
                  <p>Beranda</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-envelope"></i>
                  <p>
                    Kas Masuk
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('iuran.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Iuran</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('pemasukan.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Pemasukan</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ route('kaskeluar.index') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-file"></i> 
                  <p>Kas Keluar</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('laporankas.index') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-file-fragment"></i>
                  <i class=""></i>
                  <p>Laporan Kas</p>
                </a>
              </li>
            @endif
            @endif

            <!-- Anggota -->
            @if (Str::length(Auth::guard('anggota')->user()) > 0)
            @if (Auth::guard('anggota')->user()->level=="Anggota")
              <li class="nav-item">
                <a href="{{ route('home-anggota') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-house"></i>
                  <p>Beranda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-envelope"></i>
                  <p>
                    Surat-menyurat
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('anggota-suratmasuk') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Surat Masuk</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('anggota-suratkeluar') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Surat Keluar</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ route('anggota-sertifikat') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-file"></i> 
                  <p>Sertifikat</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('anggota-dokumenkegiatan') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-file-fragment"></i>
                  <i class=""></i>
                  <p>Dokumen Kegiatan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-envelope"></i>
                  <p>
                    Kas Masuk
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Iuran</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Pemasukan</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-file"></i> 
                  <p>Kas Keluar</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-file-fragment"></i>
                  <i class=""></i>
                  <p>Laporan Kas</p>
                </a>
              </li>

            @endif
            @endif
            </ul>

            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
</body>
</html>