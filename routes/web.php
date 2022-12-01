<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmpleadoController;




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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/clientes', [CustomerController::class,'index'])->middleware(['auth', 'verified'])->name('clientes');

<<<<<<< HEAD
Route::get('/clientes/registrar', [CustomerController::class,'registrar'])->middleware(['auth', 'verified'])->name('clientes.registrar');

Route::post('/clientes/guardar', [CustomerController::class,'guardar'])->middleware(['auth', 'verified'])->name('clientes.guardar');


=======
>>>>>>> 70ed7356a2db712102165fb0de009e53a2c65e94
Route::get('/empleados', [EmpleadoController::class,'index'])->middleware(['auth', 'verified'])->name('empleados');

Route::get('/ventas', function () {
    return view('ventas');
})->middleware(['auth', 'verified'])->name('ventas');

require __DIR__.'/auth.php';

Route::get('/clientes/registrar', [
    ClientesController::class, 'registrar'
])->middleware(['auth', 'verified'])->name('clientes.registrar');


Route::post('/clientes/guardar', [
    ClientesController::class, 'guardar'
])->middleware(['auth', 'verified'])->name('clientes.guardar');