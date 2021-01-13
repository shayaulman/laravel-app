@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="flex items-center h-screen w-full bg-teal-lighter">
      <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
        <h1 class="block w-full text-center text-gray-700 mb-6">Sign In</h1>
        <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="{{route('login')}}" method="post">
          @csrf
          <div class="flex flex-col mb-4 md:w-full">
            <label class="mb-2 font-bold text-md text-gray-500" for="email">Email</label>
            <input class="border py-2 px-3 text-gray-500" type="email" name="email" id="email">
          </div>
          <div class="flex flex-col mb-6 md:w-full">
            <label class="mb-2  font-bold text-md text-gray-500" for="password">Password</label>
            <input class="border py-2 px-3 text-gray-500" type="password" name="password" id="password">
          </div>
          <button class="block bg-teal hover:bg-teal-dark uppercase text-md mx-auto p-4 rounded" type="submit">Sign in</button>
          <div class="flex items-center">
            <input  class="mr-2" type="checkbox" name="remember" id="">
            <label for="remember">Remember me</label>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection
