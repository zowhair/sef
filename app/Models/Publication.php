<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $table = 'publications';
    protected $fillable = [
        'id',
        'title',
        'decription',
        'date',
        'image',
        'file_url',
    ];
}
