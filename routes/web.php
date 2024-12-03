<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
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


Route::get('/', [JobController::class, 'index'])->name('job.index');

Route::get('/create', [JobController::class, 'create'])->name('create');
Route::post('/create', [JobController::class, 'store'])->name('jobs.store');
Route::get('/search', SearchController::class)->name('search');

Route::delete('/logout', [SessionController::class, 'destroy'],)->name('logout')->middleware('auth');

Route::get('/tags/{tag:name}', TagController::class)->name('tags');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredController::class, 'create'],)->name('register');
    Route::post('/register', [RegisteredController::class, 'store'],)->name('register.save');
    Route::get('/login', [SessionController::class, 'create'],)->name('login');
    Route::post('/login', [SessionController::class, 'store'],)->name('login.auth');
});
