<?php

Route::get('/', 'siswa\HomeController@index')->name('siswa.home');
Route::get('/login', 'siswa\LoginController@form');
Route::post('/login', 'siswa\LoginController@login')->name('siswa.login');
Route::post('/logout', 'siswa\LoginController@logout')->name('siswa.logout');

Route::get('/profil', 'siswa\ProfilController@profil')->name('siswa.profil');
Route::put('/profil/update', 'siswa\ProfilController@profilupdate')->name('siswa.profil.update');
Route::put('/profil/password', 'siswa\ProfilController@profilupdatepasword')->name('siswa.profil.password');
