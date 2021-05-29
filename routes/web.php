<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;


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
    return view('admin.validation.login');
});

Route::get('home', function () {
    return view('client.home');
});

Route::group(
    ['namespace'=>'Admin', 'prefix' => 'admin'],
    function (){
        Route::get('dashboard',[DashboardController::class,'index']);
        Route::get('categories',[CategoryController::class,'index']);
        Route::get('categories/create',[CategoryController::class,'create']);
        Route::post('categories',[CategoryController::class,'store']);
        Route::get('/categories/{id}/edit',[CategoryController::class,'edit']);
        Route::put('/categories/{id}',[CategoryController::class,'update']);
        Route::delete('/categories/{id}',[CategoryController::class,'destroy']);
        
    }
);