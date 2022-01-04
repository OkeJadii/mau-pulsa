<?php

use App\Models\Provider;
use App\Models\Ewallet;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\EwalletController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserPulsaController;
use App\Http\Controllers\UserEwalletController;
use App\Http\Controllers\EwalletPriceController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

// LOGIN & REGISTER
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// ADMIN
Route::get('/admin', function () {
    $providers = Provider::all();
    $providers = $providers->take(4);
    $user = User::all();
    $user = $user->take(3);
    return view('admin.index', [
        "title" => "Dashboard",
        "providers" => $providers,
        "ewallets" => Ewallet::all(),
        "users" => $user
    ]);
})->middleware('admin');

Route::resource('/admin/pulsa', PulsaController::class)->middleware('admin');
Route::resource('/admin/provider', ProviderController::class)->middleware('admin');
Route::resource('/admin/ewallet', EwalletController::class)->middleware('admin');
Route::resource('/admin/ewalletprice', EwalletPriceController::class)->middleware('admin');

// PULSA
Route::get('/provider', function () {
    return view('user.pulsa.providers', [
        "title" => "Pembelian Pulsa",
        "providers" => Provider::all()
    ]);
});

Route::get('/pulsa', [UserPulsaController::class, 'index']);
Route::post('/pulsa/detail', [UserPulsaController::class, 'detail']);
Route::post('/pulsa/transaction', [UserPulsaController::class, 'transaction']);

Route::get('/bayar/pulsa', function () {
    return view('user.pulsa.bayar', [
        "title" => "Pembayaran Pulsa"
    ]);
});

// PLN
Route::get('/pln', function () {
    return view('user.pln.index', [
        "title" => "PLN"
    ]);
});

// EWALLET
Route::get('/ewallet', function () {
    return view('user.ewallet.index', [
        "title" => "Top Up Ewallet",
        "ewallets" => Ewallet::all()
    ]);
});
Route::get('/ewalletprice', [UserEwalletController::class, 'index']);
Route::post('/ewallet/detail', [UserEwalletController::class, 'detail']);

Route::get('/history', function () {
    return view('user.history.index', [
        "title" => "Riwayat Transaksi"
    ]);
});

Route::get('/blank', function () {
    return view('user.blank', [
        "title" => "Coming Soon"
    ]);
});
