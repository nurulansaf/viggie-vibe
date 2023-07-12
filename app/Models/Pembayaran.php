<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    public $timestamps = false;

    protected $primarykey = 'id_pembayaran';

    protected $fillable = [
        'tgl_pembayaran',
        'jumlah_pembayaran',
        'pesanan_id',
    ];

    public function pesanan(){
        return $this->belongsTo(Pesanan::class, 'pesanan_id');
    }

    public function getAllData(){
        $alldata = DB::table('pembayaran')
        ->join('pesanan', 'pembayaran.pesanan_id', '=', 'pesanan.id')
        ->select('pembayaran.*', 'pesanan.nama as nama_pemesan')
        ->get();
        return $alldata;
    }
    
}
