<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/home',function (){
    return view('home');
})->name('home');

Route::get('about',function (){
   return view('about') ;

})->name('about');

Route::get('contact',function (){
    return view('contact') ;

})->name('contact');

Route::get('service',function (){
    return view('service') ;

})->name('service');


Route::get('/signin',function (){
    return   view('authentications/signin');
})->name('signIn');



Route::get('/signup',function (){
    return   view('authentications/signUp');
})->name('signUp');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('Home');
