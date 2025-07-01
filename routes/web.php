<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('components.welcome', ['name' => 'Ben']);
});

Route::get('/some', function(){
    return view('something', ['name' => 'Luke']);
});
