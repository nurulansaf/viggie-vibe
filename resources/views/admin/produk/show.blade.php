@extends('admin.layout.app')
<!-- orangtua/parent dari setiap halaman -->

<!-- extends itu perintah agar kita dapat menggunakan
semua code yang ada di dalam file yang di extends -->

<!-- halaman dashboard adalah anak dari si parent/orangtua -->

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Detail Produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Produk</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Produk
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td>{{ $produk->id_produk }}</td>
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
                        <td>Gambar Produk</td>
                        <td>:</td>
                        <td>{{ $produk->gambar_produk }}</td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td>:</td>
                        <td>{{ $esananr->stok }}</td>
                    </tr>
                    <tr>
                        <td>Min Stok</td>
                        <td>:</td>
                        <td>{{ $pesanan->min_stok }}</td>
                    </tr>
                    <tr>
                        <td>Harga Beli</td>
                        <td>:</td>
                        <td>{{ $pesanan->harga_beli }}</td>
                    </tr>
                    <tr>
                        <td>Harga Jual</td>
                        <td>:</td>
                        <td>{{ $pesanan->harga_jual }}</td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td>{{ $pesanan->deskripsi}}</td>
                    </tr>
                    <tr>
                        <td>Kategori Produk ID</td>
                        <td>:</td>
                        <td>{{ $pesanan->kategori_produk_id }}</td>
                    </tr>
                </table>
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Gambar Produk</th>
                            <th>Stok</th>
                            <th>Min Stok</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Deskripsi</th>
                            <th>Kategori Produk ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($produk as $item)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $item->kode_produk }}</td>
                                <td>{{ $item->nama_produk }}</td>
                                <td>{{ $item->gambbar_produk }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>{{ $item->min_stok }}</td>
                                <td>{{ $item->harga_beli }}</td>
                                <td>{{ $item->harga_jual }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>{{ $item->kategori_produk_id }}</td>
                            </tr>
                            @php
                                $no++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
