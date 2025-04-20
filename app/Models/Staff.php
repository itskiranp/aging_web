<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Staff extends Model
{
    use HasFactory, Searchable;

    // Add the fillable property
    protected $fillable = [
        'name',
        'position',
        'email',
        'image',
        'cv_link',
    ];
}
