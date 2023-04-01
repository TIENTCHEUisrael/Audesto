<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Headers - 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{!! url('assets/css/header/reset.min.css') !!}" />
    <link rel="stylesheet" href="{!! url('assets/css/header/style.css') !!}styles/style.css" />
    <link rel="stylesheet" href="{!! url('assets/css/header/header-1.css') !!}" />
  </head>
  <body>
    <!-- Header Start -->
    <header class="site-header">
      <div class="wrapper site-header__wrapper">
        <a href="#" class="brand">Brand</a>
        <nav class="nav">
          <button class="nav__toggle" aria-expanded="false" type="button">
            menu
          </button>
          <ul class="nav__wrapper">
            <li class="nav__item"><a href="{{ route('home.welcome') }}">Home</a></li>
            <li class="nav__item"><a href="#">About</a></li>
            <li class="nav__item"><a href="#">Services</a></li>
            @auth
        {{!auth()->user()->name}}
        <li class="nav__item"><a href="{{ route('login.perform') }}">Se Connecter</a></li>
      @endauth
            @auth
        {{auth()->user()->name}}
        <li class="nav__item"><a href="{{ route('logout.perform') }}">Logout</a></li>
      @endauth
          </ul>
        </nav>
      </div>
    </header>
    <!-- Header End -->

    <script src="{!! url('assets/js/header-1.js') !!}"></script>
  </body>
</html>
