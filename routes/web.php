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
use App\Http\Controllers\frontend\PrivacyController;
use App\Http\Controllers\frontend\PricingController;
use App\Http\Controllers\frontend\SubscriptionController;
use App\Http\Controllers\frontend\TermsController;
use App\Http\Controllers\frontend\NewsletterController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CreateController;
use App\Http\Controllers\admin\CreateCategoryController;



use App\Http\Controllers\frontend\PostController;


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
Route::get('/privacy', [PrivacyController::class, 'index']);
Route::get('/pricing-plan', [PricingController::class, 'index']);
Route::get('/subscription', [SubscriptionController::class, 'index']);
Route::get('/terms', [TermsController::class, 'index']);
Route::get('/newsletter', [NewsletterController::class, 'index']);











// image  module

Route::get('/dashboard-layout', [DashboardController::class, 'index']);
// Route::get('/create' , function(){
//     return view( 'admin.create' ) ;
//     });


     Route::post('/post', [CreateController::class, 'store']);
     Route::delete('/delete/{id}',[CreateController::class,'destroy']);
     Route::get('/edit/{id}', [CreateController::class,'edit']);
     Route::delete('/deleteimage/{id}',[CreateController::class,'deleteimage']);
     Route::delete('/deletecover/{id}',[CreateController::class,'deletecover']);
     Route::put('/update/{id}', [CreateController::class,'update']);















Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {

        Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');

    });

    Route::group(['middleware' => 'admin.auth'], function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/create', [CreateController::class, 'create'])->name('admin.create');
        Route::get('/create-category', [CreateCategoryController::class, 'index'])->name('admin.createcategory');
        Route::get('/add-music-cat', [AddMusicCatController::class, 'index'])->name('admin.createcategory');

        Route::get('/music-cat', [CreateCategoryController::class,'music_cat'])->name('admin.music-cat');
        Route::get('/video-cat', [CreateCategoryController::class,'video_cat'])->name('admin.video-cat');
        Route::get('/graphics-cat', [CreateCategoryController::class,'graphics_cat'])->name('admin.graphics-cat');


        // Route::delete('/delete/{id}',[PostController::class,'destroy']);
        Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');

    });

});
