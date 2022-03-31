<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\Pages\Demo1Controller;
use App\Http\Controllers\Pages\Demo2Controller;
use App\Http\Controllers\Pages\Demo3Controller;
use App\Http\Controllers\Pages\Demo4Controller;
use App\Http\Controllers\Pages\Demo5Controller;

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

Route::get('/title', [TitleController::class, 'index'])->name('title.index');
Route::get('/title/edit/{id}', [TitleController::class, 'edit'])->name('title.edit');
Route::post('/title/update/{id}', [TitleController::class, 'update'])->name('title.update');

Route::get('/demo1', [Demo1Controller::class, 'index']);
Route::get('/demo2', [Demo2Controller::class, 'index']);
Route::get('/demo3', [Demo3Controller::class, 'index']);
Route::get('/demo4', [Demo4Controller::class, 'index']);
Route::get('/demo5', [Demo5Controller::class, 'index']);
