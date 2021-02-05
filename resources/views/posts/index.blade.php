@extends('layouts.app')

@section('content')
<form class="my-12 mx-auto w-96 rounded-md" action="{{route('posts')}}" method="post">
    @csrf
    <textarea class="w-full h-48 border border-gray-200 rounded-md" name="body"></textarea>
    <button class="block ml-auto my-2 py-2 px-6 bg-blue-600 text-white rounded" type="submit">Submit</button>
</form>
<div class="m-8 grid grid-cols-3 gap-6">
    @foreach($posts as $post)
    <x-post :post="$post" />
    @endforeach
    {{$posts->links()}}
</div>
@error('body')
<p>{{ $message}}</p>
@enderror
{{$posts->links()}}
@endsection
