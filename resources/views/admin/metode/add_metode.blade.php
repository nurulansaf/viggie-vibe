@extends('admin.layout.app')

@section('content')
<!-- code untuk form -->
<form method="POST" action="{{ url('admin/storemetodepembayaran') }}">
    {{ csrf_field() }}
    <h4 style="text-align: center">Tambah Data Metode Pembayaran</h4>
    <div class="form-group row">
        <label for="nama_metode" class="col-4 col-form-label">Metode Pembayaran</label> 
        <div class="col-8">
        <input id="nama_metode" name="nama_metode" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>
</form>
@endsection