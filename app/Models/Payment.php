<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'Payment';
    protected $primaryKey = 'payment_id';
    protected $fillable = [
        'payment_key',
        'payment_type',
        'amount',
        'property_id',
        'lessee_id',
    ];
}
