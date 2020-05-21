<?php

namespace App\Http\Controllers;

use App\Tag;

class TagController extends Controller
{
    public function index(Tag $tag)
    {
        return view('posts.tag', compact('tag'));
    }
}
