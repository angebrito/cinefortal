<?php

use App\Http\Controllers\LançamentosController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\NowplayingController;
use Illuminate\Support\Facades\Route;


Route::get('/',[MoviesController::class, 'index']);
Route::get('/movies/{movie}', [MoviesController::class, 'show']);

Route::get('/nowplaying/{movie}', [NowplayingController::class, 'nowplaying']);
Route::get('/top/{movie}', [NowplayingController::class, 'top']);