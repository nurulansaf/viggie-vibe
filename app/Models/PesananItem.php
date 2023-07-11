<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananItem extends Model
{
    use HasFactory;

    protected $table = 'pesanan_item';

    protected $primaryKey = 'id_pesananitem';

    public $timestamps = false;

    protected $fillable = [
        'qty',
        'total',
        'produk_id',
        'pesanan_id',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id');
    }

    public function getAllData(){
        $alldata = DB::table('pesanan_item')
        ->join('produk', 'pesanan_item.produk_id', '=', 'produk.id_produk')
        ->join('pesanan', 'pesanan_item.pesanan_id', '=', 'pesanan.id_pesanan')
        ->select('pesanan_item.*', 'produk.nama_produk as nama_produk', 'pesanan.nama as nama_pemesan')
        ->get();
        return $alldata;
    }
}
