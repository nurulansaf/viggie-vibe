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
    protected $primarykey = 'id_produk';

    protected $fillable = [
        'kode_produk',
        'nama_produk',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id'
    ];

    public function produk(){
        return $this->belongTo(Produk::class);
    }
    public function kategori_produk(){
        return $this->hasMany(KategoriProduk::class);
    }

    public function getAllData(){
        $alldata = DB::table('produk')
        ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id_kategori')
        ->select('produk.*', 'kategori_produk.nama_kategori')
        ->get();
        return $alldata;
    }
}
