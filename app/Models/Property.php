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
    
    protected $casts = [
        'image_url' => 'array'
    ];

    public function login() {
        return $this->belongsTo(Login::class, 'lessor_id')->select('login_id', 'first_name', 'paternal_surname', 'maternal_surname', 'mail', 'phone');
    }

    public function address() {
        return $this->belongsTo(Address::class, 'address_id');
    }

    public function property_type() {
        return $this->belongsTo(Property_Type::class, 'property_type_id');
    }

    public function currency() {
        return $this->belongsTo(Currency::class, 'currency_id');
    }

    public function period() {
        return $this->belongsTo(Period::class, 'period_id');
    }
}
