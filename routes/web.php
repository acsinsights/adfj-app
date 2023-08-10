<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\admin\EditcatController;
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
use App\Http\Controllers\admin\AdminMusicController;
use App\Http\Controllers\admin\AdminVideoController;
use App\Http\Controllers\admin\AdminGraphicsController;
use App\Http\Controllers\admin\AllPosts;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CreateController;
use App\Http\Controllers\admin\CreateCategoryController;




use App\Http\Controllers\frontend\PostController;
use Illuminate\Http\Request;

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





Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {

        Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'], function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/allposts', [AllPosts::class, 'index'])->name('admin.allposts');
        Route::get('/music', [AllPosts::class, 'music'])->name('admin.music');
        Route::get('/video', [AllPosts::class, 'video'])->name('admin.video');
        Route::get('/graphics', [AllPosts::class, 'graphics'])->name('admin.graphics');

        //* categories
        Route::get('/create', [CreateController::class, 'create'])->name('admin.create');
        Route::get('/create-category', [CreateCategoryController::class, 'index'])->name('admin.createcategory');
        Route::get('/add-posts', [AllPosts::class, 'create'])->name('admin.addposts');
        Route::get('/add-type', [AllPosts::class, 'type'])->name('admin.type');
        Route::post('/add-service-type', [AllPosts::class, 'addtype']);
        Route::get('/featured-posts', [AllPosts::class, 'featured'])->name('admin.featuredposts');
        Route::get('/getSlug', function (Request $request) {

            $slug = '';
            if (!empty($request->title)) {
                $slug = Str::slug($request->title);
            }

            return response()->json([
                'status' => true,
                'slug' => $slug,
            ]);
        })->name('getSlug');

        //* Add data/update/delete in categories
        Route::post('/add-post', [AllPosts::class, 'store']);
        Route::delete('/delete/{id}', [CreateController::class, 'destroy']);
        Route::get('/edit/{id}', [CreateController::class, 'edit']);
        Route::delete('/deleteimage/{id}', [CreateController::class, 'deleteimage']);
        Route::delete('/deletecover/{id}', [CreateController::class, 'deletecover']);
        Route::put('/update/{id}', [CreateController::class, 'update']);


        Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');
    });
});
