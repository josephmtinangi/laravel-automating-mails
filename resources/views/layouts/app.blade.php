<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .jumbotron {
            background-color: #2e2e2e;
        }

        .features {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .feature {
            background-color: #1d1d1d;
            width: 100%;
            height: 400px;
            margin-bottom: 30px;
            border-radius: 4px;
        }

        footer {
            padding-top: 50px;
            padding-bottom: 50px;
            background-color: #1e1e1e;
        }
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('newsletter-subscribers.index') }}">Subscribers</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
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

    @if (session('message'))
        <p class="alert alert-success">{{ session('message') }}</p>
    @endif

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <h3 class="text-center">Subscribe for Weekly Newsletters</h3>

                @if($errors->count())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-success">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                <div class="col-sm-4 col-sm-offset-4">
                    <form method="POST" action="{{ route('newsletter-subscribers.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>

                        <button type="submit" class="btn btn-info btn-block">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
