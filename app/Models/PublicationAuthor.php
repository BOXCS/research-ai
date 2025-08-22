<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicationAuthor extends Model
{
    protected $fillable = ['publication_id', 'team_member_id', 'external_name', 'order'];

    public function publication()
    {
        return $this->belongsTo(\App\Models\Publication::class);
    }

    public function teamMember()
    {
        return $this->belongsTo(\App\Models\TeamMember::class);
    }
}
