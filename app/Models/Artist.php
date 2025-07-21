<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Artist extends Authenticatable
{
    use HasUuids;
    protected $fillable = [
        'name', 'email', 'profile_path', 'password'
    ];

    public function songs (): HasMany {
        return $this->hasMany(Music::class);
    }
}
