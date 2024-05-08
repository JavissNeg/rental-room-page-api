<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerificationCode extends Model
{
    use HasFactory;
    protected $table = 'verification_code';
    protected $primaryKey = 'verification_code_id';
    protected $fillable = [
        'mail', 
        'code', 
        'expires_at'
    ];
    
}
