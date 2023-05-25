<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BejegyzesController;
use App\Http\Controllers\OsztalyController;
use App\Http\Controllers\TevekenysegController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/bejegyzesek', [BejegyzesController::class,'index']);
Route::get('/api/osztalyok', [OsztalyController::class,'index']);
Route::get('/api/tevekenysegek', [TevekenysegController::class,'index']);
Route::get('/api/osszesBejegyzes', [BejegyzesController::class,'osszesBejegyzes']);
Route::get('/api/bejegyzesek/{osztaly_id}', [BejegyzesController::class,'osztallyal']);
Route::post('/api/bejegyzes', [BejegyzesController::class,'store']);