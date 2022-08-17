<?php

use App\Http\Controllers\api;
use App\Http\Controllers\index;
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

// make route index to controller
Route::get('/', [index::class, 'index']);
