<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'name',
        'DMO',
        'DEO',
        'DED',
        'description',
        'regional_id',
       
       
    ];
}
    
