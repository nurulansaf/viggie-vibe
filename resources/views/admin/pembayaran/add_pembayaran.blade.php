@extends('admin.layout.app')
@section('content')
<!-- code untuk form -->
<form method="POST" action="{{ url('admin/storepembayaran') }}">
    {{ csrf_field() }}
    <h4 style="text-align: center">Form Tambah Data Pembayaran</h4>
    <div class="form-group row">
        <label for="tgl_pembayaran" class="col-4 col-form-label">Tanggal Pembayaran</label> 
        <div class="col-8">
        <input id="tgl_pembayaran" name="tgl_pembayaran" type="date" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah_pembayaran" class="col-4 col-form-label">Jumlah Pembayaran</label> 
        <div class="col-8">
        <input id="jumlah_pembayaran" name="jumlah_pembayaran" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="pesanan_id" class="col-4 col-form-label">Nama Pemesan</label> 
        <div class="col-8">
        <select id="pesanan_id" name="pesanan_id" class="custom-select">
            @foreach ($pesanan as $psnn)
                <option value="{{ $psnn->id_pesanan }}">{{ $psnn->nama }}</option>
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