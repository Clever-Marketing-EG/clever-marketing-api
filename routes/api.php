<?php

use App\Http\Controllers\ImagesController;
use App\Http\Controllers\MailsController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\ServiceController;
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
| Members Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('members', MemberController::class);



/*
|--------------------------------------------------------------------------
| Services Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('services', ServiceController::class);



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


/*
|--------------------------------------------------------------------------
| Mail Routes
|--------------------------------------------------------------------------
*/
Route::post('/mails/contact-us', [MailsController::class, 'contactUs'])->name('mails.contact');



/*--------------------------------------------------------------------------*/
require __DIR__ . '/auth.php';
Route::fallback(function () {
    return response()->json([
        'success' => false,
        'message' => 'Not Found'
    ], 404);
});
