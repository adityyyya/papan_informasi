<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Ombudsman - Papan Berita</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="/assets/css/aos.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/custom-animate.css" />
    <link rel="stylesheet" href="/assets/css/flaticon.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/css/owl.css" />
    <link rel="stylesheet" href="/assets/css/color.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/responsive.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/favicon/ombudsman.ico" sizes="32x32"/>

    <style>

      /* Menyembunyikan scrollbar */
      ::-webkit-scrollbar {
        width: 0px;  /* Untuk Chrome, Safari, dan Opera */
      }

      /* Menyembunyikan scrollbar pada Firefox */
      /* Anda mungkin perlu menambahkan prefix untuk browser lainnya */
      html {
        scrollbar-width: none;
        -ms-overflow-style: none;
      }

      /* Menambahkan padding kanan untuk mengimbangi lebar scrollbar */
      .container {
        padding-right: 17px; /* Lebar scrollbar default */
        overflow-y: scroll; /* Mengizinkan scrolling */
      }


    </style>

  </head>

  <body>
    <div class="boxed_wrapper">
      <div class="preloader"></div>

      <!-- main header -->
      <header class="main-header header-style-four">
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
          <div class="menu-backdrop"></div>
          <div class="close-btn">
            <span class="icon flaticon-multiply"></span>
          </div>

          <nav class="menu-box">
            <div class="nav-logo">
              <a href="index.html"
                ><img src="/assets/images/resources/logo-7.png" alt="" title=""
              /></a>
            </div>
            <div class="menu-outer">
              <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <div class="social-links">
              <ul class="clearfix">
                <li>
                  <a href="#"
                    ><span class="fab fa fa-facebook-square"></span
                  ></a>
                </li>
                <li>
                  <a href="#"><span class="fab fa fa-twitter-square"></span></a>
                </li>
                <li>
                  <a href="#"
                    ><span class="fab fa fa-pinterest-square"></span
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><span class="fab fa fa-google-plus-square"></span
                  ></a>
                </li>
                <li>
                  <a href="#"><span class="fab fa fa-youtube-square"></span></a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <!-- End Mobile Menu -->
      </header>

      
      <!--Slider Foto Slide-->
      @include('slider')
      <!-- Akhir Slider Foto Slide-->

      <!--Visi dan Misi-->
      @include('visi-misi')
      <!--Akhir Visi dan Misi-->
      
      <!--Kabar Perwakilan-->
      @include('kabar-perwakilan')
      <!--Akhir Kabar Perwakilan-->

      <!--Struktur Organisasi-->
      @include('struktur')
      <!--Akhir Struktur Organisasi-->

      <!--Alur Pelaporan-->
      @include('alur-pelaporan')
      <!--Akhir Alur Pelaporan-->

      <!--Logo dan Nama Instansi-->
      @include('logo')
      <!--Akhir Logo dan Nama Instansi-->



      <!--Start footer area-->
      <footer class="footer-area style4">
        <div class="footer">
          <div class="container">
            <div class="row justify-content-around">
              <!--Start single footer widget-->
              <div
                class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow animated fadeInUp"
                data-wow-delay="0.3s"
              >
                <div class="single-footer-widget marbtm50">
                  <div class="our-company-info">
                    <div class="footer-logo">
                      <a href="index.html"
                        ><img
                          src="/assets_admin/images/logo-bg.png"
                          alt="Awesome Footer Logo"
                          title="Logo"
                      /></a>
                    </div>
                    <div class="text">
                      <p>
                        Ombudsman RI adalah lembaga independen yang bertugas mengawasi pelayanan publik, 
                        baik dari pemerintah maupun sektor swasta, 
                        untuk memastikan keadilan dan transparansi dalam tata kelola pemerintahan Indonesia.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!--End single footer widget-->

              <!--Start single footer widget-->
              <div
                class="ml-5 col-xl-4 col-lg-4 col-md-6 col-sm-12 wow animated fadeInUp"
                data-wow-delay="0.7s"
              >
                <div class="single-footer-widget style4">
                  <div class="title">
                    <h3>PAPAN INFORMASI</h3>
                  </div>
                  <ul class="resources-links">
                    <li><a href="#section1">Galery Foto</a></li>
                    <li><a href="#section2">Visi Misi</a></li>
                    <li><a href="#section3">Kabar Perwakilan</a></li>
                    <li><a href="#section4">Struktur</a></li>
                    <li><a href="#section5">Kabar Pelaporan</a></li>
                    <li><a href="/kelola/beritas">Dashboard</a></li>
                  </ul>
                </div>
              </div>
              <!--End single footer widget-->
            </div>
          </div>
        </div>
        <div
          class="footer-bottom style4 wow slideInUp animated"
          data-wow-delay="0.3s"
          data-wow-duration="1200ms"
        >
          <div class="container">
            <div class="outer-box">
              <div class="single-box">
                <div class="copyright-text style4">
                  <p>
                    Copyright © 2019 All Rights<br />
                    Reserved. <a href="#">Energy.</a>
                  </p>
                </div>
              </div>
              <div class="single-box">
                <div class="our-info-box">
                  <ul>
                    <li><a href="tel:123456789">(+62) 511 3367412</a></li>
                    <li>
                      <a href="mailto:info@templatepath.com">humas@ombudsman.go.id</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="single-box">
                <div class="our-info-box">
                  <p>
                    Jl. S. Parman No.57 70123 <br> 
                    Banjarmasin, Kalimantan Selatan 
                  </p>
                </div>
              </div>
              <div class="single-box">
                <div class="footer-social-links style4">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/OmbudsmanRI137/"
                        ><i class="fa fa-facebook" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://twitter.com/OmbudsmanRI137/"
                        ><i class="fa fa-twitter" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/ombudsmanri137/"
                        ><i class="fa fa-instagram" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.youtube.com/channel/UCQbr7T14g6jZLQhKXrZcfzA"
                        ><i class="fa fa-youtube" aria-hidden="true"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!--End footer area-->
    </div>

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/aos.js"></script>
    <script src="/assets/js/appear.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bootstrap-select.min.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/jquery.bootstrap-touchspin.js"></script>
    <script src="/assets/js/jquery.countdown.min.js"></script>
    <script src="/assets/js/jquery.countTo.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/jquery.enllax.min.js"></script>
    <script src="/assets/js/jquery.fancybox.js"></script>
    <script src="/assets/js/jquery.mixitup.min.js"></script>
    <script src="/assets/js/jquery.paroller.min.js"></script>
    <script src="/assets/js/jquery.polyglot.language.switcher.js"></script>
    <script src="/assets/js/map-script.js"></script>
    <script src="/assets/js/nouislider.js"></script>
    <script src="/assets/js/owl.js"></script>
    <script src="/assets/js/timePicker.js"></script>
    <script src="/assets/js/validation.js"></script>
    <script src="/assets/js/wow.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/lazyload.js"></script>
    <script src="/assets/js/scrollbar.js"></script>
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/knob.js"></script>
    <!-- thm custom script -->
    <script src="/assets/js/custom.js"></script>

    <script>
      // Menyimpan indeks bagian aktif
      let currentSection = 1;

      // Mengatur interval untuk berpindah antar bagian setiap 3 detik
      setInterval(() => {
        // Memilih bagian berikutnya
        currentSection = (currentSection % 6) + 1;
        // Memilih elemen dengan ID sesuai indeks dan melakukan scroll ke dalam pandangan
        document
          .getElementById(`section${currentSection}`)
          .scrollIntoView({ behavior: "smooth" });
      }, 300000); // Mengatur waktu interval dalam milidetik (di sini 3000 ms = 3 detik)
    </script>

    <script type="text/javascript">
      var control = 0;

      function scrollbar() {
        if (event.keyCode == 122 && control == 0) {
          //remove scrollbar
          $("body").css("overflow", "hidden");
          control = 1;
        } else {
          //add scrollbar
          $("body").css("overflow", "auto");
          control = 0;
        }
      }
    </script> 
  </body>
</html>
