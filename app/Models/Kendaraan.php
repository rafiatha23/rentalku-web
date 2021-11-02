<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kategori_kota_id',
        'kategori_seat_id',
        'kategori_jenis_id',
        'name',
        'nopol',
        'seat',
        'harga',
        'tahun',
        'transmisi',
        'mesin',
        'warna',
        'supir',
        'image_link',
        'lat',
        'long',
    ];

    public function user(){
        return $this->hasOne('App\Models\User','id','user_id');
    }

    public function kategoriKota(){
        return $this->hasOne('App\Models\KategoriKota','id','kategori_kota_id');
    }

    public function kategoriSeat(){
        return $this->hasOne('App\Models\KategoriSeat','id','kategori_seat_id');
    }
    
    public function kategoriJenis(){
        return $this->hasOne('App\Models\KategoriJenis','id','kategori_jenis_id');
    }

    public function transaksi(){
        return $this->hasMany('App\Models\Transaksi');
    }

    public function ratingKendaraan(){
        return $this->hasMany('App\Models\RatingKendaraan');
    }

}
