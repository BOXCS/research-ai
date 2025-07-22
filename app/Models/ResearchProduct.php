<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResearchProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category_id', // ganti dari 'category'
        'status',
        'tgl_mulai',
        'tgl_selesai',
        'image',
        'video_url'
    ];

    protected $casts = [
        'tgl_mulai' => 'date',
        'tgl_selesai' => 'date',
    ];

    public function getDurationAttribute()
    {
        return $this->tgl_mulai->format('Y') . '-' . $this->tgl_selesai->format('Y');
    }

    // Relasi baru
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function teamMembers()
    {
        return $this->belongsToMany(TeamMember::class, 'research_team')->withPivot('role');
    }

    public function publications()
    {
        return $this->belongsToMany(Publication::class, 'research_publications');
    }
}
