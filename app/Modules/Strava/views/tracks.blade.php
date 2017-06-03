@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-9 col-md-offset-2">
            @if($tracks['user'])
                <h3>Ваши маршруты</h3>

                @forelse($tracks['user'] as $item)
                    <div class="news">
                        <time>{{ round($item->distance) }}<span>Km</span></time>
                        <div class="extra_wrapper col-md-6">
                            <p class="color1">{{ $item->title }}</p>
                        </div>

                        <div class="col-md-3">
                            <a href="{{ url('/track/' . $item->id)}}" class="btn btn-info">Выбрать</a>
                        </div>
                    </div>
                @empty
                    <p>У вас нет сохраненных треков</p>
                @endforelse
            @endif
        </div>
        <div class="clear"></div>
        <div class="col-lg-9 col-md-offset-2">
            <h3>Все маршруты</h3>

            @foreach($tracks['all'] as $item)
                <div class="news">
                    <time>{{ round($item->distance) }}<span>Km</span></time>
                    <div class="extra_wrapper col-md-6">
                        <p class="color1">{{ $item->title }}</p>
                    </div>

                    <div class="col-md-3">
                        <a href="{{ url('/track/' . $item->id)}}" class="btn btn-info">Выбрать</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="clear"></div>
    </div>
@endsection