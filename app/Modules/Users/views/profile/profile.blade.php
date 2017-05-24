@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-7">
            <h3>Карточка участника<br> {{ $user->name }}</h3>
            <img style="border: 2px solid #ddd; padding: 5px;" src="{{ Resizer::image('/images/users/empty_avatar.jpg')->make(180) }}" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
                <p>Follow the link to learn more about this <span class="color1"><a
                                href="http://blog.templatemonster.com/free-website-templates/"
                                rel="nofollow">free theme</a></span> produced by TemplateMonster. </p>
                <p>More <span class="color1"><a href="http://www.templatemonster.com/properties/topic/society-people/"
                                                rel="nofollow">themes of this kind</a></span> are to be found at
                    TemplateMonster’s website</p>
                Vivamus at magna non nunc tristique rhoncuseri tym.
            </div>
            <div class="clear sep__1"></div>
            Gamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re
            luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla
            ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est
            vel, commodo venenatis eros.
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-4">
            <h3>Latest News</h3>
            <div class="news">
                <time datetime="2014-01-01">14<span>MAR</span></time>
                <div class="extra_wrapper">
                    <p class="color1"><a href="#">Magna non nunc tristique rhoncuseri </a></p>
                    Aliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibuste.
                </div>
            </div>
            <div class="news">
                <time datetime="2014-01-01">28<span>MAR</span></time>
                <div class="extra_wrapper">
                    <p class="color1"><a href="#">Tagna non nunc tristique rhoncuserr </a></p>
                    Boliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibustew.
                </div>
            </div>
        </div>
    </div>
@endsection