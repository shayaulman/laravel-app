@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="flex items-center h-screen w-full bg-teal-lighter">
      <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
        <h1 class="block w-full text-center text-grey-darkest mb-6">Sign Up</h1>
        <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="{{route('register')}}" method="post">
          @csrf
          <div class="flex flex-col mb-4 md:w-1/2">
            <label class="mb-2 uppercase tracking-wide font-bold text-lg text-grey-darkest" for="name">Name</label>
            <input class="border py-2 px-3 text-grey-darkest md:mr-2 @error('name') border-red-500 @enderror" type="text" name="name" id="name" value={{old('name')}}>
            @error('name')
              <p>{{ $message}}</p>
            @enderror
          </div>
          <div class="flex flex-col mb-4 md:w-1/2">
            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest md:ml-2" for="username">User Name</label>
            <input class="border py-2 px-3 text-grey-darkest md:ml-2" type="text" name="username" id="username">
          </div>
          <div class="flex flex-col mb-4 md:w-full">
            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="email">Email</label>
            <input class="border py-2 px-3 text-grey-darkest" type="email" name="email" id="email">
          </div>
          <div class="flex flex-col mb-6 md:w-full">
            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="password">Password</label>
            <input class="border py-2 px-3 text-grey-darkest" type="password" name="password" id="password">
          </div>
          <div class="flex flex-col mb-6 md:w-full">
            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="password">Password</label>
            <input class="border py-2 px-3 text-grey-darkest" type="password" name="password_confirmation" id="password_confirmation">
          </div>
          <button class="block bg-teal hover:bg-teal-dark uppercase text-lg mx-auto p-4 rounded" type="submit">Register </button>
        </form>
      </div>
    </div>
</div>
@endsection
