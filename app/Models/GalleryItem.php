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

    // ✅ Centralized category labels
    public static function categoryOptions(): array
    {
        return [
            'training' => 'Trainings',
            'meetings' => 'Meetings',
            'survey' => 'Surveys',
            'lab' => 'Lab Work',
            'visitors' => 'Guest Visits',
            'other' => 'Other',
        ];
    }

    // ✅ Centralized category badge colors (for Filament tables)
    public static function categoryColors(): array
    {
        return [
            'training' => 'info',
            'meetings' => 'success',
            'survey' => 'success',
            'lab' => 'warning',
            'visitors' => 'primary',
            'other' => 'gray',
        ];
    }

    // ✅ Use centralized options for display label
    public function getCategoryLabelAttribute(): string
    {
        return self::categoryOptions()[$this->category] ?? 'Other';
    }
}
