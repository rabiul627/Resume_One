<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>@yield('title')</title>
      {{-- css link ___ --}}
      <link rel="stylesheet" href="css/style.css">
      {{-- Bootstrap_link --- --}}
       <link rel="stylesheet" href="{{asset('/bootstrap/bootstrap css and js/css/bootstrap.css')}}">
       {{-- font awesome link __ --}}
       <link rel="stylesheet" href="/font awesome/css/all.min.css">
       <link rel="stylesheet" href="/font awesome/css/fontawesome.min.css">
    <body>
        @yield('content')
        <script src="{{asset('/bootstrap/bootstrap css and js/js/bootstrap.bundle.js')}}">
        </script>
    </body>
</html>