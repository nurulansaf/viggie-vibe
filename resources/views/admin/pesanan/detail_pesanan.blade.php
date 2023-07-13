@extends('admin.layout.app')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Detail Pesanan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ url('admin/pesanan') }}">Pesanan</a></li>
            <li class="breadcrumb-item active">Detail Pesanan</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Pesanan
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td>{{ $pesanan->id }}</td>
                    </tr>
                    <tr>
                        <td>Nama Pemesan</td>
                        <td>:</td>
                        <td>{{ $pesanan->nama }}</td>
                    </tr>
                    <tr>
                        <td>Nama Produk</td>
                        <td>:</td>
                        <td>{{ $produk->nama_produk }}</td>
                    </tr>
                    <tr>
                        <td>No Handphone</td>
                        <td>:</td>
                        <td>{{ $pesanan->no_hp }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $pesanan->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Pesanan</td>
                        <td>:</td>
                        <td>{{ $pesanan->tgl_pesanan }}</td>
                    </tr>
                    <tr>
                        <td>Qty</td>
                        <td>:</td>
                        <td>{{ $pesanan->qty }}</td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>:</td>
                        <td>Rp {{ $pesanan->total_harga }}</td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td>{{ $pesanan->deskripsi }}</td>
                    </tr>
                    <tr>
                        <td>Metode Pembayaran</td>
                        <td>:</td>
                        <td>{{ $metode_pembayaran->nama_metode }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection