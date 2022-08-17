<?php

use App\Http\Controllers\PalestraController;
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

Route::get('/palestra', [PalestraController::class, 'getList']);
Route::get('/palestra/{id}', [PalestraController::class, 'getOne']);
Route::post('/palestra', [PalestraController::class, 'post']);
Route::patch('/palestra/{id}', [PalestraController::class, 'patch']);
Route::delete('/palestra/{id}', [PalestraController::class, 'delete']);

