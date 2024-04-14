<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_Type extends Model
{
    use HasFactory;

    protected $table = 'property_type';
    protected $primaryKey = 'property_type_id';
    protected $fillable = [
        'property_type_id',
        'description',
    ];
}
