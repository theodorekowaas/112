<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;




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

Route::get('/oneonetwo', function () { 
    return view ('112');
});

route::get('/hola', [AboutController::class,'show']);

route::get('/Project', [AboutController::class,'project']);
route::get('/input', [AboutController::class,'input']);
route::get('/input/store', [AboutController::class,'store']);
route::post('/input/store', [AboutController::class,'store']);

route::get('/signup', [FormController::class,'signup']);
route::get('/signup/oneonetwo', [FormController::class,'oneonetwo']);
route::post('/signup/oneonetwo', [FormController::class,'oneonetwo']);

//route::get('/formlogin', [AboutController::class,'login']);
//route::post('/formlogin', [AboutController::class,'login']);

Route::get('/report', [FormController::class,'report']);
Route::get('/report/oneonetwo', [FormController::class,'sent']);
Route::post('/report/oneonetwo', [FormController::class,'sent']);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);


Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard',[DashboardPostController::class, 'postIndex'], function () { 
    return view ('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/post/checkSlug',[DashboardPostController::class,'checkSlug']);
Route::resource('/dashboard/post', DashboardPostController::class)->middleware('auth');
Route::get('/dashboard/post/{id}/delete','FormController@delete');
//Route::get('/dashboard/post/edit/{id}','FormController@edit');




//route::post('/dashboard/post', [AboutController::class,'delete']);



/*Route::get('/login', [FormController::class,'login']);
Route::get('/login/oneonetwo', [FormController::class,'postlogin']);
Route::post('/login/oneonetwo', [FormController::class,'postlogin']);*/


