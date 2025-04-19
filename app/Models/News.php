<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class News extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['title', 'content', 'image_url','images', 'published_at'];

    protected $casts = [
        'published_at' => 'datetime',
        'images' => 'array',
        
    ];

    public function setCarouselImagesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }

      // Accessors to decode JSON back into arrays when retrieving data
      public function getCarouselImagesAttribute($value)
      {
          return json_decode($value, true);
      }
}
