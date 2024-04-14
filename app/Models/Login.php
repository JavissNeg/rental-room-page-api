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
        'username',
        'password',
        'isVerified',
        'isCertificate',
        'person_id'
    ];
}
