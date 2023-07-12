<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    public $timestamps = false;

    protected $primarykey = 'id';

    protected $fillable = [
        'produk_id',
        'nama',
        'no_hp',
        'alamat',
        'tgl_pesanan',
        'qty',
        'total_harga',
        'deskripsi',
        'id_metode_pembayaran'
    ];

    public function metode_pembayaran(){
        return $this->belongsTo(MetodePembayaran::class);
    }

    public function getAllData(){
        $alldata = DB::table('pesanan')
        ->join('produk', 'pesanan.produk_id', '=', 'produk.id')
        ->join('metode_pembayaran', 'pesanan.id_metode_pembayaran', '=', 'metode_pembayaran.id')
        ->select('pesanan.*', 'produk.nama_produk as nama_produk', 'metode_pembayaran.nama_metode as nama_metode')
        ->get();
        return $alldata;
    }
}
