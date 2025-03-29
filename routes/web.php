<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});




// ======================================================
// ============Backend Routes============================
// ======================================================
Route::get('admin/dashboard' , [DashboardController::class , 'index'])->name('admin.dashboard');

// categories
Route::resource('admin/categories' , CategoryController::class);






// ======================================================
// ============Fronted Routes============================
// ======================================================
Route::get('home' , [HomeController::class , 'index'])->name('frontend.home.index');
Route::get('/home2' ,[HomeController::class , 'index'])->name('frontend.home.index');
