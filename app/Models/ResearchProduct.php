<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'status',
        'tgl_mulai', // tambahkan ini
        'tgl_selesai', // tambahkan ini
        'image',
        'video_url'
    ];

    // app/Models/ResearchProduct.php
    protected $casts = [
        'tgl_mulai' => 'date',
        'tgl_selesai' => 'date',
    ];

    // Tambahkan accessor untuk kompatibilitas
    public function getDurationAttribute()
    {
        return $this->tgl_mulai->format('Y') . '-' . $this->tgl_selesai->format('Y');
    }
}
