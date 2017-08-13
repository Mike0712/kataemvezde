@if($name == 'sex')
{{ Form::select($name, ['male' => 'мужской', 'female' => 'женский'], $person->$name ?? null, ['class' => 'field']) }}
@elseif($name == 'birthday')

@else
{{ Form::text($name, $person->$name ?? null, ['class' => 'field']) }}
@endif