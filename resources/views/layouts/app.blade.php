<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NIT-C Complaints</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>NIT-C Complaints</h1>
        <span class="nav">
            @guest
                    <i class="fas fa-sign-in-alt"></i>&nbsp;
                    <a href="{{ url('/redirect') }}">{{ __('Login') }}</a>
            @else

            <i class="fas fa-hand-paper"></i>&nbsp;
            <a href="/new">Raise Complaint</a>
            &nbsp;&nbsp;
            <i class="fas fa-user-circle"></i>
        

                    <a href="#" >
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                        &nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
             
              
            @endguest
        </span>
    </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
