@extends('admin.layout.app')
@section('content')
<!-- code untuk form -->
<form method="POST" action="{{ url('admin/storeproduk') }}">
    {{ csrf_field() }}
    <h4 style="text-align: center">Form Tambah Data Produk</h4>
    <div class="form-group row">
        <label for="kode_produk" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
        <input id="kode_produk" name="kode_produk" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_produk" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
        <input id="nama_produk" name="nama_produk" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="gambar_produk" class="col-4 col-form-label">Gambar</label> 
        <div class="col-8">
        <input id="gambar_produk" name="gambar_produk" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-4 col-form-label">Stok</label> 
        <div class="col-8">
        <input id="stok" name="stok" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="min_stok" class="col-4 col-form-label">Min Stok</label> 
        <div class="col-8">
        <input id="min_stok" name="min_stok" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
        <div class="col-8">
        <input id="harga_beli" name="harga_beli" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label> 
        <div class="col-8">
        <input id="harga_jual" name="harga_jual" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
        <div class="col-8">
        <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" spellcheck="false" data-ms-editor="true"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="kategori_produk_id" class="col-4 col-form-label">Kategori Produk</label> 
        <div class="col-8">
        <select id="kategori_produk_id" name="kategori_produk_id" class="custom-select">
            @foreach ($kategori_produk as $nama_kategori)
                <option value="{{ $nama_kategori->id_kategori }}">{{ $nama_kategori->nama_kategori }}</option>
            @endforeach
        </select>
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>
</form>
@endsection