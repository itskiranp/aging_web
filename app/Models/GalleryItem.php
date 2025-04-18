<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'category',
        'sort_order',
        'is_active'
    ];
    protected $casts = [
        'is_active' => 'boolean'
    ];
    public function getCategoryLabelAttribute()
    {
        return match($this->category) {
            'training' => 'Trainings',
            'survey' => 'Surveys',
            'lab' => 'Lab Work',
            default => 'Other',
        };
    }

}
