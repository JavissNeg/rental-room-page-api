<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\RentalStatusController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaymentController;

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

Route::get('/currency', [CurrencyController::class, 'index']);
Route::get('/currency/{id}', [CurrencyController::class, 'show']);

Route::get('/evaluation', [EvaluationController::class, 'index']);
Route::get('/evaluation/{id}', [EvaluationController::class, 'show']);

Route::get('/period', [PeriodController::class, 'index']);
Route::get('/period/{id}', [PeriodController::class, 'show']);

Route::get('/property_type', [PropertyTypeController::class, 'index']);
Route::get('/property_type/{id}', [PropertyTypeController::class, 'show']);

Route::get('/rental_status', [RentalStatusController::class, 'index']);
Route::get('/rental_status/{id}', [RentalStatusController::class, 'show']);

Route::get('/person', [PersonController::class, 'index']);
Route::get('/person/{id}', [PersonController::class, 'show']);
Route::put('/person/{id}', [PersonController::class, 'update']);
Route::patch('/person/{id}', [PersonController::class, 'updatePartial']);

Route::get('/login', [LoginController::Class, 'index']);
Route::get('/login/{id}', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'store']);
Route::put('/login/{id}', [LoginController::class, 'update']);
Route::patch('/login/{id}', [LoginController::class, 'updatePartial']);
Route::delete('/login/{id}', [LoginController::class, 'destroy']);

Route::get('/property', [PropertyController::class, 'index']);
Route::get('/property/{id}', [PropertyController::class, 'show']);
Route::post('/property', [PropertyController::class, 'store']);
Route::put('/property/{id}', [PropertyController::class, 'update']);
Route::patch('/property/{id}', [PropertyController::class, 'updatePartial']);
Route::delete('/property/{id}', [PropertyController::class, 'destroy']);

Route::get('/rental', [RentalController::class, 'index']);
Route::get('/rental/{id}', [RentalController::class, 'show']);
Route::post('/rental', [RentalController::class, 'store']);
Route::put('/rental/{id}', [RentalController::class, 'update']);
Route::patch('/rental/{id}', [RentalController::class, 'updatePartial']);
Route::delete('/rental/{id}', [RentalController::class, 'destroy']);

Route::post('/mail', [MailController::class, 'store']);

Route::post('/payment', [PaymentController::class, 'purchase']);