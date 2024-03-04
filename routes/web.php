<?php

use App\Livewire\Home;
use App\Livewire\Kontak;
use App\Livewire\Produk;
use App\Livewire\Tentang;
use App\Livewire\Testimoni;
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

Route::get('/', function(){
    return view('home');
})->name('home');


Route::get('/produk', Produk::class)->name('produk');
Route::get('/testimoni', Testimoni::class)->name('testimoni');
Route::get('/tentang-kami', Tentang::class)->name('tentang');
Route::get('/kontak-kami', Kontak::class)->name('kontak');
