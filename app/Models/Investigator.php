<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Investigator extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, Searchable;


    protected $fillable = [
        'name',
        'position',
        'phone',
        'email',
        'bio',
        'image',
        'description',
        'profile_pdf',
    ];

    // Define the media collection for profile images
    // public function registerMediaCollections(): void
    // {
    //     $this->addMediaCollection('image')->singleFile();
    // }

    protected $table = 'investigators';

    //add a scope for searching
    public function scopeSearch($query, $term)
    {
        // You can customize which fields are searched
        return $query->where('name', 'LIKE', "%{$term}%")
            ->orWhere('position', 'LIKE', "%{$term}%")
            ->orWhere('email', 'LIKE', "%{$term}%");
    }
}
