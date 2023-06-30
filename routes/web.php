<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\hewanController;

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

Route::controller(authController::class)->group(function(){
    Route::get('register','register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/userhome', function () {
        return view('user.home');
    })->name('home');
    
    Route::controller(hewanController::class)->prefix('hewan')->group(function () {
        Route::get('', 'index')->name('hewan');
        Route::get('tambah', 'tambah')->name('hewan.tambah');
        Route::post('store', 'store')->name('hewan.store');
        Route::get('edit/{id}', 'edit')->name('hewan.edit');
        Route::put('edit/{id}', 'update')->name('hewan.update');
        Route::delete('destroy/{id}', 'destroy')->name('hewan.destroy');
        Route::get('detailShelter', 'indexUser')->name('detailShelter');
    });
});

Route::get('/toAddopt', function () {
    return view('user.toAddopt');
})->name('toAddopt');

Route::get('/toShelter', function () {
    return view('user.toShelter');
})->name('toShelter');