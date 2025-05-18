<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WimaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/gender', [WimaController::class, 'retrieveGender']);
Route::get('/state', [WimaController::class, 'retrieveState']);
Route::get('/religion', [WimaController::class, 'retrieveReligion']);
Route::get('/nursing-mother', [WimaController::class, 'retrieveNursingMother']);
Route::get('/disability', [WimaController::class, 'retrieveDisability']);
Route::get('/physical-challenge', [WimaController::class, 'retrievePhysicalChallenge']);
Route::get('/operator', [WimaController::class, 'retrieveOperator']);
Route::get('/district', [WimaController::class, 'retrieveDistrict']);
Route::get('/msp-type', [WimaController::class, 'retrieveMspType']);
Route::get('/qualification', [WimaController::class, 'retrieveQualification']);
Route::get('/languages', [WimaController::class, 'retrieveLanguages']);