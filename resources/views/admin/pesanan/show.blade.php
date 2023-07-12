@extends('admin.layout.app')
<!-- orangtua/parent dari setiap halaman -->

<!-- extends itu perintah agar kita dapat menggunakan
semua code yang ada di dalam file yang di extends -->

<!-- halaman dashboard adalah anak dari si parent/orangtua -->

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Detail Pesanan</h1>
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
                <table>
                    <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td>{{ $pesanan->id }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>{{ $pesanan->tgl_pesanan }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $pesanan->nama }}</td>
                    </tr>
                    <tr>
                        <td>No hp</td>
                        <td>:</td>
                        <td>{{ $pesanan->no_hp }}</td>
                    </tr>
                </table>
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Produk</th>
                            <th>Qty</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pesanan_item as $item)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $item->produk_id }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->total }}</td>
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
