<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
        // Add the fillable property
        protected $fillable = [
            'name',
            'position',
            'email',
            'image',
            'cv_link',
        ];    
}
