<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $fillable = [
        'nomor_user','topik_id','soal','jawaban','pembahasan'
    ];
    protected $hidden = [
    ];
    protected $casts = [
        'soal' => 'array',
        'jawaban' => 'array',
        'pembahasan' => 'array',
    ];

    public function outlet(){
        return $this->belongsTo(Outlet::class, 'outlet_id', 'id');
    }
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class, 'pelanggan_id', 'id');
    }
}
