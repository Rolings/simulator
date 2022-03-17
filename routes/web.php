<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PageController,SimulatorController,ClubController};

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
Route::get('/',function (){
    return view('dashboard');
})->name('dashboard');

Route::resource('club',ClubController::class)->except(['show']);
Route::get('/simulator',[SimulatorController::class,'index'])->name('simulator');