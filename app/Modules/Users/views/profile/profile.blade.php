@extends('layouts.app')

@section('content')
<div class="content">
    @php
        $user = \App\Modules\Users\Models\User::find($user_id = \Illuminate\Support\Facades\Auth::user()->id);
        $token = $user->strava->access_token;
        $api = \App\Modules\Strava\Models\StravaApiClient::class;
        $api::setToken($token);
        pr($api::getAthleteRoutes(9536588));


    @endphp
</div>
@endsection