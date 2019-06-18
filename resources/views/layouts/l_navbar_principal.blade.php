<!DOCTYPE html>
<html lang="en">
<head>
  <title>RServicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{  route('principal') }}">RServicio</a>
    </div>
    <ul class="nav navbar-nav">

      <li class="dropdown"><!-- link -->
        <ul class="dropdown-menu">
          <!-- link <i> -->
        </ul>
      </li>

    </ul>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
          @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('registro.index') }}">{{ __('Registro') }}</a>
            </li>
           @else
            <li class="nav-item dropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Salir') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </li>
          @endguest
        </ul>
    </div>
</div>
</nav>


</head>
<body>
    <div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>