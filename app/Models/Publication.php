<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'authors', 'journal', 'year', 'volume',
        'issue', 'pages', 'doi', 'impact_factor', 'citation_count',
        'abstract', 'pdf_url', 'category'
    ];
}
