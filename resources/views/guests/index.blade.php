<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boolpress</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Open Sans', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
          <div class="top-right links">
            @auth
              <a href="{{ route('admin.index') }}">Home</a>
            @else
              <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
              <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
          </div>
        @endif
        <div class="content">
          <div class="title m-b-md">Boolpress</div>
            <div class="links">
              <a href="{{route('posts.index')}}"><button class="btn btn-primary">Scopri gli articoli</button></a>
            </div>
        </div>
      </div>
    </body>
</html>
