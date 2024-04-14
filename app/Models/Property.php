<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'property';
    protected $primaryKey = 'property_id';
    protected $fillable = [
        'name',
        'description',
        'bedrooms_number',
        'bathrooms_number',
        'image_url',
        'price',
        'isVerified',
        'isAvaible',
        'rating',
        'lessor_id',
        'address_id',
        'property_type_id',
        'currency_id',
        'period_id'
    ];
}
