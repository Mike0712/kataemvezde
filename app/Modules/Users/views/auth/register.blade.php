@extends('layouts.front._modal')

@section('title')
    Регистрация
@endsection

@section('content')
    {{ Form::open(['url' => route('register.post'), 'class' => 'form-horizontal']) }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label for="name" class="col-md-4 control-label">Имя</label>

            <div class="col-md-6">
                {{ Form::text('name', $old_input['name'], ['id' => 'name', 'class' => 'form-control', 'required', 'autofocus']) }}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                {{ Form::email('email', $old_input['email'], ['id' => 'email', 'class' => 'form-control', 'required']) }}

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Пароль</label>

            <div class="col-md-6">
                {{ Form::password('password', ['id' => 'password', 'class' => 'form-control', 'required']) }}

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Повторить пароль</label>

            <div class="col-md-6">
                {{ Form::password('password_confirmation', ['id' => 'password-confirm','class' => 'form-control', 'required']) }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Зарегистрировать
                </button>
            </div>
        </div>
    {{ Form::close() }}

@endsection
