@extends('admin.layout.app')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Detail Produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ url('admin/produk') }}">Produk</a></li>
            <li class="breadcrumb-item active">Detail Produk</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Produk
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <table>
                            <tr>
                                <td>ID</td>
                                <td>:</td>
                                <td>{{ $produk->id }}</td>
                            </tr>
                            <tr>
                                <td>Kode Produk</td>
                                <td>:</td>
                                <td>{{ $produk->kode_produk }}</td>
                            </tr>
                            <tr>
                                <td>Nama Produk</td>
                                <td>:</td>
                                <td>{{ $produk->nama_produk }}</td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td>:</td>
                                <td>{{ $produk->stok }}</td>
                            </tr>
                            <tr>
                                <td>Minimal Stok</td>
                                <td>:</td>
                                <td>{{ $produk->min_stok }}</td>
                            </tr>
                            <tr>
                                <td>Harga Beli</td>
                                <td>:</td>
                                <td>Rp {{ $produk->harga_beli }}</td>
                            </tr>
                            <tr>
                                <td>Harga Jual</td>
                                <td>:</td>
                                <td>Rp {{ $produk->harga_jual }}</td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>:</td>
                                <td>{{ $produk->deskripsi }}</td>
                            </tr>
                            <tr>
                                <td>Kategori Produk</td>
                                <td>:</td>
                                <td>{{ $kategori_produk->nama_kategori }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <figure class="rounded w-100">
                            <h6>Gambar Produk</h6>
                            @if($produk->gambar_produk)
                                @php
                                    $gambarPath = public_path('publik/img/produk/' . $produk->gambar_produk);
                                @endphp
                                @if(file_exists($gambarPath))
                                    <img src="{{ asset('publik/img/produk/' . $produk->gambar_produk) }}" alt="Viggie Vibe" style="max-width: 250px; max-height: 250px;">
                                @else
                                    <img src="https://tokoikshopjualbelionline.websites.co.in/e-store/img/defaults/product-default.png" alt="Default Image" style="max-width: 250px; max-height: 250px;">
                                @endif
                            @else
                                <img src="https://tokoikshopjualbelionline.websites.co.in/e-store/img/defaults/product-default.png" alt="Default Image" style="max-width: 250px; max-height: 250px;"> 
                            @endif
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
