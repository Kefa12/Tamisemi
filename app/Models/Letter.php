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
        'chospital',
        'thospital',
        'cdistrict',
        'tdistrict',
        'regional',
        'tregional',
        'description',
        'author',
        'ward',
        'tward',
        'MDC_approved',
        'Message',
        'Teacher_approved',
        'Transfer_Headmaster',
        'tschool',
        'Headmaster',
        'WEO',
        'DEO',
        'DMO',
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
