<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserRecipesController;
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

Route::get('/register',[RegistrationController::class,'registration']);

Route::get('/login',[AuthenticationController::class,'login'])->name('login');
Route::get('/logout',[AuthenticationController::class,'logout']);
Route::post('/authenticate',[AuthenticationController::class,'authenticate']);
Route::post('/saveuser',[RegistrationController::class,'saveuser']);

Route::middleware(['auth'])->group(function(){
	Route::resource('user-recipes',UserRecipesController::class);
});