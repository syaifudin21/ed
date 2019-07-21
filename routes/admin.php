<?php

Route::get('/', 'admin\HomeController@index')->name('admin.home');
Route::get('/login', 'admin\LoginController@form');
Route::post('/login', 'admin\LoginController@login')->name('admin.login');
Route::post('/logout', 'admin\LoginController@logout')->name('admin.logout');

Route::get('/guru', 'admin\GuruController@index')->name('admin.guru');
Route::get('/guru/create', 'admin\GuruController@create')->name('admin.guru.create');
Route::get('/guru/show/{id}', 'admin\GuruController@show')->name('admin.guru.show');
Route::post('/guru/tambah', 'admin\GuruController@store')->name('admin.guru.store');
Route::get('/guru/edit/{id}', 'admin\GuruController@edit')->name('admin.guru.edit');
Route::put('/guru/update', 'admin\GuruController@update')->name('admin.guru.update');
Route::delete('/guru/delete', 'admin\GuruController@delete')->name('admin.guru.delete');

Route::get('/siswa', 'admin\SiswaController@index')->name('admin.siswa');
Route::get('/siswa/create', 'admin\SiswaController@create')->name('admin.siswa.create');
Route::get('/siswa/show/{id}', 'admin\SiswaController@show')->name('admin.siswa.show');
Route::post('/siswa/tambah', 'admin\SiswaController@store')->name('admin.siswa.store');
Route::get('/siswa/edit/{id}', 'admin\SiswaController@edit')->name('admin.siswa.edit');
Route::put('/siswa/update', 'admin\SiswaController@update')->name('admin.siswa.update');
Route::delete('/siswa/delete', 'admin\SiswaController@delete')->name('admin.siswa.delete');

Route::get('/skema', 'admin\SkemaController@index')->name('admin.skema');
Route::post('/skema/kelas/tambah', 'admin\SkemaController@kelasstore')->name('admin.kelas.store');
Route::post('/skema/kelas/update', 'admin\SkemaController@kelasupdate')->name('admin.kelas.update');
Route::post('/skema/mapel/tambah', 'admin\SkemaController@mapelstore')->name('admin.mapel.store');
Route::post('/skema/bab/tambah', 'admin\SkemaController@babstore')->name('admin.bab.store');
