@extends('layouts.app')

@section('content')
@if ($posts->count())
<div>
    <h1>{{$user->name}}</h1>
    <p>Has posted {{$posts->count()}} {{Str::plural('post', $posts->count())}} and received
        {{$user->likesRecieved->count()}} {{Str::plural('like', $user->likesRecieved->count())}}
    </p>
</div>

@foreach ($posts as $post)
<x-post :post="$post" />
@endforeach
{{$posts->links()}}
@endif
@endsection
