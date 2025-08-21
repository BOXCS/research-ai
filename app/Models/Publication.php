<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'authors',
        'journal',
        'year',
        'volume',
        'issue',
        'pages',
        'doi',
        'impact_factor',
        'citation_count',
        'abstract',
        'pdf_url',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class)->withPivot('author_order');
    }

    public function researchProducts()
    {
        return $this->belongsToMany(ResearchProduct::class, 'research_publications');
    }
}


