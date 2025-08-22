<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommunityService extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'description', 
        'image', 
        'target_audience',
        'tgl_mulai',
        'tgl_selesai',
        'participants', 
        'location', 
        'duration',
        'status', 
        'impact',
    ];

    protected $casts = [
        'tgl_mulai' => 'date:Y-m-d',
        'tgl_selesai' => 'date:Y-m-d',
    ];    

    public function teamMembers()
    {
        return $this->belongsToMany(TeamMember::class, 'community_service_team')->withPivot('role');
    }
}
