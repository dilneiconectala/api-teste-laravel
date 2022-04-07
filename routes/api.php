<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ping', [\App\Http\Controllers\TesteApiController::class, 'ping']);
Route::get('teste', [\App\Http\Controllers\TesteApiController::class, 'getAll']);
Route::post('teste', [\App\Http\Controllers\TesteApiController::class, 'insert']);
Route::get('teste-saving', [\App\Http\Controllers\TesteApiController::class, 'getAllSaving']);
