<?php

use App\Http\Controllers\admin\AdminFeaturedPostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AllPosts;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CreateController;
use App\Http\Controllers\admin\CreateCategoryController;
use App\Http\Controllers\admin\TestimonialController;


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
Route::get('/about', [HomeController::class, 'about']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/graphic', [HomeController::class, 'graphics']);
Route::get('/video', [HomeController::class, 'video']);
Route::get('/audio', [HomeController::class, 'audio']);
Route::get('/music', [HomeController::class, 'music']);
Route::get('/get-started', [HomeController::class, 'getstarted']);
Route::get('/privacy', [HomeController::class, 'privacy']);
Route::get('/pricing-plan', [HomeController::class, 'pricing']);
Route::get('/subscription', [HomeController::class, 'subscription']);
Route::get('/terms', [HomeController::class, 'terms']);
Route::get('/newsletter', [HomeController::class, 'newsletter']);


// image  module


// Route::get('/create' , function(){
//     return view( 'admin.create' ) ;
//     });

Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'], function () {


        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        // Route::get('/dashboard-layout', [DashboardController::class, 'index']);
        Route::get('/allposts', [AllPosts::class, 'index'])->name('admin.allposts');
        Route::get('/music', [AllPosts::class, 'music'])->name('admin.music');
        Route::get('/video', [AllPosts::class, 'video'])->name('admin.video');
        Route::get('/graphics', [AllPosts::class, 'graphics'])->name('admin.graphics');

        Route::get('/testimonial', [TestimonialController::class, 'index'])->name('admin.testimonial');
        Route::get('/addtestimonial', [TestimonialController::class, 'create'])->name('admin.addtestimonial');
        Route::get('/add-testimonial', [TestimonialController::class, 'store'])->name('admin.add-testimonial');

        //* categories
        Route::get('/create', [CreateController::class, 'create'])->name('admin.create');
        Route::get('/create-category', [CreateCategoryController::class, 'index'])->name('admin.createcategory');
        Route::get('/add-posts', [AllPosts::class, 'create'])->name('admin.addposts');
        Route::get('/add-type', [AllPosts::class, 'type'])->name('admin.type');
        Route::post('/add-service-type', [AllPosts::class, 'addtype']);
        Route::get('/featured-posts', [AllPosts::class, 'featured'])->name('admin.featuredposts');

        //? slug route for service type table
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
        Route::delete('/delete/{id}', [AllPosts::class, 'destroy']);
        Route::get('/edit/{id}', [AllPosts::class, 'edit']);
        Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
        Route::put('/update-profile/{id}', [DashboardController::class, 'update']);
        Route::delete('/deleteimage/{id}', [AllPosts::class, 'deleteimage']);
        Route::delete('/deletecover/{id}', [AllPosts::class, 'deletecover']);
        Route::put('/update/{id}', [AllPosts::class, 'update']);

        //? Routes for service types
        Route::get('/typeedit/{id}', [AllPosts::class, 'stypeedit']);
        Route::get('/update/{id}', [CreateController::class, 'update']);
        Route::delete('/delete-service/{id}', [CreateController::class, 'destroy']);

        Route::put('/fstatus/{id}', [AdminFeaturedPostController::class, 'update']);
        Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');
    });
});
