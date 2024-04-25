<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index']);
// Route::get('/level', [LevelController::class, 'index']);
Route::group(['prefix' => 'user'], function(){
    Route::get('/', [UserController::class, 'index']); //Menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']); //Menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']); //Menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']); //Menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']); //Menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']); //Menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']); //Menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); //Menghapus data user
});

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::put('/kategori/update/{id}', [KategoriController::class, 'update']);
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'delete']);

// Route::resource('user', POSController::class);

// js2
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/user/{id}/{name}', [UserController::class, 'profile']);
// Route::prefix('category')->group(function() {
//     Route::get('/food-beverage', [ProductsController::class, 'foodBeverage']);
//     Route::get('/beauty-health', [ProductsController::class, 'beautyHealth']);
//     Route::get('/home-care', [ProductsController::class, 'homeCare']);
//     Route::get('/baby-kid', [ProductsController::class, 'babyKid']);
// });
// Route::get('/penjualan', [PenjualanController::class, 'transaction']);
