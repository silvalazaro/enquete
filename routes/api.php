<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnqueteController;
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

// lista
Route::get('enquetes', [EnqueteController::class, 'index']);

// salva
Route::post('enquete', [EnqueteController::class, 'store']);

// atualiza
Route::put('enquete', [EnqueteController::class, 'store']);

// remove
Route::delete('enquete/{id}', [EnqueteController::class, 'destroy']);

// obter
Route::get('enquete/{id}', [EnqueteController::class, 'show']);