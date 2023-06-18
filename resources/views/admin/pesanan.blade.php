@extends('admin.layout.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
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
                        <th>Tanggal</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Jumlah Pesanan</th>
                        <th>Deskripsi</th>
                        <th>Nama Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                       $no = 1; 
                    @endphp
                    @foreach ($pesanan as $psnn)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $psnn->tanggal }}</td>
                        <td>{{ $psnn->nama_pemesan }}</td>
                        <td>{{ $psnn->alamat_pemesan }}</td>
                        <td>{{ $psnn->no_hp }}</td>
                        <td>{{ $psnn->email }}</td>
                        <td>{{ $psnn->jumlah_pesanan }}</td>
                        <td>{{ $psnn->deskripsi }}</td>
                        <td>{{ $psnn->nama_produk}}</td>
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