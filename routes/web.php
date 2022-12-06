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
    BankController,
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


// Route::get('/coba', function () {
//     return view('pages.coba');
// });

// Route::get('/invoice', function () {
//     return view('pages.invoice');
// });

Route::get('reminderpenyewa', [TransaksiController::class, 'reminderpenyewa']);

Route::group(['middleware' => ['auth', 'roleuser:penyewa', 'verified']], function () {
    Route::resource('dashboard', DashboardController::class);
    Route::get('kamarpenyewa', [KamarController::class, 'kamarindex'])->name('kamarpenyewa');
    Route::get('kamarpenyewacari', [KamarController::class, 'kamarcari'])->name('kamarpenyewa.cari');
    Route::get('kamarshow/{id}', [KamarController::class, 'kamarshow'])->name('kamarshow.penyewa');
    Route::get('notifikasipenyewa', [NotifikasiController::class, 'notifikasiindex'])->name('notifikasipenyewa');
    Route::get('transaksipenyewa', [TransaksiController::class, 'transaksiindex'])->name('transaksipenyewa');
    Route::post('transaksistorepenyewa', [TransaksiController::class, 'penyewastore'])->name('transaksistorepenyewa');
    Route::get('transaksipenyewainvoice/{id}', [TransaksiController::class, 'invoice'])->name('transaksipenyewa.invoice');
    Route::post('uploadbukti', [TransaksiController::class, 'buktipenyewa'])->name('uploadbukti.penyewa');
    Route::get('kontakpenyewa', [KontakController::class, 'kontakindex'])->name('kontakpenyewa');
    Route::get('SettingProfile/{id}', [UserController::class, 'edit'])->name('SettingProfile');
    Route::post('updateprofile', [UserController::class, 'update'])->name('updateprofile');

    Route::get('carabayar', [TransaksiController::class, 'carabayar'])->name('transaksi.carabayar');
});


Route::group(['middleware' => ['auth', 'roleuser:pemilik']], function () {
    Route::resource('dashboardadmin', DashboardAdminController::class);
    Route::resource('kamar', KamarController::class);
    Route::resource('cabang', CabangController::class);
    Route::resource('notifikasi', NotifikasiController::class);
    Route::resource('transaksi', TransaksiController::class);
    Route::resource('kontak', KontakController::class);
    Route::resource('akunbank', BankController::class);
    Route::post('validasitransaksi', [TransaksiController::class, 'validasi'])->name('transaksi.validasi');

    // Route::get('carabayar', [TransaksiController::class, 'carabayar'])->name('transaksi.carabayar');
    // Route::get('carabayar', [TransaksiController::class, 'carabayar'])->name('transaksi.carabayar');
});


// Route::get('/kamartambah', function (){
//     return view('pages.admin.kamartambah');
// });
Route::get('/kamardetail', function () {
    return view('pages.kamardetail');
});
Route::get('/carapembayaran', function () {
    return view('pages.carapembayaran');
});
Route::get('/metodepembayaran', function () {
    return view('pages.metodepembayaran');
});

require __DIR__ . '/auth.php';
