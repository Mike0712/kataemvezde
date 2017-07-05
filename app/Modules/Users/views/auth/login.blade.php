@extends('layouts.' . $extTpl)

@section('title')
    Форма входа
@endsection

@section('content')

    {{ Form::open(['url' => route('login.submit'), 'class' => 'form-horizontal', 'role' => "form"]) }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">email</label>

            <div class="col-md-6">
                {{ Form::email('email', $old_input['email'], ['id' => 'email','class' => 'form-control', 'required','autofocus']) }}
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
                {{ Form::password('password', ['class' => 'form-control', 'required']) }}


                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        {{ Form::checkbox('remember') }}
                        Запомнить меня
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Войти
                </button>

                <a class="btn btn-link btn_modal" onclick="modal.open('{{ route('password.request') }}')">
                    Забыли пароль?
                </a>
            </div>
        </div>
    {{ Form::close() }}
@endsection

@section('footer')

@stop