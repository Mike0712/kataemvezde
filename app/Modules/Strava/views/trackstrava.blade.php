@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавление трека</div>

                    <div class="panel-body">
                        <div class="col-md-8">
                            <div style="border: 1px solid #ddd; height: 450px; overflow: hidden;">
                                {!! $obj->render() !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::open(['route' => 'tracks.add']) !!}
                            <div class="form-group">
                                {{ Form::label('title', 'Название трека', ['class' => 'control-label']) }}
                                <br>
                                {{ Form::text('title', null, []) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('distance', 'Дистанция', ['class' => 'control-label']) }}
                                <br>
                                {{ Form::text('distance', null, []) }}
                            </div>
                                {{ Form::hidden('polyline', null, ['id' => 'json_polyline']) }}
                                {{ Form::submit('Сохранить', ['class' => 'btn btn-danger']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection