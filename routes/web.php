<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinopsisController;
use App\Http\Controllers\CharaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/Sinopsis', function () {
    return view('sinopsis');
});

Route::get('/Character', function () {
    return view('character');
});


Route::get('/inputs', function () {
    return view('input');
});

Route::get('/inputc', function () {
    return view('input');
});

Route::get('/Done', [SinopsisController::class, 'readdata']);
Route::get('/inputs', [SinopsisController::class, 'input']);
Route::post('/notesinopsis/store', [SinopsisController::class, 'store']);

Route::get('/notesinopsis/edit/{judul}', [SinopsisController::class, 'edit']);
Route::get('/notesinopsis/update', [SinopsisController::class, 'update']);
Route::get('/notesinopsis/hapus/{judul}', [SinopsisController::class,'hapus']);

// // Route::get('/Done', [CharaController::class, 'readdata']);
Route::get('/inputc', [CharaController::class, 'input']);
Route::get('/notechara/store', [CharaController::class, 'store']);

Route::get('/notechara/edit/{nama}', [CharaController::class, 'edit']);
Route::get('/notechara/update', [CharaController::class, 'update']);
Route::get('/notechara/hapus/{nama}', [CharaController::class,'hapus']);