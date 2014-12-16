<?php

class UserController extends BaseController
{
	public function __construct()
	{

	}

	public function getUsersignup()
	{
		return View::make('usersignup');
	}

	public function postUsersignup()
	{
			$user = new User;
            $user->username = Input::get('username');
            $user->password = Hash::make(Input::get('password'));

            # Try to add the user 
            try {
                $user->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/usersignup')->with('flash_message', 'Sign up failed; please try again.')->withInput();
            }

            # Log the user in
            Auth::login($user);

            return Redirect::to('/')->with('flash_message', 'Welcome!');
	}

	public function getUserlogin()
	{
		return View::make('userlogin');
	}

	public function postUserLogin()
	{
		$credentials = Input::only('username', 'password');

            if (Auth::attempt($credentials, $remember = true)) {
                return Redirect::intended('/')->with('flash_message', 'Welcome Back!');
            }
            else {
                return Redirect::to('/userlogin')->with('flash_message', 'Log in failed; please try again.');
            }

            return Redirect::to('userlogin');
	}

	public function getLogout()
	{
		# Log out
	    Auth::logout();

	    # Send them to the homepage
	    return Redirect::to('/');
	}
}