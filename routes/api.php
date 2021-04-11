<?php

use App\Http\Controllers\ImagesController;
use App\Http\Controllers\MetaController;
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

/*
|--------------------------------------------------------------------------
| Meta Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('meta', MetaController::class)->only(['index', 'update']);




/*
|--------------------------------------------------------------------------
| Images Routes
|--------------------------------------------------------------------------
*/
Route::post('/images', [ImagesController::class, 'store'])->name('images.store');

require __DIR__ . '/auth.php';


Route::fallback(function () {
    return response()->json([
        'success' => false,
        'message' => 'Not Found'
    ], 404);
});
