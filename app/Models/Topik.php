<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topik extends Model
{
    protected $fillable = [
        'bab_id','topik','icon'
    ];
    protected $hidden = [
    ];
    protected $casts = [
    ];

    public function outlet(){
        return $this->belongsTo(Outlet::class, 'outlet_id', 'id');
    }
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class, 'pelanggan_id', 'id');
    }
}
