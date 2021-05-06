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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/userForAdmin', UserController::class);

Route::resource('/restaurants', RestaurantController::class);
Route::resource('/restaurantForAdmin', RestaurantController::class);

Route::resource('/reviews', ReviewController::class);
Route::resource('/reviewForAdmin', ReviewController::class);



Route::middleware(['auth:sanctum', 'verified'])->get('user/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified','authadmin'])->get('/admin/dashboard', function () {
//     return view('admin.RestaurantForAdmin');
// })->name('admin.dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified', 'authadmin']], function () {
    Route::get('admin/dashboard', [RestaurantController::class,'index'])->name('admin.dashboard');
});
