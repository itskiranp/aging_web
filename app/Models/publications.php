<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class publications extends Model
{
    protected $fillable = ['title', 'authors', 'journal', 'year', 'volume_issue', 'doi'];
}
