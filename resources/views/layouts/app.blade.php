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

<body>
  <nav style="box-shadow:0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06); "
    class="p-6 bg-white flex justify-between">
    <ul class="flex items-center">
      <li class="m-3 text-gray-700">
        <a href="">Home</a>
      </li>
      <li class="m-3 text-gray-700">
        <a href="/dashboard">Dashboard</a>
      </li>
      <li class="m-3 text-gray-700">
        <a href="/posts">Posts</a>
    </ul>
    <ul class="flex items-center">
      @auth
      <li class="m-3 text-gray-700">
        <a href="">{{auth()->user()->name}}</a>
      </li>
      <li class="m-3 text-gray-700">
        <form action="{{route('logout')}}" method="post">
          @csrf
          <button>Logout</button>
        </form>
      </li>
      @endauth
      @guest
      <li class="m-3 text-gray-700">
        <a href="/login">Login</a>
      </li>
      <li class="m-3 text-gray-700">
        <a href="/register">Register</a>
      </li>
      @endguest
    </ul>
  </nav>
  <div class="m-12">

    @yield('content')
  </div>
</body>

</html>
