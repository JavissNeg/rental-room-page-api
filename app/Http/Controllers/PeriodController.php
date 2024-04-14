<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriodController extends Controller
{
    protected $table = 'period';
    protected $primaryKey = 'period_id';
    protected $fillable = [
        'period_id'
    ];
}
