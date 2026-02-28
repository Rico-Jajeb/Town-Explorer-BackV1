<?php


use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;  // <-- make sure this is here

use App\Http\Controllers\API\Admin\Place\PlaceCategoryController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\LogoutController;


Route::get('/category', [PlaceCategoryController::class, 'index']);
Route::post('/add-category', [PlaceCategoryController::class, 'addCategoryPlace']);
Route::get('/display-category', [PlaceCategoryController::class, 'displayCategory']);

Route::post('/add-place', [PlaceController::class, 'addPlace']);




// routes/api.php
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});