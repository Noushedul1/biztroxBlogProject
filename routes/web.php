<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BiztroxController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
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
    Route::get('/blog-category/{id}','category')->name('blog-category');
    Route::get('/blog-detail','detail')->name('blog-detail');
    Route::get('/contact-us','contact')->name('contact-us');
    Route::get('/blog-single/{id}','blogSingle')->name('blog-single');

    Route::post('/new-comment/{id}','newComment')->name('new-comment');
});

 // start for user login for comment
    Route::get('/user-login/{id?}',[AuthController::class,'index'])->name('user-login');
    Route::get('/user-register',[AuthController::class,'userRegister'])->name('user-register');
    Route::post('/new-register',[AuthController::class,'newuserRegister'])->name('new-register');
    Route::post('/new-userLoginfront',[AuthController::class,'userLoginfront'])->name('new-userLoginfront');

 // end for user login for comment 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('dashboard');
    // start for category 

    Route::get('/dashboard/add-category',[CategoryController::class,'index'])->name('add-category');
    Route::post('/dashboard/create-category',[CategoryController::class,'create'])->name('create-category');
    Route::get('/dashboard/manage-category',[CategoryController::class,'manage'])->name('manage-category');
    Route::get('/dashboard/edit-category/{id}',[CategoryController::class,'edit'])->name('edit-category');
    Route::post('/dashboard/update-category/{id}',[CategoryController::class,'update'])->name('update-category');
    Route::get('/dashboard/delete-category/{id}',[CategoryController::class,'delete'])->name('delete-category');
    // end for category 

    // start for blog

    Route::get('/dashboard/add-blog',[BlogController::class,'index'])->name('add-blog');
    Route::post('/dashboard/create-blog',[BlogController::class,'create'])->name('create-blog');
    Route::get('/dashboard/manage-blog',[BlogController::class,'manage'])->name('manage-blog');
    Route::get('/dashboard/edit-blog/{id}',[BlogController::class,'edit'])->name('edit-blog');
    Route::post('/dashboard/update-blog/{id}',[BlogController::class,'update'])->name('update-blog');
    Route::get('/dashboard/delete-blog/{id}',[BlogController::class,'delete'])->name('delete-blog');

    Route::get('/dashboard/view-blog-detail/{id}',[BlogController::class,'detail'])->name('detail-blog');
    Route::get('/dashboard/blog-update-status/{id}',[BlogController::class,'updateStatus'])->name('update-status');
    // start for softDelete 
    Route::get('/dashboard/trash/trash-manage',[BlogController::class,'trash'])->name('trash-manage');
    Route::get('/dashboard/trash/trash-forceDelete/{id}',[BlogController::class,'forceDelete'])->name('trash-forceDelete');
    Route::get('/dashboard/trash/trash-restore/{id}',[BlogController::class,'restore'])->name('trash-restore');
    // end for blog 

    // start for company-setting
    Route::get('/companySetting',[CompanyController::class,'index'])->name('companySetting');
    Route::post('/change-frontend',[CompanyController::class,'changeFrontend'])->name('change-frontend');
    Route::get('/frontend-manage',[CompanyController::class,'manage'])->name('frontend-manage');
    Route::get('/frontend-delete/{id}',[CompanyController::class,'delete'])->name('frontend-delete');
    // end for company-setting 

   
});
