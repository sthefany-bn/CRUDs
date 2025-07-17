<?php

use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PetController::class, 'index'])->name('indexPet');
Route::get('/cadastro', [PetController::class, 'create'])->name('createPet');
Route::post('/', [PetController::class, 'store'])->name('storePet');
Route::get('/editar/{id}', [PetController::class, 'edit'])->name('editPet');
Route::get('/deletar/{id}', [PetController::class, 'destroy'])->name('destroyPet');
Route::post('/atualizar/{id}', [PetController::class, 'update'])->name('updatePet');
