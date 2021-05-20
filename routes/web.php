<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RestaurantControllerForUser;
use App\Http\Controllers\ReviewControllerForUser;



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

// // User
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::redirect('/', 'user/showRestaurantForUser');
    
    Route::get('user/showRestaurantForUser',[RestaurantControllerForUser::class,'index'])->name('showRestaurantForUser');
    // Route::get('user/RestaurantForUser/{id}',[RestaurantControllerForUser::class,'show'])->name('ReviewForUser');   
    Route::resource('user/ReviewForUser',RestaurantControllerForUser::class);

});

// // Admin
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

  
    Route::resource('/restaurants', RestaurantController::class);
    Route::resource('/restaurantForAdmin', RestaurantController::class);
    
    // Review List
    Route::resource('reviewForAdmin', ReviewController::class);
    
    // User List
    Route::get('admin/userForAdmin',[UserController::class,'index'])->name('admin.userForAdmin');
    
    // search
    Route::get('admin/search','RestaurantController@search');
    

});
        

// });

// Route::middleware(['auth:sanctum', 'verified'])->get('user/showRestaurantForUser', function () {
//     return view('showRestaurantForUser');
// })->name('showRestaurantForUser');


// Route::resource('user',[RestaurantControllerForUser::class]);

// Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('admin/dashboard', function () {
//     return view('admin.restaurantForAdmin');
// })->name('admin.restaurantForAdmin');
