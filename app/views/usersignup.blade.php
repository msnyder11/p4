@extends('master')

@section('title')
	User Sign Up
@stop

@section('head')
	
@stop

@section('content')

	<h1>Sign up</h1>

	{{ Form::open(array('url' => '/usersignup')) }}

	    Username<br>
	    {{ Form::text('username') }}<br><br>

	    Password:<br>
	    {{ Form::password('password') }}<br><br>

	    {{ Form::submit('Submit') }}

	{{ Form::close() }}
		
		
@stop