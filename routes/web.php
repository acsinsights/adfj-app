<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\AdminFeaturedPostController;

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\ForgotPasswordController;
use App\Http\Controllers\admin\AllPosts;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CreateController;
use App\Http\Controllers\admin\CreateCategoryController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\ClientleleController;
use App\Http\Controllers\admin\ContactFormController;
use App\Http\Controllers\admin\OfferController;




/*
|------------------------------------------------------------
--------------
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
Route::post('/contact/store', [HomeController::class, 'form_submit'])->name('contact.store');
Route::post('/consultation/store', [HomeController::class, 'consultation'])->name('consultation.store');


// image  module


// Route::get('/create' , function(){
//     return view( 'admin.create' ) ;
//     });

// Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');

Route::get('/forgetpassword', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forgetpassword');
Route::get('/forgetPasswordLink', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('forgetPasswordLink');


Route::get('forgetpassword', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forgetpassword', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('resetpassword/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('resetpassword', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::get('/login', [AdminLoginController::class, 'index']);
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        // Route::get('/dashboard-layout', [DashboardController::class, 'index']);
        Route::any('/allposts', [AllPosts::class, 'index'])->name('admin.allposts');
        Route::get('/music', [AllPosts::class, 'music'])->name('admin.music');
        Route::get('/video', [AllPosts::class, 'video'])->name('admin.video');
        Route::get('/graphics', [AllPosts::class, 'graphics'])->name('admin.graphics');


        Route::get('/our-clientlele', [ClientleleController::class, 'index'])->name('admin.our-clientlele');
        // Route::post('/add-clientlele', [ClientleleController::class, 'addclientele'])->name('admin.add-clientlele');
        // Route::get('/edit-ourclientlele', [ClientleleController::class, 'editclientele'])->name('admin.edit-ourclientlele');
        Route::get('/add-clientlele', [ClientleleController::class, 'create'])->name('admin.add-clientlele');
        Route::post('/addclientlele', [ClientleleController::class, 'store'])->name('admin.addclientlele');

        Route::delete('/deleteclientlele/{id}', [ClientleleController::class, 'destroy']);
        Route::get('/editclientlele/{id}', [ClientleleController::class, 'edit']);
        Route::delete('/delete-clientlele-image/{id}', [ClientleleController::class, 'deletecover']);
        Route::any('/updateclientlele/{id}', [ClientleleController::class, 'update']);

        Route::get('/alloffer', [OfferController::class, 'index'])->name('admin.alloffer');
        Route::post('/add-offer', [OfferController::class, 'addoffer']);
        Route::get('/editoffer', [OfferController::class, 'editoffer'])->name('admin.editooffer');
        Route::get('/add-offer', [OfferController::class, 'create'])->name('admin.add-offer');
        Route::post('/addoffer', [OfferController::class, 'store'])->name('admin.addoffer');

        Route::delete('/deleteoffer/{id}', [OfferController::class, 'destroy']);
        Route::get('/editoffer/{id}', [OfferController::class, 'edit']);
        Route::delete('/delete-offer-image/{id}', [OfferController::class, 'deletecover']);
        Route::any('/updateoffer/{id}', [OfferController::class, 'update']);

        Route::get('/testimonial', [TestimonialController::class, 'index'])->name('admin.testimonial');
        Route::get('/addtestimonial', [TestimonialController::class, 'create'])->name('admin.addtestimonial');
        Route::post('/add-testimonial', [TestimonialController::class, 'store'])->name('admin.add-testimonial');

        Route::delete('/deletetestimonial/{id}', [TestimonialController::class, 'destroy']);
        Route::get('/edittestimonial/{id}', [TestimonialController::class, 'edit']);
        Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
        Route::put('/update-profile/{id}', [DashboardController::class, 'update']);
        Route::delete('/delete-testimonial-image/{id}', [TestimonialController::class, 'deletecover']);
        Route::any('/updatetestimonial/{id}', [TestimonialController::class, 'update']);

        //* categories
        // Route::get('/create', [CreateController::class, 'create'])->name('admin.create');
        // Route::get('/create-category', [CreateCategoryController::class, 'index'])->name('admin.createcategory');
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
        Route::post('/add-post', [AllPosts::class, 'store'])->name('addPost');
        Route::get('/delete/{id}', [AllPosts::class, 'destroy']);
        Route::get('/edit/{id}', [AllPosts::class, 'edit']);
        Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
        Route::put('/update-profile/{id}', [DashboardController::class, 'update']);
        Route::put('/update-pass/{id}', [DashboardController::class, 'updatepass']);
        Route::delete('/deleteimage/{id}', [AllPosts::class, 'deleteimage']);
        Route::delete('/deletecover/{id}', [AllPosts::class, 'deletecover']);
        Route::put('/update/{id}', [AllPosts::class, 'update']);
        Route::post('/status/{id}', [AdminFeaturedPostController::class, 'update'])->name('status');

        //? Routes for service types
        Route::get('/typeedit/{id}', [AllPosts::class, 'stypeedit']);
        Route::get('/update/{id}', [CreateController::class, 'update']);
        Route::get('/delete-service/{id}', [CreateController::class, 'destroy']);

        Route::put('/fstatus/{id}', [AdminFeaturedPostController::class, 'update']);
        Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');

        Route::put('/featured/{id}', [AdminFeaturedPostController::class, 'featured']);

        // ? Contact Form Entries
        Route::get('/form-entries', [ContactFormController::class, 'index'])->name('contact.entries');
        Route::get('/form/{id}', [ContactFormController::class, 'show'])->name('contact.show');
        Route::get('/consultations', [ContactFormController::class, 'consultation'])->name('consultation.entries');
    });
});
