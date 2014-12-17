@extends('master')

@section('title')
	P4
@stop

@section('head')
	
@stop

@section('content')
	@if(Auth::check())
		<br>
		
		<a href='/leaderboard'> Leaderboard</a>
		<a style="padding-left:20px" href='/yourscores'> Your Scores</a>
		
		<br>

		<object width="800" height="400" data="p4.swf" align="middle"></object>
	@endif
	
@stop