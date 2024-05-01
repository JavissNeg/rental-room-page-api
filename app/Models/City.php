<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'city';
    protected $primaryKey = 'city_id';
    protected $fillable = [
        'name',
        'state_id',
    ];
    
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
    
}
