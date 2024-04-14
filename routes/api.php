<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AddressController;


/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/


Route::get('/country', [CountryController::class, 'index']);
Route::get('/country/{id}', [CountryController::class, 'show']);

Route::get('/state', [StateController::class, 'index']);
Route::get('/state/{id}', [StateController::class, 'show']);

Route::get('/city', [CityController::class, 'index']);
Route::get('/city/{id}', [CityController::class, 'show']);

Route::get('/address', [AddressController::class, 'index']);
Route::get('/address/{id}', [AddressController::class, 'show']);
Route::post('/address', [AddressController::class, 'store']);
Route::put('/address/{id}', [AddressController::class, 'update']);
Route::patch('/address/{id}', [AddressController::class, 'updatePartial']);
Route::delete('/address/{id}', [AddressController::class, 'destroy']);

