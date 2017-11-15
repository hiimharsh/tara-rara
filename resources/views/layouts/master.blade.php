<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Blog Website</title>
  <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
  @include('partials.nav')

  <div class="container margin-top">
    @yield('content')
  </div>
</body>
</html>