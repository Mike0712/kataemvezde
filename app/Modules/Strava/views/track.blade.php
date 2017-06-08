@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Нанесение контрольных точек на трек</div>

                    <div class="panel-body">
                        <div class="col-md-8">
                            <div style="border: 1px solid #ddd; height: 450px; overflow: hidden;">
                                {!! $obj->render() !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::open(['method' => 'get']) !!}
                                {{ Form::text('name', null, ['placeholder' => 'Название контрольной точки']) }}
                                {{ Form::text('kilomeeter', null, ['placeholder' => 'Расстояние от старта км']) }}
                                {{ Form::text('lattitude', null, ['placeholder' => 'Широта', 'id' => 'lattitude', 'readonly']) }}
                                {{ Form::text('longditude', null, ['placeholder' => 'Долгота', 'id' => 'longditude', 'readonly']) }}

                                {{ Form::submit('Сохранить', ['class' => 'btn btn-danger']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection