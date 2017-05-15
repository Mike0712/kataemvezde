<div class="strava_oauth_cont">
    {{ Form::open(['class' => 'strava_oauth_form', 'method' => 'get']) }}
        {{ Form::hidden('client_id', env('STRAVA_CLIENT_ID', null)) }}
        {{ Form::hidden('response_type', 'code') }}
        {{ Form::hidden('redirect_uri', env('APP_URL') . 'strava_auth') }}
        {{ Form::hidden('scope', null) }}
        {{ Form::hidden('state', 'mystate') }}
        {{ Form::hidden('approval_prompt', 'force') }}
        {{ Form::close() }}
    <button class="{{ $class_btn }}" title="Регистрация с помощью Strava"></button>
</div>