@extends('layouts.app')

@section('content')
<div class="m-4 p-12 bg-white border-rounded">
  <form class="mx-auto max-w-screen-md m-6 border-gray-600 rounded-md" action="{{route('posts')}}" method="post">
    @csrf
    <textarea class="w-full h-48 border-2 border-gray-700 rounded" name="body"></textarea>
    <button class="block my-2 mx-auto py-2 px-6 bg-blue-600 text-white rounded" type="submit">Submit</button>
  </form>
  @foreach($posts as $post)
  <div>{{$post->user->name}}</div>
  <div>{{$post->body}}</div>
  <div>{{$post->created_at->diffForHumans()}}</div>
  @endforeach
  @error('body')
  <p>{{ $message}}</p>
  @enderror
  {{$posts->links()}}
</div>
@endsection
