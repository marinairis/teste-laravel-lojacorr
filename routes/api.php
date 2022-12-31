<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('categories', [CategoriesController::class, 'index']);
Route::get('categories\{id}', [CategoriesController::class, 'show']);
Route::post('categorie', [CategoriesController::class, 'store']);
Route::put('categorie/{id}', [CategoriesController::class, 'update']);
Route::delete('categorie\{id}', [CategoriesController::class, 'delete']);
