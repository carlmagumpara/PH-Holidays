<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Holiday extends Model
{
    use HasUuid;

    protected $fillable = [
        'event',
        'date',
        'type',
    ];

    protected static function boot()
    {
        parent::boot();
        static::generateUUID();
    }
}
