<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleryItems = GalleryItem::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('gallery', compact('galleryItems'));
    }
}
