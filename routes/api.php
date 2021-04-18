<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MailsController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\ProjectController;
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
Route::get('/dashboard/members/{member}',[MemberController::class, 'showFull'])->name('dashboard.members');


/*
|--------------------------------------------------------------------------
| Members Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('projects', ProjectController::class);


/*
|--------------------------------------------------------------------------
| Jobs Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('jobs', JobController::class);
Route::get('/dashboard/jobs/{job}',[JobController::class, 'show'])->name('dashboard.jobs');


/*
|--------------------------------------------------------------------------
| Services Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('services', ServiceController::class);
Route::get('/dashboard/services/{service}',[ServiceController::class, 'showFull'])->name('dashboard.services');


/*
|--------------------------------------------------------------------------
| Articles Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('articles', ArticleController::class);
Route::get('/dashboard/articles/{article}',[ArticleController::class, 'showFull'])->name('dashboard.articles');



/*
|--------------------------------------------------------------------------
| Meta Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('meta', MetaController::class)->only(['index', 'update']);
Route::get('/dashboard/meta', [MetaController::class, 'fullIndex'])->name('dashboard.meta');




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

Route::group([
    'prefix' => 'auth'
], function () {

    Route::post('login', [AuthController::class, 'login'])
        ->name('auth.login');

    Route::post('logout', [AuthController::class, 'logout'])
        ->name('auth.logout');

    Route::post('refresh', [AuthController::class, 'refresh'])
        ->name('auth.refresh');

    Route::post('me', [AuthController::class, 'me'])
        ->name('auth.name');

    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');
});

Route::fallback(function () {
    return response()->json([
        'success' => false,
        'message' => 'Not Found'
    ], 404);
});
