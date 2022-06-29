<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chance extends Model
{
    use HasFactory;
    protected $fillable = [
      
        'name',
        'school',
        'hospital',
        'DMO',
        'district',
     
        'regional',
       
        'description',
        'author',
        'ward',
        'position',
        'amount',
        'amount1',
      
     
     
        'Headmaster',
        'WEO',
        'DEO',
        'DED',
        'RD',
       
       
        'Tamisemi',
    ];
}
