<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

Route::redirect('/', '/login');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     Lfm::routes();
 });
