<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AddressController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/country', [CountryController::class, 'index'])->name('country.index');
Route::get('/country/{id}', [CountryController::class, 'show'])->name('country.show');

Route::get('/state', [StateController::class, 'index'])->name('state.index');
Route::get('/state/{id}', [StateController::class, 'show'])->name('state.show');

Route::get('/city', [CityController::class, 'index'])->name('city.index');
Route::get('/city/{id}', [CityController::class, 'show'])->name('city.show');

Route::get('/address', [AddressController::class, 'index'])->name('address.index');
Route::get('/address/{id}', [AddressController::class, 'show'])->name('address.show');
Route::post('/address', [AddressController::class, 'store'])->name('address.store');
Route::put('/address/{id}', [AddressController::class, 'update'])->name('address.update');
Route::delete('/address/{id}', [AddressController::class, 'destroy'])->name('address.destroy');