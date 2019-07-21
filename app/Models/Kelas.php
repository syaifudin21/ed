<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'kelas', 'icon'
    ];
    protected $hidden = [
    ];
    protected $casts = [
    ];

    public function outlet(){
        return $this->belongsTo(Outlet::class, 'outlet_id', 'id');
    }
    public function mapel()
    {
        return $this->hasMany(Mapel::class, 'kelas_id', 'id');
    }
}
