<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <title>@lang('Laravel')</title>

    <!-- CSS And JavaScript -->
{{--    <script src="bower_components/jquery/dist/jquery.min.js"></script>--}}
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.bundle.js')}}"></script>
    <link href ="{{asset('bower_components/bootstrap/dist/css/bootstrap-grid.min.css')}}" rel="stylesheet">
    <link href ="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/fontawesome/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/fontawesome/css/brands.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/fontawesome/css/solid.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}">
</head>

<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">@lang('auth.login')</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">@lang('auth.reg')</a>
                        </li>
                    @endif
                @else
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-item" id="demo">
                                @lang('auth.logout')
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</div>

@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
