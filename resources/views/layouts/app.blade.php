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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="/css/aboutus.css" rel="stylesheet">
    <link href="/css/reviews.css" rel="stylesheet">
    <link href="/css/event.css" rel="stylesheet">
    <link href="/css/contactus.css" rel="stylesheet">
    <link href="/css/login.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    
<style>
/* Set the width and height of the scrollbar */
::-webkit-scrollbar {
  width: 6px;
  height: 6px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 3px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

.btn{ 

    background:#000;
}
</style>

</head>
<body>
   
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">

                <a class="navbar-brand fw-bold " href="#">
                    <img src="img/logo.png" href="{{ url('/') }}" height="50">
                    EventHive
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="navbar-nav ms-auto column align-items-center gap-5 fw-semibold">
                        
                        <li class="nav-item "><a href="/" class="nav-link {{request()->is('/') ? 'active' : ''}}">Home</a></li>
                        <li class="nav-item "><a href="/events" class="nav-link {{request()->is('events') ? 'active' : ''}}">Events</a></li>
                  
                      
                        <li class="nav-item "><a href="/aboutus" class="nav-link {{request()->is('aboutus') ? 'active' : ''}}">About Us</a></li>
                        <li class="nav-item "><a href="/contactus" class="nav-link {{request()->is('contactus') ? 'active' : ''}}">Contact Us</a></li>

                    </ul>
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto gap-2  ">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            
                            <button type="button" class="btn btn-dark rounded-pill">
                                    <a class="nav-link text-white text-capitalize" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </button>
                           
                            @endif
                                
                            @if (Route::has('register'))
                                <button type="button" class="btn btn-dark rounded-pill">
                                    <a class="nav-link text-white text-capitalize" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </button>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main >
            @yield('content')
        </main>
    </div>
</body>
</html>
