@extends('master')

@section('title')
	P4
@stop

@section('head')

	
@stop

@section('content')
	<br>


	<a href='/'> Home       </a>
	<a href='/yourscores'> Your Scores</a>

	
	<br>
	<br>

	<a> Leaderboard </a>
	<table align="center">
		<tr>
				<th> Username</th>
				<th> Score </th>
		</tr>
		@foreach($leaderboard as $num)
		
			@foreach($num->user as $user)
				<tr>
					<td>{{ $user->username }}</td>
					<td>{{ $num->score }}<td>
				</tr>

			@endforeach
			
		
		@endforeach
	</table>
@stop