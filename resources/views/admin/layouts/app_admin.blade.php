<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="../../images/footer-logo.png" type="image/png">
    {{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>Институт им. М. Ауэзова</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
{{--            <a class="navbar-brand" href="{{ url('/admin') }}">Admin--}}
{{--                {{ config('app.name', 'Laravel') }}--}}
{{--            </a>--}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->

                <ul class="navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="nav-link " data-toggle="dropdown"
                        role="button" aria-expanded="false">Меню</a>
                        <ul class="dropdown-menu admin__panel" role="menu">
                            <li><a class="dropdown-item" href="{{route('admin.banners.index')}}">Баннер</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.books.index')}}">Книги</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.articles.index')}}">Новости</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.insts.index')}}">Институт</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.cultures.index')}}">Культурное наследие</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.departments.index')}}">Отделы института</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.directors.index')}}">Администрация института</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.user_managment.user.index')}}">Управление пользователями</a></li>
{{--                            <li><a class="dropdown-item" href="{{route('admin.category.index')}}">Категории</a></li>--}}
                            <li><a class="dropdown-item" href="{{url('/')}}">Назад к сайту</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <a href="{{url('/admin')}}" class="nav-link"
                       role="button" aria-expanded="false">Панель состояния</a>
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
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        @yield('content')
    </main>
    <script></script>
</div>
</body>
</html>
