@extends('layouts.app')

@section('content')
<div class="content">
    @php
        $user = \App\Modules\Users\Models\User::find($user_id = \Illuminate\Support\Facades\Auth::user()->id);
        $token = $user->strava->access_token;
        $api = \App\Modules\Strava\Models\StravaApiClient::class;
        $api::setToken($token);
        $polyline = $api::getSegment(1949877)->map;
        pr($polyline);

    @endphp
</div>
@endsection