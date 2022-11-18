<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchStudy extends Model
{
    use HasFactory;
    protected $table = 'research_studies';
    protected $fillable = [
        'id',
        'title',
        'decription',
        'date',
        'image',
        'file_url',
    ];
}
