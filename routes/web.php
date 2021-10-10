<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserCategoryController;
use App\Http\Controllers\DashboardUserController;

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

Route::get('/admin', function () {
    return view('pages.admin.dashboard');
}
);
Route::prefix('admin')
    //->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard_admin');
        Route::resource('/product', ProductController::class);
        Route::resource('/category', CategoryController::class);
});


Route::get('/', [DashboardUserController::class, 'index'])->name('dashboard');
Route::get('/detail_product/{id}', [DashboardUserController::class, 'detail'])->name('detail_product');
Route::get('/usercategory', [UserCategoryController::class, 'index'])->name('user_category');
        
Auth::routes();


