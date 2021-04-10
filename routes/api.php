<?php

use App\Http\Controllers\ImagesController;
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
| Articles Routes
|--------------------------------------------------------------------------
*/




/*
|--------------------------------------------------------------------------
| Images Routes
|--------------------------------------------------------------------------
*/
Route::post('/images', [ImagesController::class, 'store']);

require __DIR__ . '/auth.php';


Route::fallback(function () {
    return response()->json([
        'success' => false,
        'message' => 'Not Found'
    ], 404);
});
