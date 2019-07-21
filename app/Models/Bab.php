<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    protected $fillable = [
        'mapel_id','bab', 'icon'
    ];
    protected $hidden = [
    ];
    protected $casts = [
    ];

    public function bab(){
        return $this->belongsTo(Bab::class, 'bab_id', 'id');
    }
    public function topik()
    {
        return $this->hasMany(Topik::class, 'bab_id', 'id');
    }
    //
}
