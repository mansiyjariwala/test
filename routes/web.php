<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\studentController;
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

Route::get('/home', [studentController::class, 'create'])->name('home');
Route::post('/saveStudent',[studentController::class,'save'])->name('createStudent');
Route::get('/showStudent',[studentController::class,'show'])->name('showStudent');
Route::get('deleteStudent/{id}',[studentController::class,'destroy'])->name('destroyStudent');
Route::get('editStudent/{id}',[studentController::class,'edit'])->name('editStudent');
Route::post('updateStudent/{id}',[studentController::class,'update'])->name('updateStudent');


Auth::routes();

