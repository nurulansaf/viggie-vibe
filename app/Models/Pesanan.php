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
        'nama_pemesan',
        'no_hp',
        'alamat',
        'tgl_pesanan',
        'deskripsi',
        'id_metode_pembayaran'
    ];

    public function produk(){
        return $this->belongTo(Produk::class);
    }

    public function getAllData(){
        $alldata = DB::table('pesanan')
        ->join('produk', 'pesanan.id_metode_pembayaran', '=', 'metode_pembayaran.id_metode')
        ->select('pesanan.*', 'produk.nama as nama_produk')
        ->get();
        return $alldata;
    }
}
