@extends('admin.layout.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Kategori Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Kategori Produk</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
        @if (Auth::user()->role == 'admin')
            <a href="{{ url('admin/addkategoriproduk') }}" class="btn btn-primary">Tambah Data</a>
        @endif
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Kategori Produk
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                       $no = 1; 
                    @endphp
                    @foreach ($kategori_produk as $katprod)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $katprod->nama_kategori }}</td>
                        <td><a href="{{ url('admin/deletekategoriproduk/'. $katprod->id) }}" class="btn btn-danger">Delete</a></td>
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