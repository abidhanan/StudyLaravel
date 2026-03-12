<?php

use App\Http\Controllers\AdminController\TesterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TesterController::class, 'index']);
