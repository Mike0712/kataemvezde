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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection