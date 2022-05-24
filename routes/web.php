<?php

use App\Http\Controllers\DataDosenController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DataBeasiswaController::class, 'index']);
Route::get('/create', [DataBeasiswaController::class, 'create']);
Route::post('/store', [DataBeasiswaController::class, 'store']);
Route::get('/show/{id}', [DataBeasiswaController::class, 'show']);
Route::post('/update/{id}', [DataBeasiswaController::class, 'update']);
Route::get('/destroy/{id}', [DataBeasiswaController::class, 'destroy']);