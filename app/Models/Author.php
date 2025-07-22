<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'institution', 'email'];

    public function publications()
    {
        return $this->belongsToMany(Publication::class)->withPivot('author_order');
    }
}
