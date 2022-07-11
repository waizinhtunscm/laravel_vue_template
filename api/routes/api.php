<?php

use Illuminate\Http\Request;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/home', function () {
    return response('Hello World!', 200)
    ->header('Content-Type', 'text/plain');
});
    // Route::get('blogs', [BlogController::class, 'index']);
    Route::get('blogs/{id}', [BlogController::class, 'edit']);
    // Route::post('blogs', [BlogController::class, 'create']);
    // Route::put('blogs/{id}', [BlogController::class, 'update']);
    // Route::delete('blogs/{id}', [BlogController::class, 'delete']);
    
// Route::apiResource('blogs','BlogController');

