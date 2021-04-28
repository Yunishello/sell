<style>
    /* .div {
        margin: 5px;
    }
    @media (max-width: 460px) {
        .div {
        margin-left: 30%;
    }
    } */
</style>

{{-- <!doctype html>
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
</head>
<body> --}}

    @include('layouts.header')
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <div id="app">
        <div class="header">
            <div class="container">
                <div class="logo col-md-3">
                    <a href="/"><span>Sell</span>padi</a>
                </div>
                <div class="col-md-6">
                    <form action="/search" method="POST" class="form-group">
                        @csrf
                        <input type="text" name="search" class="form-control" placeholder="Search" style="margin-top: 20px;">
                    {{-- <a class="account" href="/post"><span class="glyphicon glyphicon-search"></span></a> --}}
                    </form>
                </div>
                @auth
                <div class="col-md-3">
					<a href="#"><span class="glyphicon glyphicon-user" style="margin-top: 20px; display:inline-block;"></span></a>
					<div class="dropdown" style=" display:inline-block; margin-top: 25px;">
						<button style="background-color: transparent; border:none;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							
						<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="/profile">Profile</a></li>
						<li><a href="/settings">Settings</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="logout">Logout</a></li>
						</ul>
					</div>
				</div>
                <div class="col-md-1">
                    <a class="account" href="/post">Sell</a>
                </div>
                @else
                <div class="col-md-3" style="display:inline">
                    <div style="display:inline-block;">
                        <a class="btn btn-primary account-a" href="/register">Sign Up</a>
                        <a class="btn btn-primary account" href="/signin">Login</a>
                    </div>
                </div>
                @endauth
            </div>
            </div>
        </div>
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        </nav> --}}
        @include('layouts.messages')
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>
