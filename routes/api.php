<?php

use App\Http\Controllers\UserAuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/user', function (Request $request) {

    $users = User::all();
    return response()->json($users);

})->middleware('auth:sanctum');

Route::post('/login',[UserAuthController::class,'login']);

Route::post('/register',[UserAuthController::class,'register']);

Route::post('/logout',[UserAuthController::class,'logout'])->middleware('auth:sanctum');


Route::put('/user/{id}',[UserAuthController::class,'update'])->middleware('auth:sanctum');
