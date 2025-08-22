<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamMember extends Model
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

    public function researchProducts()
    {
        return $this->belongsToMany(ResearchProduct::class, 'research_team')->withPivot('role');
    }

    public function communityServices()
    {
        return $this->belongsToMany(CommunityService::class, 'community_service_team')->withPivot('role');
    }

    public function publicationAuthors()
{
    return $this->hasMany(\App\Models\PublicationAuthor::class);
}

}

