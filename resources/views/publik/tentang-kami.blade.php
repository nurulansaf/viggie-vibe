
@extends('publik.template-publik.master')
{{-- extend digunakan untuk dapat memanggil semua code yang ada di dalam file tersebut --}}

@section('content')

<section id="tentang" class="section bg-pattern-3">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8 col-lg-6 position-relative">
          <a href="https://www.youtube.com/watch?v=dUl3vRjjs40" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a>
          <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
          <figure class="rounded"><img src="{{asset('publik/img/artikel/tentang.jpg')}}" srcset="{{asset('publik/img/artikel/tentang.jpg')}}" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-5 offset-lg-1">
          <h2 class="fs-15 text-uppercase text-muted mb-3">Who Are We?</h2>
          <h3 class="display-4">Tentang Klinik Bersalin<span class="text-warning">  Hyung.ie</span></h3>
          <p class="">Di Klinik Bersalin <span class="text-warning"> Hyung.ie</span> kami tidak memandang seberapa praktisnya proses kelahiran dilakukan, tapi seberapa proses tersebut akan lebih menguntungkan untuk Mom & anak.</p>
          <div class="row gy-3 gx-xl-8">
            <div class="col-xl-6">
              <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                <li><span><i class="uil uil-check"></i></span><span>Pelayanan profesional & berkualitas tinggi.</span></li>
                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Tenaga Medis tersertifikasi & berpengalaman.</span></li>
              </ul>
            </div>
            <!--/column -->
            <div class="col-xl-6">
              <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                <li><span><i class="uil uil-check"></i></span><span>Jaminan tempat yang bersih & steril.</span></li>
                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Jaminan keamanan dalam klinik.</span></li>
              </ul>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
  </section>

  <section class="section bg-pattern-3">
    <div class="container pb-10">
      <div class="row">
        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
          <h2 class="fs-15 text-uppercase text-muted mb-3">DOCUMENTATION</h2>
          <h3 class="display-4 mb-10">Galeri <span class="text-warning">Klinik</span></h3>
        </div>
        <!-- /column -->
      </div>
      <div class="swiper-container blog grid-view" data-margin="30" data-nav="true" data-dots="true" data-items-xxl="3" data-items-md="2" data-items-xs="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <figure class="rounded"><img src="{{asset('publik/img/artikel/galeri1.jpg')}}" alt="" /></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="{{asset('publik/img/artikel/galeri2.jpg')}}" alt="" /></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="{{asset('publik/img/artikel/galeri3.jpg')}}" alt="" /></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="{{asset('publik/img/artikel/galeri4.jpg')}}" alt="" /></figure>
            </div>
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </div>
  </section>

  @endsection