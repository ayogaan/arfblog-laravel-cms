<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;


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
    return view('client.home');
});

Route::get('log', function () {
    return view('welcome');
});

Route::get('article', function () {
    return view('client.article');
});


Route::group(
    ['namespace'=>'Admin', 'prefix' => 'admin'],
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

    }
);

Route::group(
    ['namespace'=>'', 'prefix' => ''],
    function (){
        
    });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
