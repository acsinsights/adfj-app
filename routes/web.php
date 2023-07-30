<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\GraphicController;
use App\Http\Controllers\frontend\MusicController;
use App\Http\Controllers\frontend\AudioController;
use App\Http\Controllers\frontend\VideoController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\GetstartedController;
use App\Http\Controllers\frontend\PolicyController;
use App\Http\Controllers\frontend\PricingController;
use App\Http\Controllers\frontend\SubscriptionController;
use App\Http\Controllers\frontend\TermsController;
use App\Http\Controllers\frontend\NewsletterController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/service', [ServicesController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/graphic', [GraphicController::class, 'index']);
Route::get('/video', [VideoController::class, 'index']);
Route::get('/audio', [AudioController::class, 'index']);
Route::get('/music', [MusicController::class, 'index']);
Route::get('/get-started', [GetstartedController::class, 'index']);
Route::get('/policy', [PolicyController::class, 'index']);
Route::get('/pricing-plan', [PricingController::class, 'index']);
Route::get('/subscription', [SubscriptionController::class, 'index']);
Route::get('/terms', [TermsController::class, 'index']);
Route::get('/newsletter', [NewsletterController::class, 'index']);







Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {

        Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');

    });

    Route::group(['middleware' => 'admin.auth'], function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');

    });

});
