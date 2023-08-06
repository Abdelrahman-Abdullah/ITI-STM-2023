<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user/create', [RegisterController::class , 'create']);
Route::post('/user/login',  [LoginController::class , 'check']);

Route::middleware('auth:sanctum')->group(function(){

    Route::get('/posts' , [PostController::class , 'index']);
    Route::post('/posts' , [PostController::class , 'store']);
    Route::get('/posts/{id}' , [PostController::class , 'show']);
    Route::delete('/posts/{id}' , [PostController::class , 'delete']);
    Route::put('/posts/{id}' , [PostController::class , 'update']);
});
