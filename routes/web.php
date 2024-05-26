<?php

use App\Http\Controllers\Backend\CatergoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomepageController;


Route::get('/', [HomepageController::class, 'homepage'])->name('homepage');

Auth::routes();


Route::middleware('auth')->group(function () {
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/category',[CatergoryController::class, 'category'])->name('category.show');
Route::post('/category/{id?}',[CatergoryController::class, 'categoryadd'])->name('category.add');
Route::get('/category/delete/{id}',[CatergoryController::class, 'categorydelete'])->name('category.delete');
Route::get('/category/edit/{id}',[CatergoryController::class, 'categoryedit'])->name('category.edit');
});

