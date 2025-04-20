<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'date',
        'description',
        'short_description',
        'location',
        'time',
    ];
    protected $casts = [
        'date' => 'datetime', // This ensures date is treated as a DateTime object
    ];
}
