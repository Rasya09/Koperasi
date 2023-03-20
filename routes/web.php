<?php

use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('master.index');
});

Route::get('/admin', function () {
    return view('dashboard2.dashboard');
});

// Route::get('/admin/dataproduk', function () {
//     return view('dashboard2.dataproduk');
// });

Route::get('/admin/dataproduk', [ProdukController::class, 'index']);
Route::get('/admin/tambahproduk', [ProdukController::class, 'create']);
Route::post('/admin/tambahproduk', [ProdukController::class, 'store']);
Route::delete('/admin/hapusproduk/{id}', [ProdukController::class, 'destroy']);
Route::get('/admin/detailproduk/{id}', [ProdukController::class, 'show']);
Route::get('/admin/{id}/editproduk', [ProdukController::class, 'edit']);
Route::put('/admin/simpaneditproduk/{id}', [ProdukController::class, 'update']);