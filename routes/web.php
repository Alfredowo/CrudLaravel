<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

/*Route::get('/Productos', function (){
    return view('Productos.index');
})->name('ProductosIndex');*/

Route::get('/Productos', [ProductosController::class,'index'])->name('ProductosIndex');

Route::get('/Productos/Create', [ProductosController::class,'create'])->name('ProductosCreate');

Route::post('/Productos', [ProductosController::class,'store'])->name('ProductosStore');

Route::get('/Productos/{producto}/edit', [ProductosController::class,'edit'])->name('ProductosEdit');

Route::patch('/Productos/{producto}', [ProductosController::class,'update'])->name('ProductosUpdate');

Route::delete('/Productos/{producto}', [ProductosController::class,'destroy'])->name('ProductosDestroy');

Route::get('/registro', [RegistroController::class,'index'])->name('RegistroIndex');

Route::post('/registro', [RegistroController::class,'store'])->name('RegistroStore');

Route::get('/muro', [RegistroController::class,'index'])->name('MuroIndex');
Route::get('/muro', [RegistroController::class,'index'])->name('MuroIndex')->middleware('auth');

Route::get('/login', [LoginController::class,'index'])->name('LoginIndex');

Route::post('/login', [LoginController::class,'store'])->name('LoginStore');

Route::post('/logout', [LogoutController::class,'store'])->name('LogoutStore');