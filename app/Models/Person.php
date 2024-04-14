<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'person';
    protected $primaryKey = 'person_id';
    protected $fillable = [
        'national_id_image', 
        'first_name', 
        'maternal_surname', 
        'paternal_surname', 
        'mail', 
        'phone'
    ];
}
