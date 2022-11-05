<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $table = 'alumnis';
    protected $fillable = [
        'id',
        'name',
        'father_name',
        'domsile_dirtrict',
        'school_category',
        'ssesp_batch',
        'class_adm_in',
        'institution_studied',
        'passing_year',
        'contact',
        'current_status',
    ];
}
