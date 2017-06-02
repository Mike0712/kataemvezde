@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-9 col-md-offset-2">
            <h3>Мои маршруты на Strava</h3>

            @foreach($api as $item)
                <div class="news">
                    <time>{{ round($item->distance / 1000, 1) }}<span>Km</span></time>
                    <div class="extra_wrapper col-md-6">
                        <p class="color1"><a href="{{ url('https://www.strava.com/routes/' . $item->id) }}" target="_blank">{{ $item->name }}</a></p>
                        <span>Набор высоты: <strong>{{ round($item->elevation_gain, 0)  }}</strong> m</span>
                        <span>Примерное время: <strong>{{ round($item->estimated_moving_time / 60, 2)  }}</strong></span>
                    </div>

                    <div class="col-md-3">
                        <a href="{{ url('/track/strava/' . $item->id)}}" class="btn btn-info">Выбрать</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="clear"></div>
    </div>
@endsection