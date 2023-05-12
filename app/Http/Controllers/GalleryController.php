<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('galleries.index', [
            'filters' => Gallery::latest()->get(),
            'collections' => GalleryImage::latest()->get()
        ]);
    }
}
