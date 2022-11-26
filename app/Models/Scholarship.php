<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;
    protected $table = 'scholarships';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'introduction',
        'video_path',
    ];
}
