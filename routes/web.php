<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PersonalController;


Route::get('/', HomeController::class);
Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/create', [CursoController::class, 'create']);
Route::get('cursos/{curso}', [CursoController::class, 'show']);

Route::get('personal', [PersonalController::class, 'index'])->name('personal.index');
Route::get('personal/create', [PersonalController::class, 'create'])->name('personal.create');
Route::get('personal/{personal}', [PersonalController::class, 'show'])->name('personal.show');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
