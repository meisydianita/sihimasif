<!doctype html>
<html lang="en">
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
            <!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <!--begin::Form-->
                  <form class="needs-validation" novalidate>
                    <!--begin::Body-->
                    <div class="card-body">
                      <!--begin::Row-->
                      <div class="row g-3">
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">NPM</label>
                            <input
                            class="form-control form-control-sm"
                            type="text"
                            placeholder="Masukkan Nomor Pokok Mahasiswa"
                            aria-label=".form-control-sm example"
                            />
                        </div>

                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">Nama Lengkap</label>
                            <input
                            class="form-control form-control-sm"
                            type="text"
                            placeholder="Masukkan Nama Lengkap"
                            aria-label=".form-control-sm example"
                            />
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">Tahun Masuk</label>
                            <input
                            class="form-control form-control-sm"
                            type="year"
                            placeholder="Masukkan Tahun Masuk"
                            aria-label=".form-control-sm example"
                            />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col -->
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Jabatan</label>
                        <select class="form-select form-select-sm" aria-label="Small select example">
                          <option selected>Pilih Jabatan</option>
                          <option value="ketua_umum">Ketua Umum</option>
                          <option value="sekretaris_umum">Sekretaris Umum</option>
                          <option value="bendahara_umum">Bendahara Umum</option>
                          <option value="kepala_divisi">Ketua Divisi</option>
                          <option value="sekretaris_divisi">Sekretaris Divisi</option>
                          <option value="anggota">Anggota</option>
                        </select>
                        </div>
                        <!--end::Col -->

                        <!--begin::Col -->
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Divisi</label>
                        <select class="form-select form-select-sm" aria-label="Small select example">
                          <option selected>Pilih Divisi</option>
                          <option value="Kaderisasi">Kaderisasi</option>
                          <option value="Kesekretariatan">Kesekretariatan</option>
                          <option value="Mebiskraf">Media Bisnis dan Kreatif</option>
                          <option value="PSDM">Peningkatan Sumber Daya Mahasiswa</option>
                          <option value="PM">Pengabdian Masyarakat</option>
                          <option value="Kerohanian">Kerohanian</option>
                        </select>
                        </div>
                        <!--end::Col -->

                        <!--begin::Col -->
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Status</label>
                        <select class="form-select form-select-sm" aria-label="Small select example">
                          <option selected>Pilih Status</option>
                          <option value="aktif">Aktif</option>
                          <option value="tidak_aktif">Tidak Aktif</option>
                        </select>
                        </div>
                        <!--end::Col -->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">Email</label>
                            <input
                            class="form-control form-control-sm"
                            type="email"
                            placeholder="Masukkan Email"
                            aria-label=".form-control-sm example"
                            />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">No. Telepon</label>
                            <input
                            class="form-control form-control-sm"
                            type="text"
                            placeholder="Masukkan No. Telepon"
                            aria-label=".form-control-sm example"
                            />
                        </div>
                        <!--begin::Col-->
                        <div class="col">
                            <label for="formFile" class="form-label">Unggah Foto</label>
                            <input class="form-control form-control-sm" type="file" id="formFile">
                        </div>
                        <!--end::Col-->                     

                        <!--begin::Col-->
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-sm btn-outline-secondary" type="button">Batal</button>
                            <button class="btn btn-sm btn-dark" type="submit">Kirim</button> 
                        </div>
                        <!--end::Col-->
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Body-->
                  </form>
                  <!--end::Form-->
                    
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!--end::Row-->
          </div>
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
