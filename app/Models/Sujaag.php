<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sujaag extends Model
{
    use HasFactory;
    protected $table = 'sujaags';
    protected $fillable = [
        'id',
        'title',
        'decription',
        'date',
        'image',
        'file_url',
    ];
}
