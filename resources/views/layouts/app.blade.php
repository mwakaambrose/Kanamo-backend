<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" id="csrf_token" content="{{ csrf_token() }}">
    <meta name="api-token" id="api-token" content= "@if(Auth::check()) {{ Auth::user()->api_token }} @endif">

    <title> @yield('title') | {{ config('app.name', 'Kanamo') }}</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>

<body id="backtotop">
    <div id="app">

        <nav class="navbar navbar-default navbar-static-top topnav">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand text-uppercase" href="{{ url('/') }}">
                        <span class="kanamo-brand">Kanamo</span>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li>
                                <a class="kanamo-nav" href="{{ route('login') }}">Sign In <i class="fa fa-sign-in fa-fw"></i></a>
                            </li>
                            <li>
                                <a class="kanamo-nav" href="{{ route('register') }}">Register </a>
                            </li>
                        @else
                            <li ><a href="/home"><span class="kanamo-nav">Dashboard</span></a></li>
                            <li ><a href="/events"><span class="kanamo-nav">Events</span></a></li>
                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user-circle fa-fw kanamo-nav"></i> <span class="kanamo-nav">{{ Auth::user()->first_name }}</span><span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBchnQ__jg6xsIVnuEgYH7M0t0q7TX6H9I&callback=initMap"
  type="text/javascript"></script>
</body>
</html>
