@extends('admin.layout.app')

@section('content')
<!-- code untuk form -->
<form method="POST" action="{{ url('admin/storekategoriproduk') }}">
    {{ csrf_field() }}
    <h4 style="text-align: center">Form Tambah Data Kategori Produk</h4>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Kategori</label> 
        <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection