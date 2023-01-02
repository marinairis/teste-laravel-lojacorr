w<?php

use App\Http\Controllers\HousesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/houses/calculate', [HousesController::class, 'index']);
Route::get('/houses/result', [HousesController::class, 'result'])->name('result');

