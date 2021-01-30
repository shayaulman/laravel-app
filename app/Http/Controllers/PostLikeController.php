<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;

class PostLikeController extends Controller
{
    public function store (Post $post, Request $request)
    {
      if ($post->likedBy($request->user())) {
        return back();
      }
      $post->likes()->create([
        'user_id' => $request->user()->id,
      ]);

      return back();
    }

    public function destroy(Request $request, Post $post)
    {
        $request->user()->likes->where('post_id', $post->id)->each(function ($like) {
        $like->delete();
      });
      return back();
    }
}
