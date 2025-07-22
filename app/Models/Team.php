<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'position', 
        'specialization', 
        'education',
        'experience', 
        'image', 
        'email', 
        'linkedin',
        'google_scholar', 
        'publications', 
        'h_index', 
        'bio'
    ];
}
