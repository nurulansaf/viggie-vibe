@extends('admin.layout.app')
    
@foreach ($produk as $item)
@section('content')
<!-- code untuk form -->
<form method="POST" action="{{ url('admin/proses_editproduk/'. $item->id) }}">
    {{ csrf_field() }}
    <h4 style="text-align: center">Form Edit Data Produk</h4>
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
        <input id="kode" name="kode" value="{{ $item->kode }}"  type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
        <div class="col-8">
        <input id="nama" name="nama"  value="{{ $item->nama }}" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label> 
        <div class="col-8">
        <input id="harga_jual" name="harga_jual"  value="{{ $item->harga_jual }}" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
        <div class="col-8">
        <input id="harga_beli" name="harga_beli"  value="{{ $item->harga_beli }}" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-4 col-form-label">Stok</label> 
        <div class="col-8">
        <input id="stok" name="stok"  value="{{ $item->stok }}" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="min_stok" class="col-4 col-form-label">Min Stok</label> 
        <div class="col-8">
        <input id="min_stok" name="min_stok"  value="{{ $item->min_stok }}" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
        <div class="col-8">
        <input id="deskripsi" name="deskripsi"  value="{{ $item->deskripsi }}" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="kategori_produk_id" class="col-4 col-form-label">Kategori Produk</label> 
        <div class="col-8">
        <select id="kategori_produk_id" name="kategori_produk_id" class="custom-select">
            @foreach ($kategori_produk as $nama_kategori)
                <option value="{{ $nama_kategori->id }}">{{ $nama_kategori->nama }}</option>
            @endforeach
        </select>
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
@endsection
@endforeach