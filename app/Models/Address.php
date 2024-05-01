<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    
    protected $table = 'address';
    protected $primaryKey = 'address_id';
    protected $fillable = [
        'location',
        'street', 
        'district', 
        'zip_code', 
        'street_number', 
        'apartment_number',
        'city_id',
    ];
    

    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

}
