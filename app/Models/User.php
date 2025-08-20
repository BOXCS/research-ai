<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Aturan siapa yang bisa login ke Filament
    public function canAccessPanel(Panel $panel): bool
    {
        // contoh: hanya email tertentu
        // return str_ends_with($this->email, '@gmail.com');

        // kalau semua user boleh login:
        return true;
    }
}
