<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ContentAdminController extends Controller
{
    public function index()
    {
        return view('post-admin.index');
    }

    public function showAllPost()
    {
        $posts = Post::all();
        return view('post-admin.posts', compact('posts'));
    }

    public function showCreatePost()
    {
        return view('post-admin.create');
    }
}
