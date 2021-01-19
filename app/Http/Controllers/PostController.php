<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index ()
    {
      $posts = Post::orderBy('created_at', 'desc')->paginate(20);
      return view('posts.index', [
        'posts' => $posts
      ]);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'body' => 'required'
      ]);

      auth()->user()->posts()->create([
        'body' => $request->body
      ]);

      return back();
    }
}
