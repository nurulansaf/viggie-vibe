@extends('admin.layout.app')

@section('content')
<!-- code untuk form -->
<form method="POST" action="{{ url('admin/storepesanan') }}">
    {{ csrf_field() }}
    <h4 style="text-align: center">Form Tambah Data Pesanan</h4>
    <div class="form-group row">
        <label for="tgl_pesanan" class="col-4 col-form-label">Tanggal</label> 
        <div class="col-8">
        <input id="tgl_pesanan" name="tgl_pesanan" type="date" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Pemesan</label> 
        <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-4 col-form-label">Alamat</label> 
        <div class="col-8">
        <input id="alamat" name="alamat" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="no_hp" class="col-4 col-form-label">No Hp</label> 
        <div class="col-8">
        <input id="no_hp" name="no_hp" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
        <div class="col-8">
        <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" spellcheck="false" data-ms-editor="true"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="produk_id" class="col-4 col-form-label"> Produk</label> 
        <div class="col-8">
        <select id="produk_id" name="produk_id" class="custom-select">
            @foreach ($produk as $nama_produk)
                <option value="{{ $nama_produk->id_produk }}">{{ $nama_produk->nama_produk }}</option>
            @endforeach
        </select>
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection