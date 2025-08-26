<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Counter;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', Home::class);
Route::get('/counter', Counter::class);
