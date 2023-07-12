<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    public $timestamps = false;

    protected $primarykey = 'id';

    protected $fillable = [
        'kode_produk',
        'nama_produk',
        'gambar_produk',
        'stok',
        'min_stok',
        'harga_beli',
        'harga_jual',
        'deskripsi',
        'kategori_produk_id'
    ];

    public function kategori_produk(){
        return $this->belongsTo(KategoriProduk::class);
    }

    public function getAllData(){
        $alldata = DB::table('produk')
        ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
        ->select('produk.*', 'kategori_produk.nama_kategori as nama_kategori')
        ->get();
        return $alldata;
    }
}
