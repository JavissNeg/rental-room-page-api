<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('mail', function () {
    return view(
        'mail.verificationcode',
        [
            'verificationCode' => '123456',
        ]
    );
});