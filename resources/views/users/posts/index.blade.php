@extends('layouts.app')

@section('content')
@if ($posts->count())
@foreach ($posts as $post)
<x-post :post="$post" />
@endforeach
@endif
@endsection
