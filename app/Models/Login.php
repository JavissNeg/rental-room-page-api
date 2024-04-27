<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    protected $table = 'login';
    protected $primaryKey = 'login_id';
    protected $fillable = [
        'national_id_image', 
        'first_name', 
        'paternal_surname', 
        'maternal_surname', 
        'mail', 
        'phone',
        'password',
        'isVerified',
        'isCertificate',
        'address_id'
    ];
}
