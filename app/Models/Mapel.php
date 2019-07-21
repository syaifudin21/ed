<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $fillable = [
        'kelas_id','mapel','icon'
    ];
    protected $hidden = [
    ];
    protected $casts = [
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
    public function bab()
    {
        return $this->hasMany(Bab::class, 'mapel_id', 'id');
    }
}
