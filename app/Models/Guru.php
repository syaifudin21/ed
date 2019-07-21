<?php
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guru extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nomor_user', 'nama','deskripsi','foto','username','password'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
    ];
}
