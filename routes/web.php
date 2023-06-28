<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\BokkController;

Route::get('/', [BokkController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/book', [App\Http\Controllers\BokkController::class, 'index'])->name('book');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function ()  {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::get('books', [App\Http\Controllers\Admin\BookController::class, 'index']);
    Route::get('books-borrowed', [App\Http\Controllers\Admin\BookController::class, 'create']);
    Route::post('books-borrowed', [App\Http\Controllers\Admin\BookController::class, 'store']);
    Route::get('edit-books/{books_id}' , [App\Http\Controllers\Admin\BookController::class, 'edit']);
    Route::put('update-borrowed/{books_id}' , [App\Http\Controllers\Admin\BookController::class, 'update']);
    Route::get('delete-books/{books_id}' , [App\Http\Controllers\Admin\BookController::class, 'destroy']);

    Route::get('record', [App\Http\Controllers\Admin\RecordController::class, 'index']);
    Route::get('add-record', [App\Http\Controllers\Admin\RecordController::class, 'create']);
    Route::post('add-record', [App\Http\Controllers\Admin\RecordController::class, 'store']);
    Route::get('record/{record_id}' , [App\Http\Controllers\Admin\RecordController::class, 'edit']);
    Route::put('update-record/{record_id}' , [App\Http\Controllers\Admin\RecordController::class, 'update']);
    Route::get('delete-record/{record_id}' , [App\Http\Controllers\Admin\RecordController::class, 'destroy']);

    Route::get('setting', [App\Http\Controllers\Admin\SettingController::class, 'index']);

    Route::get('users' , [App\Http\Controllers\Admin\UserController::class, 'index']);


    Route::post('/user', 'UserController@store')->name('user.store');
    
});
