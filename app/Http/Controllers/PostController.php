<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index', [
            'collections' => Post::whereRelation('postType', 'slug', 'news')->latest()->get()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug): View
    {
        return view('posts.show', [
            'item' => Post::where('slug', $slug)->first()
        ]);
    }
}
