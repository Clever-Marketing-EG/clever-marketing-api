<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MailsController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberProjectsController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SearchController;
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
Route::get('/dashboard/members/{member}',[MemberController::class, 'showFull'])->name('dashboard.members.show');
Route::post('/members/{member}/projects', [MemberProjectsController::class, 'store'])->name('members.projects.store');
Route::delete('/members/{member}/projects', [MemberProjectsController::class, 'destroy'])->name('members.projects.destroy');


/*
|--------------------------------------------------------------------------
| Projects Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('projects', ProjectController::class);
Route::get('/projects/filter/{type}', [ProjectController::class, 'filter']);
Route::get('/dashboard/projects', [ProjectController::class, 'fullIndex'])->name('dashboard.projects.index');
Route::get('/dashboard/projects/{project}', [ProjectController::class, 'showFull'])->name('dashboard.projects.show');


/*
|--------------------------------------------------------------------------
| Processes Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('processes', ProcessController::class)->except('index');
Route::get('/dashboard/processes/{process}', [ProcessController::class, 'show'])->name('dashboard.processes.show');


/*
|--------------------------------------------------------------------------
| Fields Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('fields', FieldController::class);
Route::get('/dashboard/fields/{field}',[FieldController::class, 'showFull'])->name('dashboard.fields.show');


/*
|--------------------------------------------------------------------------
| Clients Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('clients', ClientController::class);
Route::get('/dashboard/clients/{client}',[ClientController::class, 'showFull'])->name('dashboard.clients.show');



/*
|--------------------------------------------------------------------------
| Jobs Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('jobs', JobController::class);
Route::get('/dashboard/jobs/{job}',[JobController::class, 'show'])->name('dashboard.jobs.show');


/*
|--------------------------------------------------------------------------
| Services Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('services', ServiceController::class);
Route::get('/dashboard/services/{service}',[ServiceController::class, 'showFull'])->name('dashboard.services.show');


/*
|--------------------------------------------------------------------------
| Articles Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('articles', ArticleController::class);
Route::get('/dashboard/articles/{article}',[ArticleController::class, 'showFull'])->name('dashboard.articles.show');
Route::get('articles/search/{searchTerm}', [SearchController::class, 'articles'])->name('search.articles');



/*
|--------------------------------------------------------------------------
| Meta Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('meta', MetaController::class)->only(['index', 'update']);
Route::get('/dashboard/meta', [MetaController::class, 'fullIndex'])->name('dashboard.meta.index');
Route::get('/dashboard/meta/{metum}', [MetaController::class, 'show'])->name('dashboard.meta.show');



/*
|--------------------------------------------------------------------------
| Files Routes
|--------------------------------------------------------------------------
*/
Route::post('/images', [FilesController::class, 'images'])->name('images.store');


/*
|--------------------------------------------------------------------------
| Mail Routes
|--------------------------------------------------------------------------
*/
Route::post('/mails/contact-us', [MailsController::class, 'contactUs'])->name('mails.contact');
Route::post('/mails/job-application', [MailsController::class, 'jobApplication'])->name('mails.application');



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
