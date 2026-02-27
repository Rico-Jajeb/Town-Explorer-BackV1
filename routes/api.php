<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Admin\Place\PlaceCategoryController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\Auth\LoginController;


Route::get('/category', [PlaceCategoryController::class, 'index']);
Route::post('/add-category', [PlaceCategoryController::class, 'addCategoryPlace']);
Route::get('/display-category', [PlaceCategoryController::class, 'displayCategory']);

Route::post('/add-place', [PlaceController::class, 'addPlace']);




// routes/api.php
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);