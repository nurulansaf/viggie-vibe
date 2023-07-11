<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MetodePembayaran extends Model
{
    use HasFactory;
    protected $table = 'metode_pembayaran';
    
    public $timestamps = false;
    
    protected $primarykey = 'id_metode';

    protected $fillable = [
        'nama_metode'
    ];

    public function getAllData(){
        $alldata = DB::table('metode_pembayaran')
        ->select('metode_pembayaran.*')
        ->get();
        return $alldata;
    }
}
