<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $table = 'rental';
    protected $primaryKey = 'rental_id';
    protected $fillable = [
        'rental_id',
        'total',
        'start_date',
        'end_date',
        'rental_status_id',
        'property_id',
        'lessee_id',
        'evaluation_id'
    ];
}
