<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'content', 'image_url', 'images', 'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'images' => 'array',
    ];

    // Auto-generate slug before saving
    public static function boot()
    {
        parent::boot();

        static::saving(function ($news) {
            if (empty($news->slug)) {
                $news->slug = Str::slug($news->title);

                $originalSlug = $news->slug;
                $count = 1;

                // Ensure uniqueness
                while (News::where('slug', $news->slug)->where('id', '!=', $news->id)->exists()) {
                    $news->slug = $originalSlug . '-' . $count++;
                }
            }
        });
    }

    public function setCarouselImagesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }

    public function getCarouselImagesAttribute($value)
    {
        return json_decode($value, true);
    }
}
