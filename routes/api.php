<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categories', [CategoriesController::class, 'index']);
Route::post('categories', [CategoriesController::class, 'store']);
Route::get('categories/{id}', [CategoriesController::class, 'show']);
Route::put('categories/{id}', [CategoriesController::class, 'update']);
Route::delete('categories/{id}', [CategoriesController::class, 'delete']);
