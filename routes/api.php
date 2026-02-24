<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Admin\Place\PlaceCategoryController;
use App\Http\Controllers\Admin\PlaceController;


Route::get('/category', [PlaceCategoryController::class, 'index']);
Route::post('/add-category', [PlaceCategoryController::class, 'addCategoryPlace']);
Route::get('/display-category', [PlaceCategoryController::class, 'displayCategory']);

Route::post('/add-place', [PlaceController::class, 'addPlace']);





