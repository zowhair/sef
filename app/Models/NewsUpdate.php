<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsUpdate extends Model
{
    use HasFactory;
    protected $table = 'news_updates';
    protected $fillable = [
        'id',
        'title',
        'content',
        'date',
        'post_by',
        'img_url',
    ];
}
