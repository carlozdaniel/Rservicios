<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/not_correos/style.css') }}">
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

    @yield('links')

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand" style="color: #fff; font-size: 15px;" href="{{  route('principal') }}">RServicio.MX</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        @guest
        @else
          @if (auth()->user()->hasRole('arrendatario'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle jsdropdown focus" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">
                Servicios
              </a>
            <div class="dropdown-menu navbar-light bg-light" aria-labelledby="navbarDropdownMenuLink">
                    <a class="nav-link" style="color: #000;" href="{{ route('registro_s.index') }}">{{ __('Servicios') }}</a>
            </div>
          @endif
        @endguest
      </li>

      <!--<li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>-->

    </ul>

    @guest
      @else
      @if (auth()->user()->hasRole('cliente'))
       <li class="nav-item dropdown focus navbar-left" style="list-style:none">
            <a class="nav-link focus" href="#" style="color: #fff; font-size: 19px;">
            <i class="icon-clipboard-edit"></i>
          </a>
        </li>
      @endif
    @endguest

    <li class="nav-item dropdown focus navbar-left" style="list-style:none">
      <a class="nav-link focus" href="#" style="color: #fff; font-size: 19px;">
          <i class="icon-bell"></i>
        </a>
    </li>

    <li class="nav-item dropdown focus navbar-left" style="list-style:none">

        <a class="nav-link dropdown-toggle jsdropdown focus" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">
          Usuario
        </a>

        <div class="dropdown-menu navbar-light bg-light" aria-labelledby="navbarDropdownMenuLink">

          @guest
            <a class="nav-item nav-link" style="color: #000;" href="{{ route('login') }}">{{ __('Inicio') }}</a>
            <a class="nav-link nav-item" style="color: #000;" href="{{ route('registro.index') }}">{{ __('Registro') }}</a>
          @else
            @if (auth()->user()->hasRole('arrendatario') or auth()->user()->hasRole('cliente'))
              <a class="nav-link col-md-12 col-sm-12 col-xs-12" style="border: 0px solid red; border-radius: 3px; justify-content: center; align-content: center; text-align: center; color: #000;" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Salir') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            @endif
          @endguest

        </div>

      </li>
  </div>
</nav>

  @yield('content')
    <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('ul.navbar-nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
        }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
        });  
    });
  </script>
  <style type="text/css">
    .focus:hover{background-color: #0000FF; color: #000; border-radius: 8px;}
  </style>
  <style type="text/css">
    .dropdown-item:hover{background-color: #807F7F;}
  </style>
</body>
</html>