<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class HomePageContent extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'main_text',
        'why_this_matters',
        'carousel_images',
        'collaborators',
    ];
    // Mutator to encode carousel_images as JSON before saving
    public function setCarouselImagesAttribute($value)
    {
        $this->attributes['carousel_images'] = json_encode($value);
    }

    // Mutator to encode collaborators as JSON before saving
    public function setCollaboratorsAttribute($value)
    {
        $this->attributes['collaborators'] = json_encode($value);
    }

    // Accessors to decode JSON back into arrays when retrieving data
    public function getCarouselImagesAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getCollaboratorsAttribute($value)
    {
        return json_decode($value, true);
    }
}
