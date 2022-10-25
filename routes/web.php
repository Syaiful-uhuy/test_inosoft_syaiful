<?php

use App\Http\Controllers\MobilController;
use App\Http\Controllers\MotorController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/mobil', function () {
    return view('mobil', [
        "title" => "Mobil",
        "image" => "hoda-brv.jpg",
        "edisi" => "All New Honda BR-V S MT",
        "slug" => "honda-brv",
        "tahun" => "Tahun:  2020",
        "warna" => "Warna:  Crystal Black Pearl Min",
        "harga" => "Harga:  Rp281.1 Juta"
    ]);
});

Route::get('/motor', function () {
    return view('motor', [
        "title" => "Motor",
        "image" => "honda-vario.jpg",
        "edisi" => "Honda Vario 160 CBS",
        "tahun" => "Tahun:  2022",
        "warna" => "Warna:  Grande Matte Red",
        "harga" => "Harga:  Rp 26,34 Juta"
    ]);
});

Route::get('/mobil/spesifikasi/{id}',[MobilController::class, 'spesifikasi']);
Route::get('/motor/spesifikasi_motor/{id}',[MotorController::class, 'spesifikasi_motor']);
