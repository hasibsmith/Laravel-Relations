<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('post_details',[BlogController::class , 'post_details'])->name('post_details');

Route::get('category_details',[BlogController::class , 'category_details'])->name('category_details');

Route::get('authors_details',[BlogController::class , 'authors_details'])->name('authors_details');
Route::get('cities_details',[BlogController::class , 'cities_details'])->name('cities_details');
Route::get('role_details',[BlogController::class , 'role_details'])->name('role_details');
Route::get('doctor_details',[BlogController::class , 'doctor_details'])->name('doctor_details');