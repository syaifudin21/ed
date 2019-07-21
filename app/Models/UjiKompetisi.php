<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UjiKompetisi extends Model
{
    protected $fillable = [
        'nomor_user','nomor_uji', 'kelas_id','nama_uji','deskripsi','soal','kkm','kesempatan','waktu_tayang','batas_tayang','publish'
    ];
    protected $hidden = [
    ];
    
    protected $casts = [
        'soal' => 'array',
    ];

    public function outlet(){
        return $this->belongsTo(Outlet::class, 'outlet_id', 'id');
    }
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class, 'pelanggan_id', 'id');
    }
}
