<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome', ['nama' => 'Joshua']);
});

Route::get('home/', function(){
    return view('home');
});