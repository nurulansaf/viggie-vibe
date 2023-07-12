
@extends('publik.template-publik.master')
{{-- extend digunakan untuk dapat memanggil semua code yang ada di dalam file tersebut --}}

@section('content')

    <section class="wrapper bg-gray">
        <div class="container py-3 py-md-5">
        <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item"><a href="#">Cart</a></li>
            <li class="breadcrumb-item active text-muted" aria-current="page">Checkout</li>
            </ol>
        </nav>
        <!-- /nav -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    
    <form action="{{ url('Publik/prosesPesanProduk') }}" method="POST">
        @csrf
        <section class="wrapper bg-light">
            <div class="container pt-5 pt-md-5 pb-5 pb-md-5">
            <div class="row gx-md-8 gx-xl-12 gy-12">
                <div class="col-lg-8">
                <h3 class="mb-4">Data Pemesan</h3>
                    <!-- Input field untuk produk_id -->
                    <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pemesan" value="" required>
                            <label for="nama" class="form-label">Nama</label>
                            <div class="invalid-feedback"> Valid first name is required. </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Last name" value="" required>
                            <label for="no_hp" class="form-label">No Hp</label>
                            <div class="invalid-feedback"> Valid last name is required. </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                            <input type="date" class="form-control" id="tgl_pesanan" name="tgl_pesanan" required>
                            <label for="tgl_pesanan" class="form-label">Tanggal Pesanan</label>
                            <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                            <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="1234 Main St" required></textarea>
                            <label for="alamat" class="form-label">Alamat</label>
                            <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                            <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="1234 Main St" required></textarea>
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-6">
                            <div class="form-select-wrapper">
                            <select class="form-select" id="produk_id" name="produk_id" required="">
                                @foreach ($pproduk as $pp)
                                <option value="{{ $pp->id }}" name="produk_id" >{{ $pp->nama_produk }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback"> Please select a valid country. </div>
                            </div>
                        </div> --}}

                        <div class="col-md-6">
                            <div class="form-select-wrapper">
                            <select class="form-select" id="id_metode_pembayaran" name="id_metode_pembayaran" required="">
                                @foreach ($metode_pembayaran as $med)
                                <option value="{{ $med->id }}" name="id_metode_pembayaran" >{{ $med->nama_metode }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback"> Please select a valid country. </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
                <!-- /column -->
                <div class="col-lg-4">
                <h3 class="mb-4">Order Summary</h3>
                <div class="shopping-cart mb-7">
                    <div class="shopping-cart-item d-flex justify-content-between mb-4">
                    <div class="d-flex flex-row d-flex align-items-center">
                        <figure class="rounded w-17">
                            @if($produk->gambar_produk)
                                @php
                                    $gambarPath = public_path('publik/img/produk/' . $produk->gambar_produk);
                                @endphp
                                @if(file_exists($gambarPath))
                                    <img src="{{ asset('publik/img/produk/' . $produk->gambar_produk) }}" alt="Viggie Vibe">
                                @else
                                    <img src="https://tokoikshopjualbelionline.websites.co.in/e-store/img/defaults/product-default.png" alt="Default Image">
                                @endif
                            @else
                                <img src="https://tokoikshopjualbelionline.websites.co.in/e-store/img/defaults/product-default.png" alt="Default Image">
                            @endif
                        </figure>
                        <div class="w-100 ms-4">
                        <h5 class="post-title h4 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">{{ $produk->nama_produk }}</a></h5>

                        <div class="small">Kategori: <span class="badge bg-pale-yellow text-yellow rounded-pill">{{ $kproduk->nama_kategori }}</span></div>

                        <div class="small">Stok: <span class="badge bg-pale-success text-success rounded-pill">{{ $produk->stok }}</span></div>
                        </div>
                    </div>
                    <div class="ms-2 d-flex align-items-center">
                        <p class="price fs-sm"><span class="amount">Rp. {{ $produk->harga_jual }}</span></p>
                        <input type="hidden" name="harga_jual" class="form-control" id="total" value="{{ $produk->harga_jual }}" readonly>
                    </div>
                    </div>
                    <!--/.shopping-cart-item -->
                </div>
                <!-- /.shopping-cart-->
                <hr class="my-4">
                <h5 class="mb-2">Deskripsi</h5>
                <div class="mb-5">
                    <p>{{ $produk->deskripsi }}</p>
                </div>
                <div class="table-responsive">
                    <table class="table table-order">
                    <tbody>
                        <tr>
                        <td class="ps-0"><strong class="text-dark">QTY</strong></td>
                        <td class="pe-0 text-end mb-3">
                            <div class="form-select-wrapper">
                                <select class="form-select" name="qty">
                                <option value="1" selected="">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                            </div>
                        </td>
                        </tr>
                        {{-- <tr>
                        <td class="ps-0"><strong class="text-dark"> Total Harga</strong></td>
                        <td class="pe-0 text-end">
                            <input type="text" name="total_harga" class="form-control" id="total_harga" value="{{ $produk->total_harga }}" readonly>
                        </td>
                        </tr> --}}
                    </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-primary rounded w-100 mt-4">Pesan Sekarang</button>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </form>

    <section class="wrapper bg-gray">
        <div class="container py-12 py-md-14">
        <div class="row gx-lg-8 gx-xl-12 gy-8">
            <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
                <div>
                <img src="{{ asset('publik/img/icons/solid/shipment.svg') }}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
                </div>
                <div>
                <h4 class="mb-1">Free Shipping</h4>
                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
                </div>
            </div>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
                <div>
                <img src="{{ asset('publik/img/icons/solid/push-cart.svg') }}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
                </div>
                <div>
                <h4 class="mb-1">30 Days Return</h4>
                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
                </div>
            </div>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
                <div>
                <img src="{{ asset('publik/img/icons/solid/verify.svg') }}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
                </div>
                <div>
                <h4 class="mb-1">2-Years Warranty</h4>
                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
                </div>
            </div>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

@endsection