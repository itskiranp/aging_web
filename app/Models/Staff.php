<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Staff extends Model
{
    use HasFactory, Searchable;

    public function searchableAs()
    {
        return 'staff_index';
    }

    public function toSearchableArray()
    {
        return [
            'id' => (string) $this->id,
            'name' => $this->name,
            'position' => $this->position,
            'email' => $this->email,
            'image' => $this->image,
            'cv_link' => $this->cv_link,
            'created_at' => $this->created_at ? $this->created_at->timestamp : null,
        ];
    }
    
    

    // Add the fillable property
    protected $fillable = [
        'name',
        'position',
        'email',
        'image',
        'cv_link',
    ];
}
