<?php

use App\Models\Pulsa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\RegisterController;

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
        "title" => "Dashboard",
        "pulsa" => Pulsa::all()
    ]);
})->middleware('admin');

Route::resource('/admin/pulsa', PulsaController::class)->middleware('admin');

Route::get('/pulsa', function () {
    return view('user.index', [
        "title" => "Pembelian Pulsa",

    ]);
});

Route::get('/pulsa/telkomsel', function () {
    return view('user.pulsa.telkomsel', [
        "title" => "Telkomsel",

    ]);
});
