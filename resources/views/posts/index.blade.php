@extends('layouts.app')

@section('content')
<form class="my-12 mx-auto w-96 rounded-md" action="{{route('posts')}}" method="post">
  @csrf
  <textarea class="w-full h-48 border border-gray-200 rounded-md" name="body"></textarea>
  <button class="block ml-auto my-2 py-2 px-6 bg-blue-600 text-white rounded" type="submit">Submit</button>
</form>
<div class="m-8 grid grid-cols-3 gap-6">
  @foreach($posts as $post)
  <div class="w-64 p-6 bg-gray-50 rounded">
    <div class="text-sm">
      <span class="my-2 text-gray-600">{{$post->user->name}}</span>
      <span class="ml-auto text-gray-400 font-light">{{$post->created_at->diffForHumans()}}</span>
    </div>
    <div class="my-4 font-sans text-gray-800">{{$post->body}}</div>
    <div>
      <div class="flex">
        @if (!$post->likedBy(auth()->user()))
        <form class="my-12 mx-auto w-96 rounded-md" action="{{route('posts.likes', $post->id)}}" method="post">
          @csrf
          <button class="text-blue-600" type="submit">Like</button>
        </form>
        @else
        <form class="my-12 mx-auto w-96 rounded-md" action="{{route('posts.likes', $post->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="text-blue-600" type="submit">Dislike</button>
        </form>
        @endif
        <div>
          {{$post->likes->count()}} {{Str::plural('like', $post->likes->count())}}
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@error('body')
<p>{{ $message}}</p>
@enderror
{{$posts->links()}}
@endsection
