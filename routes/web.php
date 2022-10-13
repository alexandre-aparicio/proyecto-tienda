<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CarroController;

use App\Http\Controllers\CustomAuthController;



Route::get('/', [ProductoController::class, 'index'])->name('index');
Route::get('productos/{id}', [ProductoController::class, 'show'])->name('single-product');



//Route::get('categoria/{id}', [CategoriaController::class, 'show'])->name('categoria');

//Route::post('cart-insert/', [CarroController::class, 'store'])->name('cart-insert');

//Route::delete('cart-delete/{id}', [CarroController::class, 'destroy'])->name('cart-delete');


Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//Rutas dashboard

Route::get('/dashboard/main', [ProductoController::class, 'dashArticles'])->name('dashboard-main');