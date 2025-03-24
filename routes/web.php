<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

// Home route
Route::get('/', [ExampleController::class, 'home']); 

// Show data route
Route::get('/show-data', [ExampleController::class, 'showData']);
