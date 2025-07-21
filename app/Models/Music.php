<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasUuids;
    protected $fillable = [
        'artist_id', 'title', 'path'
    ];
}
