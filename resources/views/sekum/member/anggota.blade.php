<!doctype html>
<html lang="en">
  <title>Surat Masuk</title>
@include('layout.head')
  <!--begin::Body-->
  <body class="fixed-header sidebar-expand-lg sidebar-open bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      @include('layout.header')
      @include ('layout.sidebar')
       <!--begin::App Main-->
      <main class="app-main pt-4">
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center gap-2 w-100">
                  <div class="input-group input-group-sm" style="width: 280px;">
                    <input type="text" name="table_search" class="form-control form-control-sm float-left" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-sm btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                  <div class="input-group input-group-sm" style="width: 280px;">
                    <select class="form-select form-select-sm" aria-label="Small select example" style="width: 280px";>
                              <option selected>Pilih Divisi</option>
                              <option value="Kaderisasi">Kaderisasi</option>
                              <option value="Kesekretariatan">Kesekretariatan</option>
                              <option value="Mebiskraf">Media Bisnis dan Kreatif</option>
                              <option value="PSDM">Peningkatan Sumber Daya Mahasiswa</option>
                              <option value="PM">Pengabdian Masyarakat</option>
                              <option value="Kerohanian">Kerohanian</option>
                            </select>  
                  </div>
                  <div class="ms-auto">
                          <a href="{{ route('member.create') }}"
                            class="btn btn-sm btn-dark">
                            Tambah
                          </a>
                  </div>
              </div>
              </div> 
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                        <tr>
                          <th class="fw-normal">Id</th>
                          <th class="fw-normal">NPM</th>
                          <th class="fw-normal">Nama Lengkap</th>
                          <th class="fw-normal">Tahun Masuk</th>
                          <th class="fw-normal">Jabatan</th>
                          <th class="fw-normal">Divisi</th>
                          <th class="fw-normal">Status</th>
                          <th class="fw-normal">Email</th>
                          <th class="fw-normal">No. Telepon</th>
                          <th class="fw-normal">Alamat</th>
                          <th class="fw-normal">Foto</th>
                          <th class="fw-normal">Kelola</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($allmember as $key=>$r)
                          <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $r->npm }}</td>
                            <td>{{ $r->nama_lengkap }}</td>
                            <td>{{ $r->tahun_masuk }}</td>
                            <td>{{ $r->jabatan }}</td>
                            <td>{{ $r->divisi }}</td>
                            <td>{{ $r->status }}</td>
                            <td>{{ $r->email }}</td>
                            <td>{{ $r->no_hp }}</td>
                            <td>{{ $r->alamat }}</td>
                            <td>
                              <a href="{{ Storage::url('Member/'.$r->foto) }}" target="_blank" style="color:inherit;text-decoration:none;">
                                <img src="{{ Storage::url('Member/'.$r->foto) }}" 
                              class="img-thumbnail"
                              style="width: 80px; height: 80px; object-fit: cover;">
                              </a>
                            </td>
                            <td>
                              <form action="{{ route('member.destroy', $r->id) }}" method="POST">
                                  <a href="{{ route('member.edit', $r->id) }}" style="color:inherit;text-decoration:none;">
                                    <i class="fas fa-pen"></i>
                                  </a>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" style="background:none;border:none;">
                                    <i class="fas fa-trash"></i>
                                  </button>
                              </form>
                            </td>
                            </td>
                          </tr>
                        @endforeach                        
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- begin pagination -->
                <nav aria-label="Page navigation example" class="mt-3">
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              <!-- end pagination -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        </div>
        <!--end::App Content-->


      </main>
      <!--end::App Main-->
      @include('layout.footer')
    </div>
    <!--end::App Wrapper-->
    @include('layout.script')
  </body>
  <!--end::Body-->
</html>
