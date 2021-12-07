<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\imagesController;
use App\Http\Controllers\HomeController;

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

Route::get('/',  [imagesController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/create', [imagesController::class, 'create']);

Route::get('/show/{id}', [imagesController::class, 'show']);

Route::get('/edit/{id}', [imagesController::class, 'edit']);

Route::post('/store', [imagesController::class, 'store']);

Route::post('/update/{id}', [imagesController::class, 'update']);

Route::get('/delete/{id}', [imagesController::class, 'delete']);





