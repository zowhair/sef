<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerInstitution extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'partner_institutions';
    protected $fillable = [
        'id',
        'image_path',
        'institution_name',
        'date',
        'catagory',
    ];
}