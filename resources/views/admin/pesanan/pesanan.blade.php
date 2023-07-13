@extends('admin.layout.app')
<!-- orangtua/parent dari setiap halaman -->

<!-- extends itu perintah agar kita dapat menggunakan 
semua code yang ada di dalam file yang di extends -->

<!-- halaman dashboard adalah anak dari si parent/orangtua -->

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Pesanan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Nama Produk</th>
                        <th>Tanggal Pesanan</th>
                        <th>Qty</th>
                        <th>Total Harga</th>
                        <th>Deskripsi</th>
                        <th>Metode Pembayaran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pesanan as $item)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->tgl_pesanan }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->total_harga }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->nama_metode }}</td>
                        <td><a href="{{ url('admin/detailpesanan/'. $item->id) }}" class="btn btn-info">Detail</a></td>
                        <td><a href="{{ url('admin/deletepesanan/'. $item->id) }}" class="btn btn-danger">Delete</a></td>
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