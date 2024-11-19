<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layanan Publik - Sungai Keran</title>
  <link rel="stylesheet" href="style.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;700&family=Lato:wght@400;700&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <!-- Navbar -->
  <section id="navbar">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container-fluid">
        <a class="navbar-brand ms-3 d-flex align-items-center" href="#">
          <img src="img/logo.png" width="50" class="me-2">
          <span style="line-height: 1.1; font-size:medium;">
            Desa<br>
            Sungai<br>
            Keran
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="beranda.html" id="beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile-desa.html" id="profile-desa">Profile
                Desa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pemerintahan-desa" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Pemerintahan Desa
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="perangkat-desa.html" id="perangkat-desa">Perangkat Desa</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="lembaga-desa.html" id="lembaga-desa">Lembaga Desa</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="layanan-publik.html" id="layanan-publik">Layanan Publik</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="informasi-publik" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Informasi Publik
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="layanan-administrasi.html" id="layanan-administrasi">Layanan
                    Administrasi Desa</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="pengumuman.html" id="pengumuman">Pengumuman</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="kegiatan.html" id="kegiatan">Kegiatan</a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item">
              <a class="nav-link" href="#"
                style="color:#f8f9fa ; background-color: #1E90FF; border-radius: 8px; padding-left: 15px; padding-right: 15px;">Kontak</a>
            </li>
          </ul>
          <!-- Tombol Close -->
          <button id="closeSidebar" class="btn-close" aria-label="Close"></button>
        </div>
      </div>
    </nav>
  </section>
  <!-- End of Navbar -->

  <!-- Banner -->
  <section id="banner-layanan-publik">
    <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-center">
          <h1 class="text-banner">Layanan Publik</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Banner -->

  <!-- Sekolah Dasar -->
  <section id="sekolah">
    <div class="text-center py-5">
      <h3>Sekolah Dasar (SD)</h3>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 g-0">
          <div class="card-sd position-relative">
            <img src="img/1.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>SD Negeri 10 Sungai Keran</h5>
                <button class="button">Lokasi</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 g-0">
          <div class="card-sd position-relative">
            <img src="img/1.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>SD Negeri 10 Sungai Keran</h5>
                <button class="button">Lokasi</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 g-0">
          <div class="card-sd position-relative">
            <img src="img/1.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>SD Negeri 10 Sungai Keran</h5>
                <button class="button">Lokasi</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center py-5 mt-5">
      <h3>Sekolah Menengah Pertama (SMP)</h3>
    </div>
    <div class="container-fluid mb-5">
      <div class="row">
        <div class="col-lg-4 g-0">
          <div class="card-sd position-relative">
            <img src="img/1.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>SD Negeri 10 Sungai Keran</h5>
                <button class="button">Lokasi</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 g-0">
          <div class="card-sd position-relative">
            <img src="img/1.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>SD Negeri 10 Sungai Keran</h5>
                <button class="button">Lokasi</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 g-0">
          <div class="card-sd position-relative">
            <img src="img/1.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>SD Negeri 10 Sungai Keran</h5>
                <button class="button">Lokasi</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Sekolah Dasar -->

  <!-- Fasilitas Publik -->
  <section id="fasilitas-publik">
    <div class="text-center py-5">
      <h3>Fasilitas Publik</h3>
    </div>
    <div class="container-fluid mb-5">
      <div class="row">
        <div class="col-lg-4 g-0">
          <div class="card-sd position-relative">
            <img src="img/1.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>SD Negeri 10 Sungai Keran</h5>
                <button class="button">Lokasi</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 g-0">
          <div class="card-sd position-relative">
            <img src="img/1.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>SD Negeri 10 Sungai Keran</h5>
                <button class="button">Lokasi</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 g-0">
          <div class="card-sd position-relative">
            <img src="img/1.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>SD Negeri 10 Sungai Keran</h5>
                <button class="button">Lokasi</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Fasilitas Publik -->

  <!-- Footer -->
  <footer class="text-center text-dark bg-light p-3 border-top" style="border-top: 10px solid #000000;">
    <p>&copy; 2024 Desa Sungai Keran. All Rights Reserved.</p>
  </footer>
  <!-- End of Footer -->

  <!-- Tombol Kembali ke Atas -->
  <button onclick="scrollToTop()" id="backToTopBtn" class="btn">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- Script -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var currentPage = window.location.pathname;

      var navBeranda = document.getElementById("beranda");
      var navProfile = document.getElementById("profile-desa");
      var navPerangkat = document.getElementById("perangkat-desa");
      var navLembaga = document.getElementById("lembaga-desa");
      var navLayananPublik = document.getElementById("layanan-publik");
      var navAdministrasi = document.getElementById("layanan-administrasi");
      var navPengumuman = document.getElementById("pengumuman");
      var navKegiatan = document.getElementById("kegiatan");
      var navKontak = document.getElementById("kontak");

      if (currentPage.endsWith("beranda.html") || currentPage === "/") {
        navBeranda.classList.add("active-link");
      } else if (currentPage.endsWith("profile-desa.html")) {
        navProfile.classList.add("active-link");
      } else if (currentPage.endsWith("perangkat-desa.html")) {
        navPerangkat.classList.add("active-link");
      } else if (currentPage.endsWith("lembaga-desa.html")) {
        navLembaga.classList.add("active-link");
      } else if (currentPage.endsWith("layanan-publik.html")) {
        navLayananPublik.classList.add("active-link");
      } else if (currentPage.endsWith("layanan-administrasi.html")) {
        navAdministrasi.classList.add("active-link");
      } else if (currentPage.endsWith("pengumuman.html")) {
        navPengumuman.classList.add("active-link");
      } else if (currentPage.endsWith("kegiatan.html")) {
        navKegiatan.classList.add("active-link");
      } else if (currentPage.endsWith("kontak.html")) {
        navKontak.classList.add("active-link");
      }
    });

    // Navbar
    let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');
    const scrollThreshold = 150;

    window.addEventListener('scroll', function () {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      // Sembunyikan navbar saat scroll ke bawah
      if (scrollTop > lastScrollTop) {
        navbar.style.top = '-100px';
      }
      // Tampilkan navbar hanya jika sudah sampai di atas atau dalam threshold tertentu
      else if (scrollTop < scrollThreshold) {
        navbar.style.top = '0';
      }

      // Update posisi terakhir
      lastScrollTop = scrollTop;
    });



    // Menutup sidebar
    document.addEventListener('DOMContentLoaded', function () {
      const navbarCollapse = document.getElementById('navbarSupportedContent');
      const closeBtn = document.getElementById('closeSidebar');
      const toggleBtn = document.querySelector('.navbar-toggler');

      // Event listener untuk membuka dan menutup sidebar
      toggleBtn.addEventListener('click', function () {
        navbarCollapse.classList.toggle('show');
      });

      // Event listener untuk menutup sidebar menggunakan tombol 'X'
      closeBtn.addEventListener('click', function () {
        navbarCollapse.classList.remove('show'); // Menutup sidebar
        closeBtn.style.display = 'none'; // Sembunyikan tombol 'X'
        toggleBtn.style.display = 'block'; // Tampilkan ikon sidebar
      });

      // Event listener untuk menghilangkan ikon sidebar saat sidebar terbuka
      navbarCollapse.addEventListener('show.bs.collapse', function () {
        closeBtn.style.display = 'block'; // Tampilkan tombol 'X'
        toggleBtn.style.display = 'none'; // Sembunyikan ikon toggler
      });

      // Event listener untuk mengembalikan ikon sidebar saat sidebar ditutup
      navbarCollapse.addEventListener('hide.bs.collapse', function () {
        closeBtn.style.display = 'none'; // Sembunyikan tombol 'X'
        toggleBtn.style.display = 'block'; // Tampilkan ikon toggler
      });
    });


    // Ketika user scroll, tampilkan tombol
    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      let backToTopBtn = document.getElementById("backToTopBtn");

      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        backToTopBtn.style.display = "block"; // Tampilkan tombol jika scroll lebih dari 20px
      } else {
        backToTopBtn.style.display = "none";  // Sembunyikan tombol jika posisi di atas
      }
    }

    // Fungsi untuk scroll ke atas
    function scrollToTop() {
      document.body.scrollTop = 0; // Untuk Safari
      document.documentElement.scrollTop = 0; // Untuk browser lain
    }


  </script>
</body>

</html>