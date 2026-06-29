<?php
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/mascotas', function () {
    return response()->json(Pet::latest()->get());
});