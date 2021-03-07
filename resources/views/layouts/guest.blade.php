<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- favicon -->
  <link rel="icon" href="{{asset('img/logo.ico')}}">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />


</head>

<body>
  <div class="wrapper">
    @yield('navbar-top')

    @yield('navbar-bottom')

    @yield('jumbotron')


    @yield('content')


    @yield('footer')

  </div>

<!-- Carousel Script -->
  <script>
    document.getElementById("slide_right").addEventListener("click", scrollRight);


    function scrollRight() {

      let slider = document.getElementById("carousel");

      let i = 10;
      let int = setInterval(function() {

        slider.scroll(i, 0);

        i += 10;

        if (i == 1920) clearInterval(int);

      }, 15);


    }

    document.getElementById("slide_left").addEventListener("click", scrollLeft);

    function scrollLeft() {
      let slider = document.getElementById("carousel");

      console.log('ciao');

      slider.scroll(-1920, 0);

    }
  </script>
</body>

</html>