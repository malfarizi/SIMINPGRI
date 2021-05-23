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

      <h1 class="logo me-auto"><a href="assets/img/1.jpg">SIP PGRI JATIBARANG</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('index')}}" class="active">Home</a></li>
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
         
          <li><a href="{{url('kontak')}}">Kontak</a></li>
          <li><a href="{{url('loginanggota')}}" class="getstarted">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat datang di <br> Sistem Informasi Pengurus PGRI Jatibarang <span></span></h2>
              <p class="animate__animated animate__fadeInUp">Persatuan Guru Republik Indonesia (disingkat PGRI) adalah organisasi di Indonesia yang anggotanya berprofesi sebagai guru. Organisasi ini didirikan dengan semangat perjuangan para guru pribumi pada zaman Belanda, pada tahun 1912 dengan nama Persatuan Guru Hindia Belanda (PGHB). PGRI memiliki afiliasi dengan ASEAN Council of Teachers. PGRI juga tergabung dalam Education International, sebuah organisasi guru dunia yang terdiri dari 172 negara.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Informasi Lebih Lanjut</a>
            </div>
          </div>
        </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Cara Mendaftar kan Diri Menjadi Anggota PGRI Cabang Jatibarang</h2>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Setiap orang yang sudah bekerja sebagai guru sebaiknnya mendaftarkan diri sebagai anggota PGRI. PGRI merupakan salah satu organisasi guru terbesar di Indonesia. Anggotanya tersebar di berbagai wilayah. Guru yang masih bersatus sebagai tenaga kontrak atau honorer pun bisa mendaftarkan diri. Apabila guru sudah mendaftarkan diri sebagai anggota PGRI maka harus mematuhi AD/ART sehingga memperoleh hak sebagai anggota. Bukti keanggotakan ditunjukkan melalui kartu PGRI. Kartu tersebut berlaku selama 5 tahun dan dapat diperbaharui. Berikut ini cara mendaftarkan diri sebagai anggota baru PGRI :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Kunjungi website Sistem Informasi Pengurus PGRI Jatibarang </li>
              <li><i class="ri-check-double-line"></i> Klik Registrasi Anggota Baru.</li>
              <li><i class="ri-check-double-line"></i> Mengisi form sesuai dengan profil masing-masing guru.</li>
              <li><i class="ri-check-double-line"></i> Download Kartu Registrasi PGRI </li>
              <li><i class="ri-check-double-line"></i> Mengirimkan Hardcopy Kartu Registrasi PGRI ke Kantor PGRI Jatibarang untuk verifikasi lebih lanjut. </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <h2><a href="#">Perangkat Kelengkapan Organisasi</a></h2>
        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Lembaga Konsultasi dan Bantuan Hukum</a></h4>
              <p>LKBH ini berperan memberikan saran, pendapat, pertimbangan, dan bantuan penyelesaian masalah hukum kepada badan pimpinan organisasi yang membentuknya tentang permasalahan hukum anggota, pengurus, lembaga pendidikan maupun organisasi PGRI.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Badan Pembina Lembaga Pendidikan</a></h4>
              <p>Untuk mengoordinasikan penyelenggaraan pendidikan pada lembaga pendidikan PGRI, maka dibentuklah Badan Pembina Lembaga Pendidikan (BPLP) yang memiliki kedudukan dan wewenang yang ditetapkan oleh dan bertanggung jawab kepada Pengurus Besar PGRI. </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Asosiasi Profesi dan Keahlian Sejenis (APKS)</a></h4>
              <p>Asosiasi Profesi dan Keahlian Sejenis adalah perangkat kelengkapan organisasi PGRI yang berfungsi membina dan mengembangkan profesi guru. Salah satu jati diri PGRI sebagai organisasi profesi, maka untuk melakukan pembinaan dan pengembangan profesi guru PGRI telah menetapkan perangkat kelengkapan organisasi, yaitu Asosiasi Profesi dan Keahlian Sejenis disingkat APKS. </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">PGRI Smart Learning and Character Center (PSLCC)</a></h4>
              <p>PGRI Smart Learning and Character Center (PSLCC) adalah perangkat kelengkapan organisasi yang bertugas melakukan pengembangan profesi guru dan pendidikan karakter berbasis teknologi dan informasi. PSLCC dibentuk di tingkat nasional (pusat), provinsi, kabupaten/kota. PSLCC dibentuk oleh badan pimpinan organisasi sebagai representasi yang berwenang.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Lembaga Kajian Kebijakan Pendidikan</a></h4>
              <p>Berdasarkan AD/ART hasil kongres XXII PGRI tahun 2019, PGRI memiliki Lembaga Kajian Kebijakan Pendidikan. Lembaga Kajian Kebijakan Pendidikan adalah perangkat kelengkapan organisasi yang bertugas melakukan studi atau kajian yang terkait pendidikan. Lembaga kajian kebijakan pendidikan dibentuk di tingkat nasional (pusat), tingkat provinsi, dan kabupaten/kota.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Perempuan PGRI</a></h4>
              <p>Selain perangkat kelengkapan organisasi seperti APKS, PSLCC, BPLP, Persatuan Guru Republik Indonesia juga memiliki perangkat kelengkapan organisasi yang bernama Perempuan PGRI. Perempuan PGRI bertugas meningkatkan kesadaran dan partisipasi aktif anggota perempuan PGRI dalam membangun dan menjaga muruah organisasi. PSLCC dibentuk di tingkat nasional (pusat), provinsi, kabupaten/kota.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-18 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Galeri</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          @foreach($datas as $data)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src="{{ url('images/galeri/'.$data->gambar) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="" class="" data-glightbox="" title=""><i class=""></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="" class="" data-glightbox="" title=""><i class=""></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="" class="" data-glightbox="" title=""><i class=""></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="" class="" data-glightbox="" title=""><i class=""></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/5.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="" class="" data-glightbox="" title=""><i class=""></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/6.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/6.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="" class="" data-glightbox="" title=""><i class=""></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/7.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/7.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="" class="" data-glightbox="" title=""><i class=""></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/8.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/8.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="" class="" data-glightbox="" title=""><i class=""></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/9.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/9.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="" class="" data-glightbox="" title=""><i class=""></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </section><!-- End Portfolio Section -->

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
            
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Login</a></li>
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