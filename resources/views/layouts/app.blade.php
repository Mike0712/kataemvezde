<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--<link href="{{ uncache('css/app.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ uncache('css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <link href="{{ uncache('css_js/styles.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script type="text/javascript" src="{{ asset('/js/jquery.js') }}"></script>
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false">Организатору
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <br>
                                <a href="/vasya">
                                    Создать старт
                                </a>
                                <hr>
                                <a href="/vasya">
                                    Ваши старты
                                </a>
                                <br>
                             </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">Старты
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <br>
                                <a href="/vasya">
                                    Запланированные старты
                                </a>
                                <hr>
                                <a href="/vasya">
                                    Прошедшие старты
                                </a>
                                <hr>
                                <a href="/vasya">
                                    С вашим участием
                                </a>
                                <br>
                            </li>
                        </ul>
                    </li>
                    <li><a href="/athlets">Участники</a></li>
                    <li><a href="/clubs">Клубы</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a class="btn_modal" onclick="modal.open('{{ route('login') }}')">Вход</a></li>
                        <li><a class="btn_modal" onclick="modal.open('{{ route('register') }}')">Регистрация</a></li>
                        <li>
                            <div class="strava_oauth_cont">
                                <a href="{{ \App\Modules\Strava\Models\StravaApiClient::getOAthUrl(route('strava.oauth')) }}"
                                   class="small" title="Регистрация с помощью Strava"></a>
                            </div>
                        </li>
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
                                        Выйти
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('profile') }}" title="Профиль">
                                <img src="{{ Resizer::image('/images/users/empty_avatar.jpg')->make(15) }}">
                            </a>
                        </li>
                    @endif
                </ul>
             </div>
        </div>
    </nav>




    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset(uncache('js/app.js')) }}"></script>
<script src="{{ asset(uncache('js/modal.js')) }}"></script>

</body>
</html>
