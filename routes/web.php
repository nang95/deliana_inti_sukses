<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::namespace('Front')->group(function(){
    Route::get('/', 'HomeController@index')->name('/');
});

Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function(){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});


