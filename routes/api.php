<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlaceCategoryController;
use App\Http\Controllers\Admin\PlaceController;


Route::get('/category', [PlaceCategoryController::class, 'index']);

Route::post('/add-place', [PlaceController::class, 'addPlace']);





