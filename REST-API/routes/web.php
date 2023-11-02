<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/animals', function () {
    echo('menampilkan data animals');
});

Route::post('/animals', function () {
    echo('menambahkan hewan baru');
});

Route::put('/animals', function () {
    echo('mengupdate data animals');
});

Route::delete('/animals', function () {
    echo('menghapus data animals');
});