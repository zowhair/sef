<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipGallery extends Model
{
    use HasFactory;
    protected $table = 'scholarship_galleries';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'url',
    ];
}
