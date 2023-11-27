<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswa;
use App\Http\Controllers\Halaman;
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
    return view('home');
});
Route::get('/siswa',[siswa::class,'index']);
Route::get('/siswa/{id}',[siswa::class,'detail'])->where('id','[0-9]+');
Route::get('/',[Halaman::class,'index']);
Route::get('/kontak',[Halaman::class,'kontak']);
Route::get('/tentang',[Halaman::class,'tentang']);
// Route::get('/siswa', function () {
//     return view('siswa');
// });
// Route::get('/siswa/{id}', function ($id) {
//     return "saya siswa dengan id $id";
// })->where('id','[0-9]+');
// Route::get('/siswa/{id}/{nama}', function ($id,$nama) {
//     return "saya siswa dengan id $id dan nama $nama";
// })->where(['id'=>'[0-9]+','nama'=>'[A-Za-z]+']);