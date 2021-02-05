@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <x-post :post="$post" />
</div>

@endsection
