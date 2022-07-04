<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/admindashboard', function (){
    return view('pages.admin.dashboardadmin');
});
Route::get('/kamartambah', function (){
    return view('pages.admin.kamartambah');
});
Route::get('/kamar', function (){
    return view('pages.kamar');
});
Route::get('/kamardetail', function (){
    return view('pages.kamardetail');
});
Route::get('/pembayaran', function (){
    return view('pages.pembayaran');
});
Route::get('/carapembayaran', function (){
    return view('pages.carapembayaran');
});
Route::get('/metodepembayaran', function (){
    return view('pages.metodepembayaran');
});
Route::get('/kontak', function (){
    return view('pages.kontak');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
