<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('user/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified','authadmin'])->get('/admin/dashboard', function () {
//     return view('admin.RestaurantForAdmin');
// })->name('admin.dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified', 'authadmin']], function () {

    Route::redirect('/', 'admin/restaurantForAdmin');
    
    //  Restaurant List

    // Dashboard.
    Route::get('admin/restaurantForAdmin', [RestaurantController::class,'index'])->name('admin.dashboard');

    // Create 
    Route::get('admin/create', [RestaurantController::class,'create'])->name('admin.Create');

    // Update
    Route::get('admin/edit', [RestaurantController::class, 'edit'])->name('admin.edit');

    //Delete
    Route::get('delete/{id}',[RestaurantController::class, 'destroy'])->name('admin.destroy');

    //Show
    Route::get('admin/show',[RestaurantController::class, 'show'])->name('admin.show');

    //Route::resource('/userForAdmin', UserController::class);
    Route::resource('/restaurants', RestaurantController::class);
    Route::resource('/restaurantForAdmin', RestaurantController::class);
    
    // Review List
    Route::get('admin/reviewForAdmin',[ReviewController::class,'index'])->name('admin.reviewForAdmin');
    Route::get('DeleteReview/{id}',[ReviewController::class, 'destroy'])->name('reviews.destroy');
    Route::resource('/reviewForAdmin', ReviewController::class);
    Route::resource('/review', ReviewController::class);
    
    // User List
    Route::get('admin/userForAdmin',[UserController::class,'index'])->name('admin.userForAdmin');
    

});


Route::group(['middleware' => ['auth:sanctum', 'verified', 'authadmin']], function () {

    Route::redirect('/', 'admin/restaurantForAdmin');
    
    //  Restaurant List

    // Dashboard.
    Route::get('admin/restaurantForAdmin', [RestaurantController::class,'index'])->name('admin.dashboard');
});