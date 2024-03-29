<?php

use Illuminate\Support\Facades\Route;
use\App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/category', [CategoriesController::class, 'index'])->name('category');
    Route::get('/addcategory', [CategoriesController::class, 'create'])->name('add-category');
    Route::post('/addcategory', [CategoriesController::class, 'store'])->name('add-category');
    Route::get('/edit/{id}', [CategoriesController::class, 'edit'])->name('edit');
    

});
