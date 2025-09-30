<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/second-page', 'second');
Route::view('/third-page', 'third');
