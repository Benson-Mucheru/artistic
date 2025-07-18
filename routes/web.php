<?php

use App\Http\Controllers\Artist\ArtistDashboardController;
use App\Http\Controllers\Artist\ArtistSignupController;
use App\Http\Controllers\Artist\ArtistLoginController;
use App\Http\Controllers\FanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CreatorLogin;


Route::get('/', [UserController::class, 'index']);
Route::get('/artist/signup', [ArtistSignupController::class, 'create']);
Route::get('/artist/login', [ArtistLoginController::class, 'create']);
Route::post('/artist/login', [ArtistLoginController::class, 'store']);
Route::post('/artist/logout', [ArtistLoginController::class, 'destroy']);
Route::post('/send', [ArtistSignupController::class, 'store']);
Route::get('/artist/{id}/dashboard', [ArtistDashboardController::class, 'dashboard'])->middleware([CreatorLogin::class]);
Route::get('/artist/{id}/music', [ArtistDashboardController::class, 'music'])->middleware([CreatorLogin::class]);

Route::get('/fan', [FanController::class, 'index']);