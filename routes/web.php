<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\GuestController;


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


Route::get('log', function () {
    return view('welcome');
});

Route::get('article', function () {
    return view('client.article');
});

Route::get('article/form', function () {
    return view('admin.article.form');
});

Route::group(
    ['namespace'=>'Admin', 'prefix' => 'admin', 'middleware' => 'auth'],
    function (){
        Route::get('dashboard',[DashboardController::class,'index']);
        //categories
        Route::get('categories',[CategoryController::class,'index']);
        Route::get('categories/create',[CategoryController::class,'create']);
        Route::post('categories',[CategoryController::class,'store']);
        Route::get('/categories/{id}/edit',[CategoryController::class,'edit']);
        Route::put('/categories/{id}',[CategoryController::class,'update']);
        Route::delete('/categories/{id}',[CategoryController::class,'destroy']);
        
        //user
        Route::get('user',[UserController::class,'index']);
        Route::get('user/create',[UserController::class,'create']);
        Route::post('user',[UserController::class,'store']);
        Route::get('user/{id}/edit',[UserController::class,'edit']);
        Route::put('user/{id}',[UserController::class,'update']);
        Route::delete('user/{id}',[UserController::class,'destroy']);
        
        //article
        Route::get('article',[ArticleController::class,'index']);
        Route::get('article/create',[ArticleController::class,'create']);
        Route::post('article',[ArticleController::class,'store']);
        Route::get('article/{id}/edit',[ArticleController::class,'edit']);
        Route::put('article/{id}',[ArticleController::class,'update']);
        Route::delete('article/{id}',[ArticleController::class,'destroy']);
        
        
    }
);

        //guest
        Route::get('',[GuestController::class,'index']);
        Route::get('article/{id}',[GuestController::class,'show']);


Route::group(
    ['namespace'=>'', 'prefix' => ''],
    function (){
        
    });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
