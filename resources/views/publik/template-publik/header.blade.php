<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Klinik Bersalin Hyung.ie</title>
  <link rel="shortcut icon" href="{{asset('publik/img/lg-klinik-fav.png')}}">
  <link rel="stylesheet" href="{{asset('publik/css/plugins.css')}}">
  <link rel="stylesheet" href="{{asset('publik/css/style.css')}}">
  <link rel="preload" href="{{asset('publik/css/fonts/dm.css')}}" as="style" onload="this.rel='stylesheet'">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body style="scroll-behavior: smooth!important;">
  <div class="content-wrapper">
    <header class="wrapper bg-light">
      <div class="topbar text-white fw-bold fs-15">
        <div class="container d-md-flex flex-md-row">
          <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
            <address class="mb-0">Jl. Margonda Raya, Kota Depok</address>
          </div>
          <div class="d-flex flex-row align-items-center me-6 ms-auto">
            <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
            <p class="mb-0">0812 3456 7890</p>
          </div>
          <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
            <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-white hover">bersalinhyung.ie@email.com</a></p>
          </div>
        </div>
        <!-- /.container -->
      </div>
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="{{url('/')}}">
              <img src="{{asset('publik/img/lg-klinik.png')}}" srcset="{{asset('publik/img/lg-klinik.png')}}" class="logo-img" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Klinik Bersalin Hyung.ie</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{url('Publik/tentang')}}">Tentang Kami</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#produk">Produk</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#layanan">Layanan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#artikel">Artikel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#konsultasi">Konsultasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#kontak">Kontak Kami</a>
                </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                  <br /> 0812 3456 7890 <br />
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              {{-- <li class="nav-item d-none d-md-block">
                <a href="https://api.whatsapp.com/send?phone=081234567890&text=Halo%2C+Saya+butuh+bantuan" target="_blank" class="btn-wa rounded"><i class='bx bxl-whatsapp'></i> 0812 3456 7890</a>
              </li> --}}
                @guest
                  @if (Route::has('login'))
                  <li class="nav-item d-none d-md-block">
                    <a href="{{ route('login') }}" class="btn btn-wa btn-sm rounded"> Sign In</a>
                  </li>
                  @endif
                  @if (Route::has('register'))
                  <li class="nav-item d-none d-md-block">
                    <a href="{{ route('register') }}" class="btn btn-warning btn-sm rounded"> Sign Up</a>
                  </li>
                  @endif

                  @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                  
                @endguest
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->