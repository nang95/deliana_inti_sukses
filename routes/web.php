<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::namespace('User')->group(function(){
    Route::get('/', 'HomeController@index')->name('/');
});

Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function(){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('profil', 'ProfilController@index')->name('profil');
    Route::get('profil/create', 'ProfilController@create')->name('profil.create');
    Route::post('profil', 'ProfilController@insert')->name('profil.insert');
    Route::get('profil/edit/{profil}', 'ProfilController@edit')->name('profil.edit');
    Route::put('profil', 'ProfilController@update')->name('profil.update');
    Route::delete('profil', 'ProfilController@delete')->name('profil.delete');

    Route::get('bisnis', 'BisnisController@index')->name('bisnis');
    Route::get('bisnis/create', 'BisnisController@create')->name('bisnis.create');
    Route::post('bisnis', 'BisnisController@insert')->name('bisnis.insert');
    Route::get('bisnis/edit/{bisnis}', 'BisnisController@edit')->name('bisnis.edit');
    Route::put('bisnis', 'BisnisController@update')->name('bisnis.update');
    Route::delete('bisnis', 'BisnisController@delete')->name('bisnis.delete');

    Route::get('proyek', 'ProyekController@index')->name('proyek');
    Route::get('proyek/create', 'ProyekController@create')->name('proyek.create');
    Route::post('proyek', 'ProyekController@insert')->name('proyek.insert');
    Route::get('proyek/edit/{proyek}', 'ProyekController@edit')->name('proyek.edit');
    Route::put('proyek', 'ProyekController@update')->name('proyek.update');
    Route::delete('proyek', 'ProyekController@delete')->name('proyek.delete');

    Route::get('banner', 'BannerController@index')->name('banner');
    Route::get('banner/create', 'BannerController@create')->name('banner.create');
    Route::post('banner', 'BannerController@insert')->name('banner.insert');
    Route::get('banner/edit/{banner}', 'BannerController@edit')->name('banner.edit');
    Route::put('banner', 'BannerController@update')->name('banner.update');
    Route::delete('banner', 'BannerController@delete')->name('banner.delete');

    Route::get('visi_misi', 'visi_misiController@index')->name('visi_misi');
    Route::get('visi_misi/create', 'visi_misiController@create')->name('visi_misi.create');
    Route::post('visi_misi', 'visi_misiController@insert')->name('visi_misi.insert');
    Route::get('visi_misi/edit/{visi_misi}', 'visi_misiController@edit')->name('visi_misi.edit');
    Route::put('visi_misi', 'visi_misiController@update')->name('visi_misi.update');
    Route::delete('visi_misi', 'visi_misiController@delete')->name('visi_misi.delete');

    Route::get('founder', 'FounderController@index')->name('founder');
    Route::get('founder/create', 'FounderController@create')->name('founder.create');
    Route::post('founder', 'FounderController@insert')->name('founder.insert');
    Route::get('founder/edit/{founder}', 'FounderController@edit')->name('founder.edit');
    Route::put('founder', 'FounderController@update')->name('founder.update');
    Route::delete('founder', 'FounderController@delete')->name('founder.delete');

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
    Route::get('galeri/edit/{galeri}', 'GaleriController@edit')->name('galeri.edit');
    Route::put('galeri', 'GaleriController@update')->name('galeri.update');
    Route::delete('galeri', 'GaleriController@delete')->name('galeri.delete');
});


