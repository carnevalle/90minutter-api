@extends('layouts.scaffold')

@section('main')

<h1>Edit Tweet</h1>
{{ Form::model($tweet, array('method' => 'PATCH', 'route' => array('tweets.update', $tweet->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('tweets.show', 'Cancel', $tweet->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
