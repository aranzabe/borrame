<?php

use App\Http\Controllers\MiControlador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/user/{dni?}',[MiControlador::class,'getUser'])->where('dni','[0-9]{8}[A-Z]');
Route::post('/user',[MiControlador::class,'addUser']);
