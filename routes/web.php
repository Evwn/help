<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\HTTP;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VolunteeController;

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
Route::get('register', [RegisterController::class,'register']);
Route::post('save', [RegisterController::class,'save'])->name('save');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::get('home', [HomeController::class,'home'])->name('home');
Route::get('about', [AboutController::class,'about']);
Route::get('blog', [BlogController::class,'blog']);
Route::get('causes', [CausesController::class,'causes']);
Route::get('contact', [ContactController::class,'contact']);
Route::get('donate', [DonateController::class,'donate']);
Route::get('event', [EventController::class,'event']);
Route::get('service', [ServiceController::class,'service']);
Route::get('single', [SingleController::class,'single']);
Route::get('team', [TeamController::class,'team']);
Route::get('voluntee', [VolunteeController::class,'voluntee']);




