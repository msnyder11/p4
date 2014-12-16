<?php

class ResultsController extends BaseController
{
	public function __construct()
	{

	}

	public function postResults()
	{

		$score = new Score();

		$score->score = $_POST["score"];

		$score->save();

		$username = Auth::user()->username;
		$user = User::where('username', '=', $username);
		$user->scores()->attach($score->id);
		
		$leaderboard = Score::orderBy('score', 'descending')->get();
		return View::make('results')
		->with('score', $score)
		->with('leaderboard', $leaderboard);

	}
}