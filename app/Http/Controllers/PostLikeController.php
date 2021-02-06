<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostLikeController extends Controller
{
    public function store(Post $post, Request $request)
    {
        if ($post->likedBy($request->user())) {
            return back();
        }
        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        Mail::to($post->user)->send(new PostLiked(auth()->user(), $post));

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
