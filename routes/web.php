<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
Route::view('admin','Admin');
*/

Route::controller(CrudController::class)->group(function () {
    Route::get('/', 'Index')->name('home');
    Route::post('/store', 'Store')->name('store.info');
    Route::get('/infos', 'Display')->name('display.info');
    Route::get('/info/edit/{id}', 'Edit')->name('edit.info');
    Route::post('/info/update','Update')->name('update.info');
    Route::post('/info/delete', 'Delete')->name('delete.info');
});
Route::view('admin','Admin');
