@extends('layouts.scaffold')

@section('main')

<h1>All Tweets</h1>

<p>{{ link_to_route('tweets.create', 'Add new tweet') }}</p>

@if ($tweets->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Nickname</th>
				<th>Birthday</th>
				<th>Height</th>
				<th>Weight</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($tweets as $tweet)
				<tr>
					<td>{{{ $tweet->firstname }}}</td>
					<td>{{{ $tweet->lastname }}}</td>
					<td>{{{ $tweet->nickname }}}</td>
					<td>{{{ $tweet->birthday }}}</td>
					<td>{{{ $tweet->height }}}</td>
					<td>{{{ $tweet->weight }}}</td>
                    <td>{{ link_to_route('tweets.edit', 'Edit', array($tweet->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('tweets.destroy', $tweet->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no tweets
@endif

@stop
