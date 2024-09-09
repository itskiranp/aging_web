<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    // Define the custom table name
    protected $table = 'conferenceposters';
    protected $fillable = ['title', 'authors', 'journal', 'year', 'doi'];
}
