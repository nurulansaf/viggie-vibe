@extends('admin.layout.app')
<!-- orangtua/parent dari setiap halaman -->

<!-- extends itu perintah agar kita dapat menggunakan 
semua code yang ada di dalam file yang di extends -->

<!-- halaman dashboard adalah anak dari si parent/orangtua -->

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Pesanan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
        @if (Auth::user()->role == 'admin')
            <a href="{{ url('admin/addpesanan') }}" class="btn btn-primary">Tambah Data</a>
        @endif
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Jumlah</th>
                        <th>Deskripsi</th>
                        <th>Produk</th>
                        @if (Auth::user()->role == 'admin')
                        <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pesanan as $item)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $item->tgl_pesanan }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->jumlah_pesanan }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        @if (Auth::user()->role == 'admin')
                        <td><a href="{{ url('admin/detailpesanan/'. $item->id_pesanan) }}" class="btn btn-info">Detail</a></td>
                        <td><a href="{{ url('admin/editpesanan/'. $item->id_pesanan) }}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{ url('admin/deletepesanan/'. $item->id_pesanan) }}" class="btn btn-danger">Delete</a></td>
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