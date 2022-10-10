<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Front')->group(function(){
    Route::get('/', 'HomeController@index')->name('/');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
