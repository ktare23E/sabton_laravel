<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'balance',
        'user_age',
        'description'
    ];

    // protected $guarded = [];
    
    // public $incrementing = false;

    // public $timestamps = false;
    // protected $dateFormat = 'U';
}
