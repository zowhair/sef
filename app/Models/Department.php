<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';
    protected $fillable = [
        'id',
        'page_title',
        'bannar_img',
        'sub_title',
        'decription',
        'page_name',
    ];
}
