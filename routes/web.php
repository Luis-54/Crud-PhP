<?php

use App\Http\Controllers\auth\authController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//auth
Route::prefix('auth')->group(function(){
    Route::get('login', [authController::class, 'login'])->name('login');
    Route::post('login', [authController::class,'loginVerify'])->name('loginVerify');
    Route::get('register', [authController::class, 'register'])->name('register');
    Route::post('register', [authController::class,'registerVerify']);
    Route::post('signOut', [authController::class,'signOut'])->name('signOut');
});

// protected routes
Route::middleware('auth')->group(function() {
    Route::get('dashboard', function() {
        return view('auth.index');
    })->name('dashboard');

});
