<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
// Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Category
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('mental/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewCategoryPost']);
Route::get('mental/{category_slug}/{post_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewPost']);
// Reference Page 
Route::get('/reference', [App\Http\Controllers\Frontend\FrontendController::class, 'ViewReference']);
Route::get('/mentalite', [App\Http\Controllers\Frontend\FrontendController::class, 'ViewMentalite']);
Route::get('/career', [App\Http\Controllers\Frontend\FrontendController::class, 'ViewCareer']);
Route::get('/service', [App\Http\Controllers\Frontend\FrontendController::class, 'ViewService']);
Route::get('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'ViewContact']);
// Corporate
Route::get('mental/{corporate_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewCorporatePost']);
Route::get('mental/{corporate_slug}/{corpost_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewCorpost']);

// Comment System
Route::post('comments', [App\Http\Controllers\Frontend\CommentController::class, 'store']);
Route::post('delete-comment', [App\Http\Controllers\Frontend\CommentController::class, 'destroy']);

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    //Category
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::post('delete-category', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);
    // Corporate
    Route::get('corporate', [App\Http\Controllers\Admin\CorporateController::class, 'index']);
    Route::get('add-corporate', [App\Http\Controllers\Admin\CorporateController::class, 'create']);
    Route::post('add-corporate', [App\Http\Controllers\Admin\CorporateController::class, 'store']);
    Route::get('edit-corporate/{corporate_id}', [App\Http\Controllers\Admin\CorporateController::class, 'edit']);
    Route::put('update-corporate/{corporate_id}', [App\Http\Controllers\Admin\CorporateController::class, 'update']);
    Route::post('delete-corporate', [App\Http\Controllers\Admin\CorporateController::class, 'destroy']);
    // About
    Route::get('about', [App\Http\Controllers\Admin\AboutController::class, 'index']);
    Route::get('add-about', [App\Http\Controllers\Admin\AboutController::class, 'create']);
    Route::post('add-about', [App\Http\Controllers\Admin\AboutController::class, 'store']);
    Route::get('edit-about/{about_id}', [App\Http\Controllers\Admin\AboutController::class, 'edit']);
    Route::put('update-about/{about_id}', [App\Http\Controllers\Admin\AboutController::class, 'update']);
    Route::post('delete-about', [App\Http\Controllers\Admin\AboutController::class, 'destroy']);
    // Posts
    Route::get('posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('add-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('update-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::post('delete-post', [App\Http\Controllers\Admin\PostController::class, 'destroy']);
    // Corposts
    Route::get('corposts', [App\Http\Controllers\Admin\CorpostController::class, 'index']);
    Route::get('add-corpost', [App\Http\Controllers\Admin\CorpostController::class, 'create']);
    Route::post('add-corpost', [App\Http\Controllers\Admin\CorpostController::class, 'store']);
    Route::get('corpost/{corpost_id}', [App\Http\Controllers\Admin\CorpostController::class, 'edit']);
    Route::put('update-corpost/{corpost_id}', [App\Http\Controllers\Admin\CorpostController::class, 'update']);
    Route::post('delete-corpost', [App\Http\Controllers\Admin\CorpostController::class, 'destroy']);
    // Mentalite
    Route::get('mentalite', [App\Http\Controllers\Admin\MentaliteController::class, 'index']);
    Route::get('add-mentalite', [App\Http\Controllers\Admin\MentaliteController::class, 'create']);
    Route::post('add-mentalite', [App\Http\Controllers\Admin\MentaliteController::class, 'store']);
    Route::get('edit-mentalite/{mentalite_id}', [App\Http\Controllers\Admin\MentaliteController::class, 'edit']);
    Route::put('update-mentalite/{mentalite_id}', [App\Http\Controllers\Admin\MentaliteController::class, 'update']);
    Route::post('delete-mentalite', [App\Http\Controllers\Admin\MentaliteController::class, 'destroy']);
    // Services
    Route::get('service', [App\Http\Controllers\Admin\ServiceController::class, 'index']);
    Route::get('add-service', [App\Http\Controllers\Admin\ServiceController::class, 'create']);
    Route::post('add-service', [App\Http\Controllers\Admin\ServiceController::class, 'store']);
    Route::get('edit-service/{service_id}', [App\Http\Controllers\Admin\ServiceController::class, 'edit']);
    Route::put('update-service/{service_id}', [App\Http\Controllers\Admin\ServiceController::class, 'update']);
    Route::post('delete-service', [App\Http\Controllers\Admin\ServiceController::class, 'destroy']);
    // Refereneces
    Route::get('brand', [App\Http\Controllers\Admin\BrandController::class, 'index']);
    Route::get('add-brand', [App\Http\Controllers\Admin\BrandController::class, 'create']);
    Route::post('add-brand', [App\Http\Controllers\Admin\BrandController::class, 'store']);
    Route::get('edit-brand/{brand_id}', [App\Http\Controllers\Admin\BrandController::class, 'edit']);
    Route::put('update-brand/{brand_id}', [App\Http\Controllers\Admin\BrandController::class, 'update']);
    Route::post('delete-brand', [App\Http\Controllers\Admin\BrandController::class, 'destroy']);
    // Users
    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('add-user', [App\Http\Controllers\Admin\UserController::class, 'create']);
    Route::post('add-user', [App\Http\Controllers\Admin\UserController::class, 'store']);
    Route::get('user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('update-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
    Route::post('delete-user', [App\Http\Controllers\Admin\UserController::class, 'destroy']);
    // Settings
    Route::get('settings', [App\Http\Controllers\Admin\SettingController::class, 'index']);
    Route::post('settings', [App\Http\Controllers\Admin\SettingController::class, 'savedata']);

});