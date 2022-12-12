<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BookController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/books', [BookController::class, 'books']);
    Route::post('/book/create', [BookController::class, 'create']);
    Route::post('/book/update/{id}', [BookController::class, 'update']);
    Route::post('/book/delete/{id}', [BookController::class, 'delete']);
});

Route::post('/login', [AuthController::class, 'login']);
