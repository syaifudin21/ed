<?php

return [

    'defaults' => [
        'guard' => 'siswa',
        'passwords' => 'siswas',
    ],

    'guards' => [
        'siswa' => [
            'driver' => 'session',
            'provider' => 'siswas',
        ],
        'guru' => [
            'driver' => 'session',
            'provider' => 'gurus',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    'providers' => [
        'siswas' => [
            'driver' => 'eloquent',
            'model' => App\Models\Siswa::class,
        ],
        'gurus' => [
            'driver' => 'eloquent',
            'model' => App\Models\Guru::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
    ],

    'passwords' => [
        
    ],

];
