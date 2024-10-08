<?php

use App\Http\Controllers\pemainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pemain', [pemainController::class, 'index']);

