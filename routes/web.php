<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

route::prefix('admin')->name('admin.')->group(function (){

    route::get('home',[HomeController::class , 'home'])->name('home');
    route::get('registerView' , [RegisterController::class, 'RegisterView'])->name('registerView');
    route::post('registerView' , [RegisterController::class , 'register'])->name('register');
    route::get('loginView',[LoginController::class , 'loginView'])->name('loginView');
});