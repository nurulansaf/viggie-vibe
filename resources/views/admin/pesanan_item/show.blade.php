@extends('admin.layout.app')
<!-- orangtua/parent dari setiap halaman -->

<!-- extends itu perintah agar kita dapat menggunakan
semua code yang ada di dalam file yang di extends -->

<!-- halaman dashboard adalah anak dari si parent/orangtua -->

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Detail Pesanan Item</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Pesanan Item</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Pesanan Item
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td>{{ $pesanan_item->qty }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>{{ $pesanan_item->total }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $pesanan_item->produk_id }}</td>
                    </tr>
                    <tr>
                        <td>No hp</td>
                        <td>:</td>
                        <td>{{ $pesanan_item->pesanan_id }}</td>
                    </tr>
                </table>
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Produk ID</th>
                            <th>Pesanan ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pesanan_item as $item)
                            <tr>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->total }}</td>
                                <td>{{ $item->produk_id }}</td>
                                <td>{{ $item->pesanan_id }}</td>
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
