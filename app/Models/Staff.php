<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'email',
        'image',
        'cv_link',
        'sort_order',
    ];

    // Default ordering by sort_order
    protected static function booted(): void
    {
        static::addGlobalScope('ordered', function (Builder $query) {
            $query->orderBy('sort_order');
        });
    }
}
