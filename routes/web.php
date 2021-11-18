<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ProveedorController;
use App\Models\User;

use App\Http\Livewire\Clientes;

Route::get('/', HomeController::class);

Route::get('personal', [PersonalController::class, 'index'])->name('personal.index');
Route::get('personal/create', [PersonalController::class, 'create'])->name('personal.create');
Route::get('personal/{id}', [PersonalController::class, 'show'])->name('personal.show');
Route::post('personal', [PersonalController::class,'store'])->name('personal.store');
Route::get('persoanl/{personal}/edit',[PersonalController::class,'edit'])->name('personal.edit');
Route::put('personal/{personal}',[PersonalController::class,'update'])->name('personal.update');

Route::get('cliente',[ClienteController::class,'index'])->name('cliente.index');
Route::get('cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::get('cliente/{cliente}', [ClienteController::class, 'show'])->name('cliente.show');
Route::post('cliente',[ClienteController::class,'store'])->name('cliente.store');
Route::get('cliente/{cliente}/edit',[ClienteController::class,'edit'])->name('cliente.edit');
Route::put('cliente/{cliente}',[ClienteController::class,'update'])->name('cliente.update');

Route::get('proveedor',[ProveedorController::class, 'index'])->name('proveedor.index');
Route::get('proveedor/create', [ProveedorController::class,'create'])->name('proveedor.create');
Route::get('proveedor/{id}',[ProveedorController::class,'show'])->name('proveedor.show');
Route::post('proveedor',[ProveedorController::class,'store'])->name('proveedor.store');
Route::get('proveedor/{proveedor}/edit',[ProveedorController::class,'edit'])->name('proveedor.edit');
Route::put('proveedor/{proveedor}',[ProveedorController::class,'update'])->name('proveedor.update');

//Routes Livewire
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/clientes', Clientes ::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('user', UserController::class);

