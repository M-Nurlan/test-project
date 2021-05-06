<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index']);
Route::post('/get_branches', [\App\Http\Controllers\AjaxController::class, 'getBranches']);
Route::post('/get_workers', [\App\Http\Controllers\AjaxController::class, 'getWorkers']);
