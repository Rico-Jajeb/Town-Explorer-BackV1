<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

use Illuminate\Support\Facades\Log;

use App\Http\Controllers\API\SettingController;
use App\Http\Controllers\Admin\PlaceController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::middleware('throttle:60,1') 
    ->prefix('v1')
    ->group(function () {
        Route::get('/add-place', [PlaceController::class, 'addPlace']);
});










// Route::middleware([
//     'web',
//     EnsureFrontendRequestsAreStateful::class,
// ])->group(function () {
//     Route::post('/register', [\App\Http\Controllers\RegisteredUserController::class, 'store']);
//     Route::post('/login', [\App\Http\Controllers\AuthenticatedSessionController::class, 'store']);
//     Route::post('/logout', [\App\Http\Controllers\AuthenticatedSessionController::class, 'destroy']);
// });







// Route::middleware('auth:sanctum')->post('/logout', [LoginController::class, 'logout']);