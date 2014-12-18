<!DOCTYPE html>
<html>
	<head>

		<title>@yield('title', 'P4')</title>
		<style>

			h1{text-align:center;background-color:#0099CC; font-family: Arial, Verdana, Sans-serif; }
			h2{text-align:center; font-size:80%; background-color:#0099CC;font-family: Arial, Verdana, Sans-serif;}
			body{text-align:center;font-family: Arial, Verdana, Sans-serif; background-size:cover;background-image:url("background.png");}
		</style>


		<h1> Pillow Dodge Game </h1>


		@yield('head')

	</head>

	<body>

		@if(Auth::check())
			<a> Logged in as {{ Auth::user()->username; }}</a>
		    <a href='/logout'>Log out </a>

		    <br>
		    <a> Number of times played: {{ Auth::user()->played; }}</a>
		@else 
		    <a href='/usersignup'>Sign up</a> or <a href='/userlogin'>Log in</a>
		@endif

		@if(Session::get('flash_message'))
        	<div class='flash-message'>{{ Session::get('flash_message') }}</div>
   		@endif

		@yield('content')
	</body>
</html>