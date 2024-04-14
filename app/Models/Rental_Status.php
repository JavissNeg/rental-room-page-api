<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental_Status extends Model
{
    use HasFactory;

    protected $table = 'rental_status';
    protected $primaryKey = 'rental_status_id';
    protected $fillable = [
        'rental_status_id',
        'description',
    ];
}
