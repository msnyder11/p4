@extends('master')

@section('title')
	P4
@stop

@section('head')
	
@stop

@section('content')
	@if(Auth::check())
		<br>

		<object width="800" height="400" data="p4.swf" align="middle"></object>
	@endif
	
@stop