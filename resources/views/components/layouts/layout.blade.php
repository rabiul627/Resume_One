<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font awesome link  --}}
    <link rel="stylesheet" href="{{asset('/font awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/font awesome/css/fontawesome.min.css')}}">
    {{-- bootstrap link  --}}
    <link rel="stylesheet" href="{{asset('/bootstrap/bootstrap css and js/css/bootstrap.css')}}">
    {{-- google font link  --}}
    <link href="https://fonts.googleapis.com/css2?family=Mirza:wght@400;500;600;700&family=Satisfy&family=Ubuntu+Sans+Mono:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mirza:wght@400;500;600;700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Satisfy&family=Ubuntu+Sans+Mono:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet"
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    {{-- css link  --}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-sm-2">
                @include('include.sidebar')
            </div>
            <div class="col-sm-10 ">
                @yield('main-content')
            </div>
        </div>
    </div>




    <script src="{{asset('/bootstrap/bootstrap css and js/js/bootstrap.bundle.js')}}}}"> </script>
</body>
</html>