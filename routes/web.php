<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BiztroxController;
use App\Http\Controllers\CategoryController;
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
Route::controller(BiztroxController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/blog-category','category')->name('blog-category');
    Route::get('/blog-detail','detail')->name('blog-detail');
    Route::get('/contact-us','contact')->name('contact-us');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('dashboard');

    Route::get('/dashboard/add-category',[CategoryController::class,'index'])->name('add-category');
    Route::post('/dashboard/create-category',[CategoryController::class,'create'])->name('create-category');
    Route::get('/dashboard/manage-category',[CategoryController::class,'manage'])->name('manage-category');
    Route::get('/dashboard/edit-category/{id}',[CategoryController::class,'edit'])->name('edit-category');
    Route::post('/dashboard/update-category/{id}',[CategoryController::class,'update'])->name('update-category');
    Route::get('/dashboard/delete-category/{id}',[CategoryController::class,'delete'])->name('delete-category');
});
