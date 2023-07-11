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
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan Item
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Produk ID</th>
                        <th>Pesanan ID</th>
                        @if (Auth::user()->role == 'admin')
                        <th>Aksi</th>
                        @endif
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
                        <td>{{ $item->produk_id }}</td>
                        <td>{{ $item->pesanan_id }}</td>
                        @if (Auth::user()->role == 'admin')
                        <td><a href="{{ url('admin/detailpesananitem/'. $item->id_pesanan_item) }}" class="btn btn-info">Detail</a></td>
                        <td><a href="{{ url('admin/editpesananitem/'. $item->id_pesanan_item) }}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{ url('admin/deletepesananitem/'. $item->id_pesanan_item) }}" class="btn btn-danger">Delete</a></td>
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