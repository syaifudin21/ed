<?php
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nomor_user', 'referal', 'nama','foto','kelas','username','password','mengikuti'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'mengikuti' => 'array'
    ];
}
