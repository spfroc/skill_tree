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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::middleware(['auth:api'])->group(function () {
Route::middleware(['api'])->group(function () {
    Route::get('', [\App\Api\Controllers\IndexController::class, 'index']);
//    Route::get('/', [\App\Api\Controllers\IndexController::class, 'index']);
    Route::get('tree', [\App\Api\Controllers\IndexController::class, 'tree']);
    Route::get('nodes', [\App\Api\Controllers\IndexController::class, 'nodes']);
    Route::get('edges', [\App\Api\Controllers\IndexController::class, 'edges']);
    Route::get('skills', [\App\Api\Controllers\IndexController::class, 'skills']);
    Route::post('node/add', [\App\Api\Controllers\NodeController::class, 'add']);
});