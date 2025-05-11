<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

use App\Http\Controllers\CollatzController;

Route::get('/collatz/{number}', [CollatzController::class, 'input']);
