<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    CabangController,
    KamarController,
    NotifikasiController,
    TransaksiController,
    KontakController,
    DashboardAdminController,
    UserController,
};

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

Route::group(['middleware' => ['auth','roleuser:penyewa','verified']], function() {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('kamar', KamarController::class);
    Route::resource('cabang', CabangController::class);
    Route::resource('notifikasi', NotifikasiController::class);
    Route::resource('transaksi', TransaksiController::class);
    Route::resource('kontak', KontakController::class);
    Route::get('SettingProfile/{id}', [UserController::class, 'edit'])->name('SettingProfile');
    Route::post('updateprofile', [UserController::class, 'update'])->name('updateprofile');

    Route::get('carabayar', [TransaksiController::class, 'carabayar'])->name('transaksi.carabayar');
    Route::get('carabayar', [TransaksiController::class, 'carabayar'])->name('transaksi.carabayar');
});


Route::group(['middleware' => ['auth','roleuser:pemilik']], function() {
    Route::resource('dashboardadmin', DashboardAdminController::class);
    // Route::resource('kamar', KamarController::class);
    // Route::resource('cabang', CabangController::class);
    // Route::resource('notifikasi', NotifikasiController::class);
    // Route::resource('transaksi', TransaksiController::class);
    // Route::resource('kontak', KontakController::class);

    // Route::get('carabayar', [TransaksiController::class, 'carabayar'])->name('transaksi.carabayar');
    // Route::get('carabayar', [TransaksiController::class, 'carabayar'])->name('transaksi.carabayar');
});


Route::get('/kamartambah', function (){
    return view('pages.admin.kamartambah');
});
Route::get('/kamardetail', function (){
    return view('pages.kamardetail');
});
Route::get('/carapembayaran', function (){
    return view('pages.carapembayaran');
});
Route::get('/metodepembayaran', function (){
    return view('pages.metodepembayaran');
});

require __DIR__.'/auth.php';
