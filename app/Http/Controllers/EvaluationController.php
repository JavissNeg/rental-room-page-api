<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    protected $table = 'evaluation';
    protected $primaryKey = 'evaluation_id';
    protected $fillable = [
        'rating',
        'comment',
        'image_url'
    ];
}
