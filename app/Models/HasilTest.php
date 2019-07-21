<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilTest extends Model
{
    protected $fillable = [
        'nomor_uji','nomor_user','soal_jawaban','hasil'
    ];
    protected $hidden = [
    ];
    protected $casts = [
        'soal_jawaban' => 'array',
        'hasil' => 'array'
    ];

    public function outlet(){
        return $this->belongsTo(Outlet::class, 'outlet_id', 'id');
    }
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class, 'pelanggan_id', 'id');
    }
}
