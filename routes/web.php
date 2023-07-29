<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\GraphicController;
use App\Http\Controllers\Frontend\MusicController;
use App\Http\Controllers\Frontend\AudioController;
use App\Http\Controllers\Frontend\VideoController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GetstartedController;
use App\Http\Controllers\Frontend\PolicyController;


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







Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => 'admin.guest'], function(){

        Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');

    });

    Route::group(['middleware' => 'admin.auth'], function(){

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');

    });

});
