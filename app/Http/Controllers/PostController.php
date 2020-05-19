<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::with('tags')->latest()->get();

        return view('welcome', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $attributes = $this->validate(
            $request,
            [
                'slug' => 'required|alpha_dash|unique:posts',
                'name' => 'required|between:5,100',
                'short_desc' => 'required',
                'long_desc' => 'required'
            ]
        );

        $attributes['owner_id'] = auth()->id();

        Post::create($attributes);

        return redirect('/');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post);

        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $request = request()->validate(
            [
                'name' => 'required|between:5,100',
                'short_desc' => 'required',
                'long_desc' => 'required'
            ]
        );

        $post->update($request);

        $postTags = $post->tags->keyBy('tag');

        $tags = collect(explode(' , ', \request('tags')))->keyBy(
            function ($item) {
                return $item;
            }
        );
        $tagsToAttach = $tags->diffKeys($postTags);
        $tagsToDetach = $postTags->diffKeys($tags);

        foreach ($tagsToAttach as $tag) {
            $tag = Tag::firstOrCreate(['tag' => $tag]);
            $post->tags()->attach($tag);
        }

        foreach ($tagsToDetach as $tag) {
            $post->tags()->detach($tag);
        }

        return redirect('/');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/');
    }
}
