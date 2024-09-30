<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Investigator extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;


    protected $fillable = [
        'name',
        'position',
        'phone',
        'email',
        'bio',
        'profile_pic',
        'description',  
        'profile_pdf',
    ];

      // Define the media collection for profile images
      public function registerMediaCollections(): void
      {
          $this->addMediaCollection('profile_pic')->singleFile();
      }

      


}
