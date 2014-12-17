<?php

class ResultsController extends BaseController
{
	public function __construct()
	{

	}

	public function postResults()
	{


		$score = Score::where('score', '=', $_POST["score"]);

		if($score->count() == 0)
		{
			$score = new Score();

			$score->score = $_POST["score"];

			$score->save();
		}
		else
		{
			$score = $score->first();
		}


		$score_id = $score->id;
		$user_id = Auth::user()->id;
		$user = User::find($user_id);

		$userscore = $user->scores()->where('score', '=', $score->score);
		if($userscore->count() == 0)
		{
			$user->scores()->attach($score_id);
		}
		
		$leaderboard = Score::orderBy('score', 'descending')->get();
		return View::make('results')
		->with('score', $score)
		->with('leaderboard', $leaderboard);

	}
}