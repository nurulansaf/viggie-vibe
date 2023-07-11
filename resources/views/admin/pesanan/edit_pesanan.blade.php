@extends('admin.layout.app')

@foreach ($pesanan as $item)
@section('content')
<!-- code untuk form -->
<form method="POST" action="{{ url('admin/proses_editpesanan/'. $item->id_pesanan) }}">
{{ csrf_field() }}
    <h4 style="text-align: center">Form Tambah Data Pesanan</h4>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Pemesan</label> 
        <div class="col-8">
        <input id="nama" name="nama" value="{{ $item->nama }}"  type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="no_hp" class="col-4 col-form-label">No Hp</label> 
        <div class="col-8">
        <input id="no_hp" name="no_hp" value="{{ $item->no_hp }}"  type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-4 col-form-label">Alamat</label> 
        <div class="col-8">
        <input id="alamat" name="alamat" value="{{ $item->alamat }}"  type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_pesanan" class="col-4 col-form-label">Tanggal Pesanan</label> 
        <div class="col-8">
        <input id="tgl_pesanan" name="tgl_pesanan" value="{{ $item->tgl_pesanan }}"  type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
        <div class="col-8">
        <input id="deskripsi" name="deskripsi"  value="{{ $item->deskripsi }}" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="id_metode_pembayaran" class="col-4 col-form-label">Metode Pembayaran</label> 
        <div class="col-8">
        <select id="id_metode_pembayaran" name="id_metode_pembayaran" class="custom-select">
            @foreach ($metode_pembayaran as $med)
                <option value="{{ $med->id_metode }}">{{ $med->nama_metode }}</option>
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