<!DOCTYPE html>
<html>
	<head>

		<title>@yield('title', 'P3')</title>
		<style>

			h1{text-align:center;background-color: rgb(145,198,164); font-family: Arial, Verdana, Sans-serif; }
			h2{text-align:center; font-size:80%; background-color: rgb(145,198,164);font-family: Arial, Verdana, Sans-serif;}
			body{text-align:center;background-color: rgb(145,198,164);font-family: Arial, Verdana, Sans-serif;}
		</style>
		@yield('head')

	</head>

	<body>

		@if(Auth::check())
		    <a href='/logout'>Log out {{ Auth::user()->email; }}</a>
		@else 
		    <a href='/usersignup'>Sign up</a> or <a href='/userlogin'>Log in</a>
		@endif

		@if(Session::get('flash_message'))
        	<div class='flash-message'>{{ Session::get('flash_message') }}</div>
   		@endif

		@yield('content')
	</body>
</html>