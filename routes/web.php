<?php

use App\Http\Controllers\JDIHController;
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

Route::get('/', function () {
    return view('Layout/main');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/galeri', function () {
    return view('Pages.galeri');
});

Route::get('/berita', function () {
    return view('Pages.berita');
});

Route::get('/tentang', function () {
    return view('Pages.tentang');
});

Route::get('/visi', function () {
    return view('Pages.visi');
});

Route::get('/tugas', function () {
    return view('Pages.tugas');
});

Route::get('/puu',[JDIHController::class,'puu']);
Route::get('/dokumentasi',[JDIHController::class,'dokumentasi']);
Route::get('/admin',[JDIHController::class,'admin']);
Route::get('/tambahdokumen',[JDIHController::class,'tambahdokumen']);

Route::post('/adddokumen',[JDIHController::class,'adddokumen']);

Route::get('/detailpuu/{jenis_dokumen}',[JDIHController::class,'detailpuu']);
Route::get('/detailpuu2/{judul}',[JDIHController::class,'detailpuu2']);
Route::get('/nama_rute_detailpuu/{jenis_dokumen}', [JDIHController::class, 'detailpuu'])->name('nama_rute_detailpuu');
