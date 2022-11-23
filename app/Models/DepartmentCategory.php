<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentCategory extends Model
{
    use HasFactory;
    protected $table = 'department_categories';
    protected $fillable = [
        'id',
        'title',
    ];
}
