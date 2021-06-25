<?php

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

/*Route::get('/contact', function () {
    return view('contact');
});*/
Route::resource('/contact','\App\Http\Controllers\ContactController')->except('show');
Route::resource('/','\App\Http\Controllers\MainController')->except('show');
Route::resource('/admin','\App\Http\Controllers\AdminController')->except('show');
Route::resource('/user','\App\Http\Controllers\UserController')->except('show');
Route::resource('/ads','\App\Http\Controllers\AdsController')->except('show');
Route::resource('/myads','\App\Http\Controllers\MyadsController')->except('show');
Route::resource('admin/adses','\App\Http\Controllers\Admin\AdsController')->except('show');
Route::resource('admin/useres','\App\Http\Controllers\Admin\UserController')->except('show');



/*Route::get('/Admin',function (){
    return view('Admin');
});

/*Route::get('/about',function (){
    return view('./resources/views/about');
});*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
