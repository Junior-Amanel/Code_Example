<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\FurnitureController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::view('/contacts', 'contacts');

Route::get('/products/{id}', [ProductsController::class, 'index']);
Route::get('/Cat/products/{id}', [ProductsController::class, 'index']);

Route::get('/Cat', [CatController::class, 'index']);
Route::get('/Cat/ldsp', [CatController::class, 'ldsp']);
Route::get('/Cat/mdf', [CatController::class, 'mdf']);
Route::get('/Cat/pvh', [CatController::class, 'pvh']);
Route::get('/Cat/stol', [CatController::class, 'stol']);
Route::get('/Cat/fartuc', [CatController::class, 'fartuc']);
Route::get('/Cat/furniture', [CatController::class, 'furniture']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('admin_panel')->group (function () {
    Route::get('/',[App\Http\Controllers\Admin\homeController::class, 'index'])->name('homeAdmin');
    
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('furniture', FurnitureController::class);
    Route::resource('news', NewsController::class);

});