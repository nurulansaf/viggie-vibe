@extends('publik.template-publik.master')
{{-- extend digunakan untuk dapat memanggil semua code yang ada di dalam file tersebut --}}

@section('content')
<section class="wrapper bg-dark">
  <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="true" data-items="1">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80">
          <div class="container h-100">
            <div class="row h-100">
              <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We bring solutions to make life easier.</h2>
                <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We are a creative company that focuses on long term relationships with customers.</p>
                <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Read More</a></div>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/.container -->
        </div>
        <!--/.swiper-slide -->
        <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="https://images.unsplash.com/photo-1583258292688-d0213dc5a3a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80">
          <div class="container h-100">
            <div class="row h-100">
              <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We are trusted by over a million customers.</h2>
                <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Here a few reasons why our customers choose us.</p>
                <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="./assets/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/.container -->
        </div>
        <!--/.swiper-slide -->
      </div>
      <!--/.swiper-wrapper -->
    </div>
    <!-- /.swiper -->
  </div>
  <!-- /.swiper-container -->
</section>

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
                    <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">{{ $prod->nama_produk }}</a></h2>
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
          <h4>Ketersediaan Produk</h4>
          <p class="mb-3">Pastikan supermarket memiliki stok yang cukup untuk memenuhi kebutuhan. </p>
          <a href="#" class="more hover link-yellow">Selengkapnya</a>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3">
          <div class="icon btn btn-block btn-lg btn-soft-red disabled mb-5"> <i class='bx bxs-check-circle'></i> </div>
          <h4>Kebersihan dan Kerapihan</h4>
          <p class="mb-3">Menjaga kebersihan dan kerapihan supermarket adalah hal yang sangat penting.</p>
          <a href="#" class="more hover link-red">Selengkapnya</a>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3">
          <div class="icon btn btn-block btn-lg btn-soft-leaf disabled mb-5"> <i class='bx bxs-check-circle'></i> </div>
          <h4> Ramah Pelanggan </h4>
          <p class="mb-3">Memberikan pelayanan yang ramah dan sopan kepada pelanggan.</p>
          <a href="#" class="more hover link-leaf">Selengkapnya</a>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3">
          <div class="icon btn btn-block btn-lg btn-soft-blue disabled mb-5"> <i class='bx bxs-check-circle'></i> </div>
          <h4>Waktu Tunggu yang Minim</h4>
          <p class="mb-3">Usahakan agar waktu tunggu pelanggan di kasir sependek mungkin.</p>
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
          <h3 class="display-4 mb-10">Galeri <span class="text-warning"></span></h3>
        </div>
        <!-- /column -->
      </div>
      <div class="swiper-container blog grid-view" data-margin="30" data-nav="true" data-dots="true" data-items-xxl="3" data-items-md="2" data-items-xs="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <figure class="rounded"><img src="https://images.unsplash.com/photo-1548104144-32c5171cf929?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1475&q=80" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded"><img src="https://images.unsplash.com/photo-1557333610-90ee4a951ecf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded"><img src="https://images.unsplash.com/photo-1553546895-531931aa1aa8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1032&q=80" alt="" /></figure>
            </div>
            <!--/.swiper-slide -->
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
                      <figure class="card-img-top overlay overlay-1 hover-scale" style="height: 150px;overflow: hidden;"><a href="#"> <img src="https://images.unsplash.com/photo-1583258292688-d0213dc5a3a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Selengkapnya</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line d-flex justify-content-between">
                            <a href="#" class="hover" rel="category">Sayuran</a>
                            <small><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></small>
                          </div>
                          <img class="mb-3 mt-3" src="https://dummy.smartcity.co.id/edu-asihputera/assets-home/images/ic/line.png" alt="line" style="display: block; margin: 0 auto; width: 30%; margin: ">
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="#">Daftar Lima Sayuran..</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p>Makanan jenis sayuran bisa dikonsumsi oleh siapa saja tanpa mengenal...</p>
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
                      <figure class="card-img-top overlay overlay-1 hover-scale" style="height: 150px;overflow: hidden;"><a href="#"> <img src="https://akcdn.detik.net.id/community/media/visual/2022/04/04/ilustrasi-sayuran_169.jpeg?w=700&q=90" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Selengkapnya</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line d-flex justify-content-between">
                            <a href="#" class="hover" rel="category">Sayuran</a>
                            <small><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></small>
                          </div>
                          <img class="mb-3 mt-3" src="https://dummy.smartcity.co.id/edu-asihputera/assets-home/images/ic/line.png" alt="line" style="display: block; margin: 0 auto; width: 30%; margin: ">
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="#">10 Jenis Sayuran yang..</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p> Setiap harinya manusia wajib mengkonsumsi sayuran agar...</p>
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
                      <figure class="card-img-top overlay overlay-1 hover-scale" style="height: 150px;overflow: hidden;"><a href="#"> <img src="https://assets.kompasiana.com/items/album/2023/06/15/kacang-panjang-20180219-190836-648a6a4b4d498a0f763e60c3.jpg?t=o&v=770" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Selengkapnya</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line d-flex justify-content-between">
                            <a href="#" class="hover" rel="category">Sayuran</a>
                            <small><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></small>
                          </div>
                          <img class="mb-3 mt-3" src="https://dummy.smartcity.co.id/edu-asihputera/assets-home/images/ic/line.png" alt="line" style="display: block; margin: 0 auto; width: 30%; ">
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="#">Pantun Sayur Kacang</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p>Mau jantung lebih sehat? Konsumsi sayur kacang panjang lebih sering...</p>
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
  
  <section class="section">
    <div class="container"></div>
  </section>

@endsection