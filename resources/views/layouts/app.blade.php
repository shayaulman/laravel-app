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
      <li class="m-3">
        <a href="">Name</a>
      </li>
      <li class="m-3">
        <a href="">Login</a>
      </li>
      <li class="m-3">
        <a href="">Logout</a>
    </ul>
  </nav>
  @yield('content')
</body>
</html>
