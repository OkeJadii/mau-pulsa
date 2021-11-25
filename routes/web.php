<?php

use App\Http\Controllers\ProviderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PulsaController;
use App\Models\Pulsa;

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

Route::get('/admin', function () {
    return view('admin.index', [
        "title" => "Dashboard",
        "pulsa" => Pulsa::all()
    ]);
});

Route::resource('/admin/pulsa/price', PulsaController::class);
Route::resource('/admin/pulsa/provider', ProviderController::class);


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
