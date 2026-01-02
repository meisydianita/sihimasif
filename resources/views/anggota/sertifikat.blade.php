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
              </div>
              </div> 
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th class="fw-normal" >Id</th>
                      <th class="fw-normal" >Nomor Sertifikat</th>
                      <th class="fw-normal" >Nama Penerima</th>
                      <th class="fw-normal" >Peran Penerima</th>
                      <th class="fw-normal" >Nama Kegiatan</th>
                      <th class="fw-normal" >Tanggal Sertifikat</th>
                      <th class="fw-normal" >File Surat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
