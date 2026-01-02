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
      <main class="app-main">
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
                        <!--begin::Col -->
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Jenis</label>
                        <select class="form-select form-select-sm" aria-label="Small select example">
                          <option selected>Pilih Jenis Surat</option>
                          <option value="sk_pengangkatan">Surat Kerja Pengangkatan</option>
                          <option value="peminjaman_tempat_barang">Peminjaman Barang/Tempat</option>
                          <option value="izin_kegiatan">Izin Kegiatan</option>
                          <option value="undangan">Undangan</option>
                          <option value="permohonan_dana">Permohonan Dana</option>
                          <option value="aktif_organisasi">Aktif Organisasi</option>
                          <option value="peringatan">Peringatan</option>
                        </select>
                        </div>
                        <!--end::Col -->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">Nomor Surat</label>
                            <input
                            class="form-control form-control-sm"
                            type="text"
                            placeholder="Masukkan Nomor Surat"
                            aria-label=".form-control-sm example"
                            />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Tanggal Surat</label>
                          <input
                            type="date"
                            class="form-control form-control-sm"
                            required
                          />
                        </div>
                        <!--end::Col-->                     

                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">Asal Surat</label>
                            <input
                            class="form-control form-control-sm"
                            type="text"
                            placeholder="Masukkan Asal Surat"
                            aria-label=".form-control-sm example"
                            />
                        </div>

                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">Perihal</label>
                            <input
                            class="form-control form-control-sm"
                            type="text"
                            placeholder="Masukkan Perihal"
                            aria-label=".form-control-sm example"
                            />
                        </div>

                        <div class="col-md-6">
                            <label for="formFile" class="form-label">Unggah Dokumen</label>
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
