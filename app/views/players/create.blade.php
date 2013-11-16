@extends('layouts.scaffold')

@section('main')

<h1>Create Player</h1>

{{ Form::open(array('route' => 'api.v1.players.store')) }}
	<ul>
        <li>
            {{ Form::label('firstname', 'Firstname:') }}
            {{ Form::text('firstname') }}
        </li>

        <li>
            {{ Form::label('lastname', 'Lastname:') }}
            {{ Form::text('lastname') }}
        </li>

        <li>
            {{ Form::label('nickname', 'Nickname:') }}
            {{ Form::text('nickname') }}
        </li>

        <li>
            {{ Form::label('birthday', 'Birthday:') }}
            {{ Form::text('birthday') }}
        </li>

        <li>
            {{ Form::label('height', 'Height:') }}
            {{ Form::input('number', 'height') }}
        </li>

        <li>
            {{ Form::label('weight', 'Weight:') }}
            {{ Form::input('number', 'weight') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


