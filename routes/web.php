<?php

use App\Http\Controllers\ProviderController;
use App\Models\Pulsa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserPulsaController;
use App\Models\Provider;

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

Route::get('/pulsa', function () {
    return view('user.pulsa', [
        "title" => "Pulsa"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin', function () {
    return view('admin.index', [
        "title" => "Dashboard"
    ]);
})->middleware('admin');

Route::resource('/admin/pulsa', PulsaController::class)->middleware('admin');
Route::resource('/admin/provider', ProviderController::class)->middleware('admin');

Route::get('/provider', function () {
    return view('user.pulsa.providers', [
        "title" => "Pembelian Pulsa",
        "providers" => Provider::all()
    ]);
});

Route::get('/bayar', function () {
    return view('user.pulsa.bayarp',[ 
        "title" => "Pembayaran Pulsa",
        // "bayarp" => bayarp::all()
    ]);
});

Route::get('/pulsa', [UserPulsaController::class, 'index']);
