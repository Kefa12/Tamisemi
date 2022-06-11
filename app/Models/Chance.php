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
        'district',
     
        'regional',
       
        'description',
        'author',
        'ward',
      
     
     
        'Headmaster',
        'WEO',
        'DEO',
        'DED',
        'RD',
       
       
        'Tamisemi',
    ];
}
