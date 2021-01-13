<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel app</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
  <nav class="p-6 bg-white flex justify-between">
    <ul class="flex items-center">
      <li class="m-3">
        <a href="">Home</a>
      </li>
      <li class="m-3">
        <a href="">Dashboard</a>
      </li>
      <li class="m-3">
        <a href="">Post</a>
    </ul>
    <ul class="flex items-center">
      @auth
      <li class="m-3">
        <a href="">{{auth()->user()->name}}</a>
      </li>
      <li class="m-3">
        <form action="{{route('logout')}}" method="post">
          @csrf
         <button>Logout</button>
        </form>
      </li>
      @endauth
      @guest
      <li class="m-3">
        <a href="/login">Login</a>
      </li>
      <li class="m-3">
        <a href="/register">Register</a>
      </li>
      @endguest
    </ul>
  </nav>
  @yield('content')
</body>
</html>
