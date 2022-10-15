<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::namespace('User')->group(function(){
    Route::get('/', 'HomeController@index')->name('/');
});

Route::namespace('Admin')->middleware('auth')->name('admin.')->prefix('admin')->group(function(){
    Route::get('/', 'DashboardController@index')->name('/');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('profil', 'ProfilController@index')->name('profil');
    Route::get('profil/create', 'ProfilController@create')->name('profil.create');
    Route::post('profil', 'ProfilController@insert')->name('profil.insert');
    Route::get('profil/edit/{profil}', 'ProfilController@edit')->name('profil.edit');
    Route::put('profil', 'ProfilController@update')->name('profil.update');
    Route::delete('profil', 'ProfilController@delete')->name('profil.delete');
    Route::get('profil/download/{profil}', 'ProfilController@download')->name('profil.download');

    Route::get('bisnis', 'BisnisController@index')->name('bisnis');
    Route::get('bisnis/create', 'BisnisController@create')->name('bisnis.create');
    Route::post('bisnis', 'BisnisController@insert')->name('bisnis.insert');
    Route::get('bisnis/edit/{bisnis}', 'BisnisController@edit')->name('bisnis.edit');
    Route::put('bisnis', 'BisnisController@update')->name('bisnis.update');
    Route::delete('bisnis', 'BisnisController@delete')->name('bisnis.delete');
    Route::get('bisnis/download/{bisnis}', 'BisnisController@download')->name('bisnis.download');

    Route::get('proyek', 'ProyekController@index')->name('proyek');
    Route::get('proyek/create', 'ProyekController@create')->name('proyek.create');
    Route::post('proyek', 'ProyekController@insert')->name('proyek.insert');
    Route::get('proyek/edit/{proyek}', 'ProyekController@edit')->name('proyek.edit');
    Route::put('proyek', 'ProyekController@update')->name('proyek.update');
    Route::delete('proyek', 'ProyekController@delete')->name('proyek.delete');
    Route::get('proyek/download/{proyek}', 'ProyekController@download')->name('proyek.download');

    Route::get('banner', 'BannerController@index')->name('banner');
    Route::get('banner/edit/{banner}', 'BannerController@edit')->name('banner.edit');
    Route::put('banner', 'BannerController@update')->name('banner.update');
    Route::get('banner/download/{banner}', 'BannerController@download')->name('banner.download');

    Route::get('visi', 'VisiController@index')->name('visi');
    Route::get('visi/create', 'VisiController@create')->name('visi.create');
    Route::post('visi', 'VisiController@insert')->name('visi.insert');
    Route::get('visi/edit/{visi_misi}', 'VisiController@edit')->name('visi.edit');
    Route::put('visi', 'VisiController@update')->name('visi.update');
    Route::delete('visi', 'VisiController@delete')->name('visi.delete');

    Route::get('misi', 'MisiController@index')->name('misi');
    Route::get('misi/create', 'MisiController@create')->name('misi.create');
    Route::post('misi', 'MisiController@insert')->name('misi.insert');
    Route::get('misi/edit/{visi_misi}', 'MisiController@edit')->name('misi.edit');
    Route::put('misi', 'MisiController@update')->name('misi.update');
    Route::delete('misi', 'MisiController@delete')->name('misi.delete');

    Route::get('founder', 'FounderController@index')->name('founder');
    Route::get('founder/create', 'FounderController@create')->name('founder.create');
    Route::post('founder', 'FounderController@insert')->name('founder.insert');
    Route::get('founder/edit/{founder}', 'FounderController@edit')->name('founder.edit');
    Route::put('founder', 'FounderController@update')->name('founder.update');
    Route::delete('founder', 'FounderController@delete')->name('founder.delete');
    Route::get('founder/download/{founder}', 'founderController@download')->name('founder.download');

    Route::get('kontak', 'KontakController@index')->name('kontak');
    Route::get('kontak/create', 'KontakController@create')->name('kontak.create');
    Route::post('kontak', 'KontakController@insert')->name('kontak.insert');
    Route::get('kontak/edit/{kontak}', 'KontakController@edit')->name('kontak.edit');
    Route::put('kontak', 'KontakController@update')->name('kontak.update');
    Route::delete('kontak', 'KontakController@delete')->name('kontak.delete');

    Route::get('klien', 'KlienController@index')->name('klien');
    Route::get('klien/create', 'KlienController@create')->name('klien.create');
    Route::post('klien', 'KlienController@insert')->name('klien.insert');
    Route::get('klien/edit/{klien}', 'KlienController@edit')->name('klien.edit');
    Route::put('klien', 'KlienController@update')->name('klien.update');
    Route::delete('klien', 'KlienController@delete')->name('klien.delete');

    Route::get('galeri', 'GaleriController@index')->name('galeri');
    Route::get('galeri/create', 'GaleriController@create')->name('galeri.create');
    Route::post('galeri', 'GaleriController@insert')->name('galeri.insert');
    Route::delete('galeri', 'GaleriController@delete')->name('galeri.delete');
});


