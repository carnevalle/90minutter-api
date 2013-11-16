@extends('layouts.scaffold')

@section('main')

<h1>All Players</h1>

<p>{{ link_to_route('api.v1.players.create', 'Add new player') }}</p>

@if ($players->count())
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
			@foreach ($players as $player)
				<tr>
					<td>{{{ $player->firstname }}}</td>
					<td>{{{ $player->lastname }}}</td>
					<td>{{{ $player->nickname }}}</td>
					<td>{{{ $player->birthday }}}</td>
					<td>{{{ $player->height }}}</td>
					<td>{{{ $player->weight }}}</td>
                    <td>{{ link_to_route('api.v1.players.edit', 'Edit', array($player->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('api.v1.players.destroy', $player->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no players
@endif

@stop
