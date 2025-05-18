<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WimaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gender', [WimaController::class, 'retrieveGender']);

