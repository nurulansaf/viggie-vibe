@extends('publik.template-publik.master')
{{-- extend digunakan untuk dapat memanggil semua code yang ada di dalam file tersebut --}}

@section('content')

<section class="bg-pattern-1" style="padding-bottom: 10px;">
    <div class="container pt-15">
      <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
        <div class="col-lg-6 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <h1 class="display-1 mb-5">Klinik Berkualitas Untuk Lakukan Persalinan Normal</h1>
          <p class="lead lh-sm mb-7 px-md-10 px-lg-0">Klinik kami memilih persalinan normal demi pemulihan lebih cepat serta kehamilan lebih sehat bagi mom & anak.</p>
          <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
            <span><a href="#konsultasi" class="btn btn-lg btn-primary rounded-pill me-2">Konsultasi Sekarang</a></span>
            <!-- <span><a href="#konsultasi" class="btn btn-lg btn-outline-primary rounded-pill">Konsultasi</a></span> -->
          </div>
        </div>
        <!--/column -->
        <div class="col-lg-6" data-cue="zoomIn">
          <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: 1.5rem;"></div>
          <!-- <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div> -->
          <figure class="rounded">
            <img src="{{asset('publik/img/illustrations/ilus1.png')}}" srcset="{{asset('publik/img/illustrations/ilus1.png')}}" style="    width: 65%;
            margin: 0 auto;
            margin-top: -40px;
            display: block;
            margin-top: 15px;" alt="" /></figure>
        </div>
        <!--/column -->
      </div>
      <!-- /.row -->
    </div>
  </section>
  <!-- end banner -->

  {{-- produk --}}
  <section id="produk" class="section bg-white">
    <div class="container">
      <div class="row gy-10">
        <div class="col-lg-12 order-lg-2">
          <div class="row align-items-center mb-10 position-relative zindex-1">
            <div class="col-md-7 col-xl-8 pe-xl-20">
              <h2 class="display-6 mb-1">Produk <span class="span">Baru</span></h2>
              <p class="mb-0 text-muted">Showing 1–9 of 30 results</p>
            </div>
            <!--/column -->
            <div class="col-md-5 col-xl-4 ms-md-auto text-md-end mt-5 mt-md-0">
              <div class="form-select-wrapper">
                <select class="form-select">
                  <option value="popularity">Sort by popularity</option>
                  <option value="rating">Sort by average rating</option>
                  <option value="newness">Sort by newness</option>
                  <option value="price: low to high">Sort by price: low to high</option>
                  <option value="price: high to low">Sort by price: high to low</option>
                </select>
              </div>
              <!--/.form-select-wrapper -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          <div class="mb-13">
            <div class="row isotope">
              
              @foreach ($produk as $prod)
              <div class=" col-md-3 col-xl-3">
                <div class="project item shadow rounded p-2 position-relative">
                  <figure class="rounded mb-6">
                    <img src="https://www.tiffincurry.ca/wp-content/uploads/2021/02/default-product.png" srcset="https://www.tiffincurry.ca/wp-content/uploads/2021/02/default-product.png" alt="">
                    <a class="item-like" href="#" data-bs-toggle="white-tooltip" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i class="uil uil-heart"></i></a>
                    <a class="item-view" href="#" data-bs-toggle="white-tooltip" aria-label="Quick view" data-bs-original-title="Quick view"><i class="uil uil-eye"></i></a>
                    <a href="#" class="item-cart rounded"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                    <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>Sale!</span></span>
                  </figure>
                  <div class="post-header">
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="post-category text-ash mb-0">{{ $prod->nama_kategori }}</div>
                      <span class="ratings five"></span>
                    </div>
                    <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">{{ $prod->nama }}</a></h2>
                    <p class="price"><del><span class="amount">{{ $prod->harga_jual }}</span></del> </p>
                  </div>
                  <!-- /.post-header -->
                </div>
              </div>
              @endforeach
              <!-- /.item -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.grid -->
          <nav class="d-flex" aria-label="pagination">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                </a>
              </li>
            </ul>
            <!-- /.pagination -->
          </nav>
          <!-- /nav -->
        </div>
        <!-- /column -->
      </div>
    </div>
    <!-- /.container -->
  </section>

  {{-- tentang --}}
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

  
  <!-- layanan -->
  <section id="layanan" class="section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-xl-7 col-xxl-6">
          <h2 class="fs-15 text-uppercase text-muted mb-3">What We Do?</h2>
          <h3 class="display-4 mb-9">Pelayanan <span class="text-warning">Terbaik</span> Yang Disediakan</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row gx-md-8 gy-8">
        <div class="col-md-6 col-lg-3">
          <div class="icon btn btn-block btn-lg btn-soft-yellow disabled mb-5"> <i class='bx bxs-check-circle'></i> </div>
          <h4>Persalinan Normal</h4>
          <p class="mb-3">Persalinan Normal yang Aman Untuk Bayi & Waktu Pemulihan Cepat Untuk Mom.              </p>
          <a href="#" class="more hover link-yellow">Selengkapnya</a>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3">
          <div class="icon btn btn-block btn-lg btn-soft-red disabled mb-5"> <i class='bx bxs-check-circle'></i> </div>
          <h4>Pemeriksaan Kehamilan</h4>
          <p class="mb-3">Pemeriksaan Rutin & Pemenuhan Vitamin Serta Kalsium di Masa Kehamilan.</p>
          <a href="#" class="more hover link-red">Selengkapnya</a>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3">
          <div class="icon btn btn-block btn-lg btn-soft-leaf disabled mb-5"> <i class='bx bxs-check-circle'></i> </div>
          <h4>Program Kehamilan</h4>
          <p class="mb-3">Rencanakan Kehamilan Mom Bersama Ayah dengan Program Hamil dari Kehamilan Sehat.</p>
          <a href="#" class="more hover link-leaf">Selengkapnya</a>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3">
          <div class="icon btn btn-block btn-lg btn-soft-blue disabled mb-5"> <i class='bx bxs-check-circle'></i> </div>
          <h4>Farmasi & Laboratorium</h4>
          <p class="mb-3">Obat/Vitamin Dengan Harga Lebih Rendah, Vaksinasi & Pemeriksaan Kondisi Janin Sebelum Persalinan.</p>
          <a href="#" class="more hover link-blue">Selengkapnya</a>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- end layanan -->

  
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

  <section id="artikel" class="section bg-pattern-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto">
          <h2 class="fs-15 text-uppercase  text-muted text-center">Our News</h2>
          <h3 class="display-4 mb-6 text-center">Artikel <span class="text-warning"> Klinik</span></h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="position-relative">
        <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
        <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card">
                      <figure class="card-img-top overlay overlay-1 hover-scale" style="height: 150px;overflow: hidden;"><a href="#"> <img src="{{asset('publik/img/artikel/galeri2.jpg')}}" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Selengkapnya</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line d-flex justify-content-between">
                            <a href="#" class="hover" rel="category">Kesehatan</a>
                            <small><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></small>
                          </div>
                          <img class="mb-3 mt-3" src="https://dummy.smartcity.co.id/edu-asihputera/assets-home/images/ic/line.png" alt="line" style="display: block; margin: 0 auto; width: 30%; margin: ">
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="#">Tanda Diare Bayi yang..</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p>Tubuh bayi sangat sensitif terhadap virus yang ada di barang-barang sekitarnya...</p>
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card">
                      <figure class="card-img-top overlay overlay-1 hover-scale" style="height: 150px;overflow: hidden;"><a href="#"> <img src="{{asset('publik/img/artikel/galeri3.jpg')}}" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Selengkapnya</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line d-flex justify-content-between">
                            <a href="#" class="hover" rel="category">Kesehatan</a>
                            <small><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></small>
                          </div>
                          <img class="mb-3 mt-3" src="https://dummy.smartcity.co.id/edu-asihputera/assets-home/images/ic/line.png" alt="line" style="display: block; margin: 0 auto; width: 30%; margin: ">
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="#">Toxoplasma pada Ibu Hamil</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p> Apabila Mommil memiliki peliharaan kucing di rumah, risiko toxoplasma mungkin membuat takut...</p>
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card">
                      <figure class="card-img-top overlay overlay-1 hover-scale" style="height: 150px;overflow: hidden;"><a href="#"> <img src="{{asset('publik/img/artikel/galeri4.jpg')}}" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Selengkapnya</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line d-flex justify-content-between">
                            <a href="#" class="hover" rel="category">Kesehatan</a>
                            <small><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></small>
                          </div>
                          <img class="mb-3 mt-3" src="https://dummy.smartcity.co.id/edu-asihputera/assets-home/images/ic/line.png" alt="line" style="display: block; margin: 0 auto; width: 30%; ">
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="#">Ikan yang Boleh dan Tidak</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p>Mommil tentu saja menginginkan yang terbaik untuk calon buah hati sejak dalam kandungan...</p>
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card">
                      <figure class="card-img-top overlay overlay-1 hover-scale" style="height: 150px;overflow: hidden;"><a href="#"> <img src="{{asset('publik/img/artikel/galeri1.jpg')}}" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Selengkapnya</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line d-flex justify-content-between">
                            <a href="#" class="hover" rel="category">Kesehatan</a>
                            <small><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></small>
                          </div>
                          <img class="mb-3 mt-3" src="https://dummy.smartcity.co.id/edu-asihputera/assets-home/images/ic/line.png" alt="line" style="display: block; margin: 0 auto; width: 30%; ">
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="#">Persalinan Normal yang Aman</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p>Rencanakan Kehamilan Mom Bersama Ayah dengan Program Hamil dari Klinik Bersalin Hyung.ie</p>
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!-- /.position-relative -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  
  <section id="konsultasi" class="section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h2 class="display-4 mb-3">Konsultasi <span class="text-warning">Kehamilan</span> Sekarang!!</h2>
          <p class="lead fs-lg mb-6">Pelayanan Konsultasi ini dapat membantu anda dalam mengetahui informasi yang belum anda pahami.</p>
          
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-6 position-relative">
          <form action="">
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Nama Lengkap">
              <label for="textInputExample">Nama Lengkap</label>
            </div>
            <div class="form-floating mb-4">
              <input id="textInputExample" type="email" class="form-control" placeholder="Email">
              <label for="textInputExample">Email</label>
            </div>
            <div class="form-floating mb-4">
              <textarea id="textareaExample" class="form-control" placeholder="Isi Pesan" style="height: 100px" required></textarea>
              <label for="textareaExample">Isi Pesan</label>
            </div>
            <div style="text-align: right;">
              <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Kirim</a></span>
            </div>
            <!-- /.form-floating -->
          </form>
        </div>
        <!--/column -->
        
      </div>
      <!--/.row -->
    </div>
  </section>

  
  <section class="section">
    <div class="container"></div>
  </section>

@endsection