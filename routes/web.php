<?php
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

Route::get('/', function () {return view('welcome');});
Route::get('/mascotas', [PetController::class, 'index'])->name('pets.index');
Route::get('/mascotas/crear', [PetController::class, 'create'])->name('pets.create');
Route::post('/mascotas', [PetController::class, 'store'])->name('pets.store');
