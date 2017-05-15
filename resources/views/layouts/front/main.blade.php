<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Марафон') }}</title>
    <!-- Bootstrap css-->
    <link href="{{ uncache('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ uncache('/css/app.css') }}" rel="stylesheet">
    <link href="{{ uncache('/css/countdown.css') }}" rel="stylesheet">
    <link href="{{ uncache('/css/style_common.css') }}" rel="stylesheet">
    <link href="{{ uncache('/css/style4.css') }}" rel="stylesheet">
    <link href="{{ uncache('/css/camera.css') }}" rel="stylesheet">
    <link href="{{ uncache('/css/style.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    {{--<script type="text/javascript"
            src="http://gc.kis.scr.kaspersky-labs.com/1692135F-25C7-0A4C-B01F-A8D0A4A73531/main.js"
            charset="UTF-8"></script>--}}
    <script src="{{ uncache('/js/jquery.js') }}"></script>
    {{--<script src="/js/jquery-migrate-1.2.1.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/superfish.js"></script>
    <script src="/js/jquery.ui.totop.js"></script>
    <script src="/js/jquery.equalheights.js"></script>
    <script src="/js/jquery.mobilemenu.js"></script>
    <script src="/js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="/js/jquery.mobile.customized.min.js"></script>--}}
    <!--<![endif]-->
    {{--<script>
        $(document).ready(function () {
            jQuery('#camera_wrap').camera({
                loader: false,
                pagination: false,
                minHeight: '444',
                thumbnails: false,
                height: '27.86458333333333%',
                caption: true,
                navigation: true,
                fx: 'simpleFade'
            });
            $().UItoTop({easingType: 'easeOutQuart'});
        });
    </script>--}}
</head>
<body>
<div class="app main">
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
                    {{--{{ config('app.name', 'Laravel') }}--}}
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
                        <li><a href="{{ url('/login') }}">Вход</a></li>
                        <li><a href="{{ url('/register') }}">Регистрация</a></li>
                        <li><div class="strava_oauth_cont">
                                <a href="{{ \App\Modules\Strava\Models\Strava::getOAthUrl(route('strava.oauth')) }}" class="small" title="Регистрация с помощью Strava"></a>
                            </div></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Выйти
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
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
    <!-- container -->
    <!-- header section -->
    <header>
        <div class="col-sm-12">
            <div class="col-sm-12">
                <div class="socials">
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
                <h1>
                    <a href="index.html">
                        <img src="/images/logo.png" alt="Your Happy Family">
                    </a>
                </h1>
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="collapse navbar-collapse menu_block" id="app-navbar-collapse">
                            <ul class="sf-menu nav navbar-nav">
                                <li><a href="/">Главная</a></li>
                                <li><a href="/about">О проекте</a></li>
                                <li><a href="/calendar">Календарь</a></li>
                                <li><a href="/athlets">Участники</a></li>
                                <li><a href="/clubs">Клубы</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    @yield('content')
</div>

<!-- Scripts -->
{{--<script src="/js/jquery.countdown.js"></script>
<script src="/js/cd_config.js"></script>
<script src="/js/modernizr.custom.69142.js"></script>
<script type="text/javascript">
    Modernizr.load({
        test: Modernizr.csstransforms3d && Modernizr.csstransitions,
        yep: ['http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', '/js/jquery.hoverfold.js'],
        nope: 'css/fallback.css',
        callback: function (url, result, key) {
            if (url === '/js/jquery.hoverfold.js') {
                $('#grid').hoverfold();
            }
        }
    });
</script>--}}
<script src="{{ uncache('/js/bootstrap.min.js') }}"></script>
<script src="{{ uncache('/js/app.js') }}"></script>
</body>
</html>
