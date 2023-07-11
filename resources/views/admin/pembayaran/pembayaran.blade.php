@extends('admin.layout.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Pembayaran</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pembayaran</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ url('admin/addpembayaran') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pembayaran
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Jumlah Pembayaran</th>
                        <th>Nama Pemesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                       $no = 1; 
                    @endphp
                    @foreach ($pembayaran as $pmb)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $pmb->tgl_pembayaran }}</td>
                        <td>{{ $pmb->jumlah_pembayaran }}</td>
                        <td>{{ $pmb->nama_pemesan }}</td>
                        <td><a href="{{ url('admin/editpembayaran/'. $pmb->id_pembayaran) }}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{ url('admin/deletepembayaran/'. $pmb->id_pembayaran) }}" class="btn btn-danger">Delete</a></td>
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