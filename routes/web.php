<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EtalaseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WelcomeController;


Route::get('/', [WelcomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/etalase', [EtalaseController::class, 'index'])->name("etalase");
    Route::get('/tentang-kami', [AboutController::class, 'index'])->name("tentang-kami");
    Route::get('/service', [ServiceController::class, 'index'])->name("service");
    Route::get('/profil', [ProfileController::class, 'index'])->name("profil");
});
