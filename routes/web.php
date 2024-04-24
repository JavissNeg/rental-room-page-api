<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('mail', function () {
    return view(
        'mail.verificationCode',
        [
            'verificationCode' => '123'
        ]
    );
});