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

Route::middleware([CreatorLogin::class])->controller(ArtistDashboardController::class)->group(function(){
    Route::get('/artist/{id}/dashboard' , 'dashboard');
    Route::get('/artist/{id}/music' , 'music');
    Route::get('/artist/{id}/fans' , 'fans');
    Route::get('/artist/{id}/earnings' , 'earnings');
    Route::get('/artist/{id}/edit' , 'edit');
    Route::get('/artist/{id}/music-add' , 'music_add');
    Route::post('/artist/{id}/music-upload' , 'music_upload');
});

Route::get('/fan', [FanController::class, 'index']);