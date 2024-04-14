<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentalStatusController extends Controller
{
    protected $table = 'rental_status';
    protected $primaryKey = 'rental_status_id';
    protected $fillable = [
        'rental_status_id',
        'rental_status_description'
    ];
}
