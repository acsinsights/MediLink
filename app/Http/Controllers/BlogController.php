<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;
use Wink\WinkTag;

class BlogController extends Controller
{
    public function index()
    {
        if (request()->has('tag')) {
            $posts = WinkTag::where('name', request('tag'))->first()->posts()->live()->orderBy('publish_date', 'DESC');
            $posts = $posts->paginate(10);
        } else {
            $posts = WinkPost::with('tags')
                ->live()
                ->orderBy('publish_date', 'DESC')
                ->paginate(10);
        }
        $tags = WinkTag::all();
        return view('frontend.blog.index', compact('posts', 'tags'));
    }

    public function show($slug)
    {
        $post = WinkPost::with('tags')
            ->live()
            ->whereSlug($slug)
            ->firstOrFail();
        // take tags of this post
        $tags = $post->tags()->get();


        $recentPosts = WinkPost::select()
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit(5)
            ->get();

        return view('frontend.blog.show' , compact('post', 'tags', 'recentPosts'));
    }
}
