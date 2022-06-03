<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;
    protected $fillable = [
        'Employee_id',
        'name',
        'cschool',
        'cdistrict',
        'tdistrict',
        'regional',
        'description',
        'author',
        'ward',
        'Message',
        'Teacher_approved',
        'Transfer_Headmaster',
        'tschool',
        'Headmaster',
        'WEO',
        'DEO',
        'DED',
        'Regional_Director',
        'T_comment',
        'H_comment',
        'T_date',
        'W_date',
        'DEO_date',
        'DED_date',
        'RD_date',
    ];
}
