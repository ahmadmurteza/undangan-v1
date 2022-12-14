<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Nagios Story</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fotogency/public/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('fotogency/public/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('fotogency/public/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fotogency/public/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('fotogency/public/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('fotogency/public/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('fotogency/public/vendors/prism/prism.css" rel="stylesheet') }}">
    <link href="{{ asset('fotogency/public/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fotogency/public/assets/css/theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('fotogency/public/assets/css/user.css') }}" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="cursor-outer d-none d-md-block"></div>
      <nav class="navbar navbar-light py-3 px-0 overflow-hidden">
        <div class="container px-md-5">
          <div class="row w-100 g-0 justify-content-between">
            <div class="col-8">
              <div class="d-inline-block animate__animated animate__fadeIn animate__slower"><a class="navbar-brand pt-0 fs-3 text-black d-flex align-items-center" href="{{ route('landing') }}"><img class="img-fluid" src="{{ asset('fotogency/public/assets/img/icons/nagios-logo.png') }}" style="width: 8%; height: 8%;" /><span class="fw-bolder ms-2">Nagios.</span><span class="fw-thin">Story</span></a></div>
            </div>
            <div class="col-4 d-lg-none text-end pe-0">
              <button class="btn p-0 shadow-none text-black fs-2 d-inline-block" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle offcanvas navigation"><span class="menu-bar"></span></button>
            </div>
            <div class="offcanvas offcanvas-end px-0" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasTitle" aria-hidden="true">
              <div class="offcanvas-header justify-content-end">
                <h5 class="visually-hidden offcanvas-title" id="navbarOffcanvasTitle">Menu</h5>
                <button class="btn p-0 shadow-none text-black fs-2 d-inline text-end" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="menu-close-bar"></span></button>
              </div>
              <div class="offcanvas-body px-0">
                <div class="d-lg-flex flex-center-start gap-3 overflow-hidden">
                  <ul class="navbar-nav ms-auto fs-4 ps-6">
                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5{{ Route::is('landing') ? ' active' : '' }}" aria-current="page" href="{{ route('landing') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5{{ Route::is('landing.portofolio') ? ' active' : '' }}" aria-current="page" href="{{ route('landing.portofolio') }}">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5{{ Route::is('landing.gallery') ? ' active' : '' }}" aria-current="page" href="{{ route('landing.gallery') }}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5{{ Route::is('landing.exhibitions') ? ' active' : '' }}" aria-current="page" href="{{ route('landing.exhibitions') }}">Product</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5{{ Route::is('landing.about') ? ' active' : '' }}" aria-current="page" href="{{ route('landing.about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5" aria-current="page" href="blog.html">Blog</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="d-none d-lg-flex justify-content-end position-relative z-index-1">
                <div class="position-absolute absolute-centered z-index--1">
                  <h1 class="ms-2 fw-bolder text-outlined text-uppercase text-white pe-none display-1 animate__animated animate__fadeIn animate__delay-3s animate__slower">
                    @if(Route::is('landing'))
                      Home
                    @elseif(Route::is('landing.portofolio'))
                      Portofolio
                    @elseif(Route::is('landing.gallery'))
                      Gallery
                    @elseif(Route::is('landing.exhibitions'))
                      Product
                    @elseif(Route::is('landing.about'))
                      About
                    @endif
                  </h1>
                </div>
                <div class="d-flex gap-3 align-items-start">
                  <a class="mb-0 ms-auto text-1200 fs-0 fw-bold text-uppercase animate__animated animate__fadeInDown animate__delay-3s animate__slower" href="blog.html#contact">Contact Now</a>
                  <ul class="navbar-nav navbar-fotogency ms-auto text-end">
                    <li class="nav-item px-2 position-relative animate__animated animate__fadeInRight animate__slow"><a class="nav-link pt-0{{ Route::is('landing') ? ' active' : '' }}" aria-current="page" href="{{ route('landing') }}">Home</a></li>
                    <li class="nav-item px-2 position-relative animate__animated animate__fadeInRight animate__slower"><a class="nav-link pt-0{{ Route::is('landing.portofolio') ? ' active' : '' }}" aria-current="page" href="{{ route('landing.portofolio') }}">Portfolio</a></li>
                    <li class="nav-item px-2 position-relative animate__animated animate__fadeInRight animate__slow"><a class="nav-link pt-0{{ Route::is('landing.gallery') ? ' active' : '' }}" aria-current="page" href="{{ route('landing.gallery') }}">Gallery</a></li>
                    <li class="nav-item px-2 position-relative animate__animated animate__fadeInRight animate__slower"><a class="nav-link pt-0{{ Route::is('landing.exhibitions') ? ' active' : '' }}" aria-current="page" href="{{ route('landing.exhibitions') }}">Product</a></li>
                    <li class="nav-item px-2 position-relative animate__animated animate__fadeInRight animate__slow"><a class="nav-link pt-0{{ Route::is('landing.about') ? ' active' : '' }}" aria-current="page" href="{{ route('landing.about') }}">About</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>


      <!-- ============================================-->
      <!-- <section> begin ============================-->

        @yield('content')
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <footer class="bg-footer-black" id="footer">
      <div class="container py-7 px-md-5">
        <div class="row g-0">
          <div class="col-md-6 mb-5 mb-md-0">
            <div class="mb-4 d-inline-block"><a class="navbar-brand pt-0 fs-3 text-white d-flex align-items-center" href="index.html"><img class="img-fluid" src="{{ asset('fotogency/public/assets/img/icons/nagios-logo.png') }}" alt="" width="25" height="25" /><span class="fw-bolder ms-2">Nagios.</span><span class="fw-thin">Story</span></a></div>
            <div class="col-12 col-md-10 text-300 mb-3"><i class="fas fa-map-marker-alt"></i><a class="nav-link text-300 d-inline" target="_blank" href="https://www.google.com/maps/place/NAGIOS+STORY/@-3.4341721,114.7225083,17z/data=!3m1!4b1!4m5!3m4!1s0x2de6833bac2a9d21:0xf124bd50ce68b1a4!8m2!3d-3.4341775!4d114.724697">JL. sukamaju komplek citra mandiri permai 2 blok e, Landasan Ulin Bar., Kec. Liang Anggang, Kota Banjar Baru, Kalimantan Selatan 70712</a></div>
            <div class="col-12 col-md-10 text-300 mb-3"><i class="fas fa-phone"></i><a class="nav-link text-300 d-inline" href="tel:+8801976476893">+62 831 4132 5951</a></div>
            <div class="col-12 col-md-10 text-300 mb-3"><i class="fas fa-envelope"></i><a class="nav-link text-300 d-inline" href="mailto:scrscrumbledegg@gmail.com">nagiospicture116@gmail.com</a></div>
          </div>
          <div class="col-md-6">
            <h5 class="text-white mb-2">BERLANGGANAN DENGAN KAMI</h5>
            <form>
              <div class="form-floating mb-5 position-relative text-200">
                <input class="form-control form-fotogency-header-control text-200" id="email" type="email" placeholder="name@example.com" required="required" />
                <label class="text-200 mb-1" for="email">Email</label>
                <div class="position-absolute end-0 top-0">
                  <button class="btn shadow-none px-0" type="submit"><img class="ms-3" src="{{ asset('fotogency/public/assets/img/icons/long-arrow.png') }}" alt="" /></button>
                </div>
              </div>
            </form>
            <div class="d-flex gap-2 flex-wrap justify-content-between align-items-center"><a class="social-icons" href="https://www.facebook.com/" target="_blank">Facebook</a><a class="social-icons" href="https://www.flickr.com/photos/" target="_blank">Flickr</a><a class="social-icons" href="https://twitter.com/" target="_blank">Twitter</a><a class="social-icons" href="https://www.instagram.com/" target="_blank">Instagram</a><a class="social-icons" href="https://www.youtube.com/" target="_blank">Youtube</a>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-black py-0">

      <div class="container px-md-5">
        <div class="row g-0 justify-content-md-between justify-content-evenly py-4">
          <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
            <p class="fs--1 my-2 fw-light text-100">All rights Reserved &copy; Nagis Story, 2022</p>
          </div>
          <div class="col-12 col-sm-8 col-md-6">
            <p class="fs--1 fw-light my-2 text-center text-md-end text-100"> Made with&nbsp;
              <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
              </svg>&nbsp;by&nbsp;<a class="fw-bold text-1200" href="https://themewagon.com/" target="_blank">TTEam</a>
            </p>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('fotogency/public/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('fotogency/public/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fotogency/public/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('fotogency/public/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('fotogency/public/vendors/imagesloaded/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('fotogency/public/vendors/isotope-layout/isotope.pkgd.min.js') }}"> </script>
    <script src="{{ asset('fotogency/public/vendors/isotope-packery/packery-mode.pkgd.min.js') }}"> </script>
    <script src="{{ asset('fotogency/public/vendors/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ asset('fotogency/public/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('fotogency/public/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('fotogency/public/https://polyfill.io/v3/polyfill.min.js?features=window.scroll') }}"></script>
    <script src="{{ asset('fotogency/public/vendors/prism/prism.js') }}"></script>
    <script src="{{ asset('fotogency/public/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('fotogency/public/assets/js/theme.js') }}"></script>


  </body>

</html>