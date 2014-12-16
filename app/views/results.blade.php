@extends('master')

@section('title')
	P4
@stop

@section('head')
	
@stop

@section('content')
	<br>
	@foreach($leaderboard as $num)
		{{ $num->user()->username }}
		{{ $num->score }}
		<br>
	@endforeach
	
@stop