<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login | HIMASIF</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="login">

  <!-- PANEL KANAN -->
  <div class="group">
    <div class="frame">
      <div class="div">
        <div class="group-2">
          <div class="text-wrapper">Selamat Datang</div>
          <p class="p">
            Langkah kecil hari ini, perubahan besar esok hari. Yuk masuk!
          </p>

          <div class="frame-wrapper">
            <div class="group-wrapper">
              <div class="group-3">

                <div class="form-group">
                  <label>Nama Pengguna</label>
                  <input type="text" placeholder="Masukkan nama pengguna">
                </div>

                <div class="form-group">
                  <label>Kata Sandi</label>
                  <input type="password" placeholder="Masukkan kata sandi">
                </div>

                <button class="login-button">Masuk</button>

              </div>
            </div>
          </div>
        </div>

        <p class="belum-memiliki-akun">
          Belum memiliki akun? <span class="text-wrapper-6">Daftar</span>
        </p>

      </div>
    </div>
  </div>

  <!-- ROBOT -->
  <img class="robot" src="{{ asset('img/robot.png') }}" alt="Robot HIMASIF">

  <!-- TEKS KIRI (POSISI ASLI) -->
  <h2 class="text-wrapper-8">
    Berproses,<br>
    Berorganisasi,<br>
    Berinovasi Bersama<br>
    HIMASIF.
  </h2>

  <p class="text-wrapper-9">
    Akses semua kebutuhan administrasi dan kegiatan HIMASIF secara cepat,
    praktis, dan terpusat.
  </p>

</div>

</body>
</html>
