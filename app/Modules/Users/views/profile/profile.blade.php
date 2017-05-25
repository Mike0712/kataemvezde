@extends('layouts.app')

@php
    $name = explode(' ', $user->name);
    $first_name = $name[0];
    $last_name = $name[1] ?? 'неизвестно';
@endphp

@section('content')
    <div class="container">
        <div class="col-lg-7">
            <h3>Карточка участника<br> {{ $user->name }}</h3>
            <img style="border: 2px solid #ddd; padding: 5px;" src="{{ Resizer::image('/images/users/empty_avatar.jpg')->make(160) }}" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
                {{--Имя--}}
                <div class="form-group">
                    <div class="col-md-12 profile-label">Имя</div>
                    <div class="profile-value">
                        <strong>{{ $user->person->first_name ?? $first_name }}</strong>
                    </div>
                </div>
                {{--Фамилия--}}
                <div class="form-group">
                    <div class="col-md-12 profile-label">Фамилия</div>
                    <div class="profile-value">
                        <strong>{{ $user->person->last_name ?? $last_name }}</strong>
                    </div>
                </div>
                {{--пол--}}
                <div class="form-group">
                    <div class="col-md-12 profile-label">Пол</div>
                    <div class="profile-value">
                        <strong>{{ $user->person->sex ?? 'не указан' }}</strong>
                    </div>
                </div>
            </div>
            <div class="clear sep__1"></div>
            <div class="extra_wrapper">
                {{--Год рождения--}}
                <div class="form-group">
                    <div class="col-md-12 profile-label">Год рождения</div>
                    <div class="profile-value">
                        <strong>{{ isset($user->person->birthday) ? Date::parse($user->person->birthday)->format('Y') : 'не указано' }}</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-4">
            <h3>Аккаунт на Strava</h3>
            <div class="news">
                <time datetime="2014-01-01">14<span>MAR</span></time>
                <div class="extra_wrapper">
                    @if(isset($user->strava->strava_id))
                        <p class="color1"><a target="_blank" href="https://www.strava.com/athletes/{{ $user->strava->strava_id }}">Перейти</a></p>
                    @else
                        <p>Отсутствует</p>
                        <a href="{{route('strava.add')}}" class="btn btn-danger">Привязать аккаунт</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection