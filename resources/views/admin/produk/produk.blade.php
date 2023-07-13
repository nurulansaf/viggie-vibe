@extends('admin.layout.app')
<!-- orangtua/parent dari setiap halaman -->

<!-- extends itu perintah agar kita dapat menggunakan 
semua code yang ada di dalam file yang di extends -->

<!-- halaman dashboard adalah anak dari si parent/orangtua -->

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Produk</li>
    </ol>
    <div class="card mb-4">
        @if (Auth::user()->role == 'admin')
        <div class="card-header">
            <a href="{{ url('admin/addproduk') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        @endif
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Produk
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Stok</th>
                        <th>Harga Jual</th>
                        <th>Deskripsi</th>
                        <th>Kategori Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($produk as $prod)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $prod->kode_produk }}</td>
                        <td>{{ $prod->nama_produk }}</td>
                        <td>{{ $prod->stok }}</td>
                        <td>{{ $prod->harga_jual }}</td>
                        <td>{{ $prod->deskripsi }}</td>
                        <td>{{ $prod->nama_kategori }}</td>
                        <td><a href="{{ url('admin/detailproduk/'. $prod->id) }}" class="btn btn-info">Detail</a></td>
                        @if (Auth::user()->role == 'admin')
                        <td><a href="{{ url('admin/editproduk/'. $prod->id) }}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{ url('admin/deleteproduk/'. $prod->id) }}" class="btn btn-danger">Delete</a></td>
                        @endif
                    </tr>
                    @php
                        $no++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection