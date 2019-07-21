<?php

Route::get('/', 'guru\HomeController@index')->name('guru.home');
Route::get('/login', 'guru\LoginController@form');
Route::post('/login', 'guru\LoginController@login')->name('guru.login');
Route::post('/logout', 'guru\LoginController@logout')->name('guru.logout');

Route::get('/profil', 'guru\ProfilController@profil')->name('guru.profil');
Route::put('/profil/update', 'guru\ProfilController@profilupdate')->name('guru.profil.update');
Route::put('/profil/password', 'guru\ProfilController@profilupdatepasword')->name('guru.profil.password');
