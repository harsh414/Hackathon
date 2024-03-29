<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/sidenavmy.css">
    @yield('style')
<style>
    nav{
        background-image: linear-gradient(to right,#000000,#434343);
    }
</style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="home">
                    <img src="images/covidlogo.png" alt="" style="
                    width:70px;
                    height:70px;
                    border:2px solid dimgrey;
                    border-radius: 9999px;
                        ">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color:antiquewhite" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div id="sidenav">
                <div class="toogle-btn" onclick="tooglesidebar()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul>
                    <div class="conta">
                        <div>
                            <li><a class="{{ Request::path() == 'home' ? 'aactive' : 'asimple' }}" href="home">Home</a></li>
                        </div>
                        <div>
                            <li><a class="{{ Request::path() == 'about' ? 'aactive' : 'asimple' }}" href="about">About COVID-19</a></li>
                        </div>
                        <div>
                            <li><a class="{{ Request::path() == 'aim' ? 'aactive' : 'asimple' }}" href="aim">Our Aim</a></li>
                        </div>
                        <div>
                            <li><a class="{{ Request::path() == 'apply' ? 'aactive' : 'asimple' }}" href="apply">Apply</a></li>
                        </div>
                        <div>
                            <li><a class="{{ Request::path() == 'applications' ? 'aactive' : 'asimple' }}" href="applications">My Application</a></li>
                        </div>

                    </div>

                </ul>

            </div>
            <script type="text/javascript">
                function tooglesidebar(){
                    document.getElementById("sidenav").classList.toggle('active');
                }
            </script>
            @include('inc.messages')
            @yield('content')
        </main>
    </div>
</body>
</html>
