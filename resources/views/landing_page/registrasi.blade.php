<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>Sistem Informasi PGRI Jatibarang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/pgri.png" rel="icon">
  <link href="assets/img/pgri.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v4.1.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{url('/')}}">SIP PGRI JATIBARANG</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                  <li><a href="{{url('tentang')}}">Visi dan Misi</a></li>
                  <li><a href="{{url('kepengurusan')}}">Struktur Kepengurusan</a></li>
                  <li><a href="{{url('sejarah')}}">Sejarah</a></li>
                  <li><a href="{{url('arti')}}">Arti Lambang PGRI</a></li>
                  <li><a href="{{url('sumpah')}}">Sumpah dan Ikrar Guru Indonesia</a></li>
              </li>
            </ul>
          </li>
          </li>
          <li><a href="{{url('berita')}}">Berita</a></li>
          <li><a href="{{url('kontak')}}">Kontak</a></li>
          <li><a href="{{url('registrasi')}}" class="getstarted">Registrasi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Registrasi</h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Registrasi</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <center><h3>REGISTRASI CALON ANGGOTA PGRI CABANG JATIBARANG</h3></center>
              <div class="entry-img">
                <img src="assets/img/pgri.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap"required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nik" class="col-sm-3 col-form-label">Nomor KTP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" required placeholder="Tempat Lahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option selected disabled>--Pilih Jenis Kelamin--</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_hp" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Telepon" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9">
                        <select name="agama" id="agama" class="form-control" required>
                            <option selected disabeled>--Pilih Agama--</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="Alamat" rows="5" placeholder="Alamat Lengkap" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan"required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kabupaten" class="col-sm-3 col-form-label">Kabupaten </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Kabupaten"required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Provinsi" class="col-sm-3 col-form-label">Provinsi </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi"required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat_kerja" class="col-sm-3 col-form-label">Tempat Kerja </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="tempat_kerja" rows="5" placeholder="Nama Institusi/Instansi" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-sm-3 col-form-label">Tugas</label>
                    <div class="col-sm-9">
                        <select name="tugas" id="tugas" class="form-control" required>
                            <option selected disabled>--Pilih Tugas--</option>
                            <option value="Kepala Sekolah ">Kepala Sekolah</option>
                            <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                            <option value="Guru">Guru</option>
                            <option value="Dosen">Dosen</option>
                            <option value="Kepala TU">Kepala TU</option>
                            <option value="Staff TU">Staff TU</option>
                            <option value="Pendidik PAUD">Pendidik PAUD</option>
                            <option value="Pengawas Sekolah">Pengawas Sekolah</option>
                            <option value="Penjaga Sekolah">Penjaga Sekolah</option>
                            <option value="Pustakawan">Pustakawan</option>
                            <option value="Penilik">Pegawai Dinas Pendidikan</option>
                            <option value="Penilik">Pensiunan</option>
                            <option value="Penilik">Penilik</option>
                            <option value="Instruktur Kursus">Instruktur Kursus</option>
                            <option value="Pengelola PKBM">Pengelola PKBM</option>
                            <option value="Petugas Instalasi">Petugas Instalasi</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status PNS</label>
                    <div class="col-sm-9">
                        <select name="status" id="status" class="form-control" required>
                            <option selected disabeled>--Pilih Status PNS--</option>
                            <option value="PNS">PNS</option>
                            <option value="CPNS">CPNS</option>
                            <option value="NON PNS">NON PNS</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="golongan" class="col-sm-3 col-form-label">Golongan</label>
                    <div class="col-sm-9">
                        <select name="golongan" id="golongan" class="form-control" required>
                            <option selected disabled>--Pilih Golongan--</option>
                            <option value="I/A">I/A</option>
                            <option value="I/B">I/B</option>
                            <option value="I/C">I/C</option>
                            <option value="I/D">I/D</option>
                            <option value="II/A">II/A</option>
                            <option value="II/B">II/B</option>
                            <option value="II/C">II/C</option>
                            <option value="II/D">II/D</option>
                            <option value="III/A">III/A</option>
                            <option value="III/B">III/B</option>
                            <option value="III/C">III/C</option>
                            <option value="III/D">III/D</option>
                            <option value="IV/A">IV/A</option>
                            <option value="IV/B">IV/B</option>
                            <option value="IV/C">IV/C</option>
                            <option value="IV/D">IV/D</option>
                            <option value="IV/E">IV/E</option>
                            <option value="NON PNS">NON PNS</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tingkat" class="col-sm-3 col-form-label">Tingkat Sekolah</label>
                    <div class="col-sm-9">
                        <select name="tingkat" id="tingkat" class="form-control" required>
                            <option selected disabled>--Pilih Tingkat Sekolah--</option>
                            <option value="PAUD">PAUD</option>
                            <option value="TK/RA">TK/RA</option>
                            <option value="SD/MI">SD/MI</option>
                            <option value="SMP/MTs">SMP/MTs</option>
                            <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                            <option value="SLB">SLB</option>
                            <option value="LAIN-LAIN">LAIN-LAIN</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lembaga" class="col-sm-3 col-form-label">Status Lembaga</label>
                    <div class="col-sm-9">
                        <select name="lembaga" id="lembaga" class="form-control" required>
                            <option selected disabled>--Pilih Status Lembaga--</option>
                            <option value="Negeri">Negeri</option>
                            <option value="Swasta">Swasta</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                  <div class="custom-file">
                    <label for="colFormLabel" class="col-sm-4"></label>
                    <div class="col-sm-6 float-right">
                      <input type="file" class="custom-file-input" id="foto" name="foto" aria-describedby="foto" sr-only>
                      <label class="custom-file-label" for="foto"> (Upload Pas Foto *.jpg .jpeg .png) </label>                
                    </div>
                  </div>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesan anda sudah terkirim. Terima Kasih!</div>
                </div>
              <div class="text-center"><button type="submit">Kirim</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>PGRI JATIBARANG</h3>
              <p>
                Jl. Mayor Dasuki Gang Jaya, Jatibarang, Kec. Jatibarang, Kabupaten Indramayu, Jawa Barat 45273<br><br>
                <strong>Phone:</strong> +021 09878976678<br>
                <strong>Email:</strong> pgrijatibarang@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Perangkat Organisasi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Lembaga Konsultasi dan Bantuan Hukum</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Badan Pembina Lembaga Pendidikan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">PGRI Smart Learning and Character Center (PSLCC)</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Lembaga Kajian Kebijakan Pendidikan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Perempuan PGRI</a></li>
            </ul>
          </div>
          
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Layanan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Registrasi</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Temukan Kami</h4>
            <p></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright &copy;2021 <strong><span>PGRI JATIBARANG</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>