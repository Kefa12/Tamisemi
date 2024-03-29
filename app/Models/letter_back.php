<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class letter_back extends Model
{
    use HasFactory;
    protected $fillable = [
        'Employee_id',
        'name',
        'cschool',
        'cdistrict',
        'tdistrict',
        'regional',
        'tregional',
        'description',
        'author',
        'ward',
        'tward',
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
        'W_comment',
        'DEO_comment',
        'DED_comment',
        'RD_comment',
        'T_date',
        'W_date',
        'DEO_date',
        'DED_date',
        'RD_date',
        'Tamisemi',
    ];
}
