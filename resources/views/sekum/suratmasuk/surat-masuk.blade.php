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
                    <input type="text" name="table_search" class="form-control form-control-sm float-left" placeholder="Pencarian">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-sm btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                  <div class="ms-auto">
                          <a href="{{ route('suratmasuk.create') }}"
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
                          <th class="fw-normal">Nomor Surat</th>
                          <th class="fw-normal">Tanggal Surat</th>
                          <th class="fw-normal">Asal Surat</th>
                          <th class="fw-normal">Perihal</th>
                          <th class="fw-normal">File Surat</th>
                          <th class="fw-normal">Kelola</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($allsuratmasuk as $key => $r)
                          <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $r->nomor_surat }}</td>
                              <td>{{ $r->tanggal_surat }}</td>
                              <td>{{ $r->asal_surat }}</td>
                              <td>{{ $r->perihal }}</td>
                              <td>
                                <a href="{{ Storage::url('SuratMasuk/'.$r->file_surat) }}" target="_blank" style="color:inherit;text-decoration:none;">
                                  <i class="far fa-eye"></i>
                               </a> |
                                <a href="{{ Storage::url('SuratMasuk/'.$r->file_surat) }}" download style="color:inherit;text-decoration:none;">
                                  <i class="fas fa-download"></i>
                               </a>
                              </td>
                              <td>
                                <form action="{{ route('suratmasuk.destroy', $r->id) }}" method="POST">
                                  <a href="{{ route('suratmasuk.edit', $r->id) }}" style="color:inherit;text-decoration:none;">
                                    <i class="fas fa-pen"></i>
                                  </a>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" style="background:none;border:none;" class="justify-content-center">
                                    <i class="fas fa-trash"></i>
                                  </button>
                                </form>
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
