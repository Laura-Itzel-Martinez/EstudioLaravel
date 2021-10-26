<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
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


Route::get('/index' , [CursoController::class, 'index'])->name('index');
Route::get('/create' , [CursoController::class, 'create'])->name('create');

Route::post('/store' , [CursoController::class, 'store'])->name('store');
Route::get('/show/{curso}' , [CursoController::class, 'show'])->name('show');

Route::get('/show/{curso}/edit', [CursoController::class, 'edit'])->name('edit');

Route::put('/udpate/{curso}', [CursoController::class, 'update'])->name('update');