<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminCategoryController;



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

Route::get('/',[PostController::class, 'home'] );
Route::get('/about', [PostController::class, 'about'] );
Route::get('/blog',[PostController::class, 'index'] );
Route::get('posts/{post:slug}',[PostController::class, 'show'] );
Route::get('/categories', [PostController::class, 'categories'] );


Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('dashboard/posts/checkSlug', [DashboardController::class, 'checkSlug'])
->middleware('auth');
Route::resource('/dashboard/posts', DashboardController::class)->middleware('auth');

//postcategories
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')
->middleware('admin');   
                
