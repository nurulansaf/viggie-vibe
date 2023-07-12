@extends('admin.layout.app')
<!-- orangtua/parent dari setiap halaman -->

<!-- extends itu perintah agar kita dapat menggunakan 
semua code yang ada di dalam file yang di extends -->

<!-- halaman dashboard adalah anak dari si parent/orangtua -->

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Pesanan Item</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan Item</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ url('admin/addpesananitem') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan Item
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jumlah Pesanan</th>
                        <th>Total Harga</th>
                        <th>Nama Produk</th>
                        <th>Pesanan</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pesanan_item as $item)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->produk_id}}</td>
                        <td>{{ $item->pesanan_id }}</td>
                        <td><a href="{{ url('admin/editpesananitem/'. $item->iditem) }}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{ url('admin/deletepesananitem/'. $item->iditem) }}" class="btn btn-danger">Delete</a></td>
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