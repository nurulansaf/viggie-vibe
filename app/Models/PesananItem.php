<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PesananItem extends Model
{
    use HasFactory;
    protected $table = 'pesanan_item';

    protected $fillable = [
        'iditem',
        'qty',
        'total',
        'produk_id',
        'pesanan_id',
    ];

    public function pesanan(){
        return $this->belongTo(Pesanan::class);
    }
    public function produk(){
        return $this->belongTo(Produk::class);
    }
    public function getAllData()
    {
        $alldata = DB::table('pesanan_item')
        ->join('produk', 'pesanan_item.produk_id', '=', 'produk.id_produk')
        ->select('pesanan_item.*', 'produk.nama_produk as nama_produk')
        ->get();
        return $alldata;
    }
}
