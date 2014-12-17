<?php

class LeaderboardController extends BaseController
{
	public function __construct()
	{

	}

	public function getLeaderboard()
	{
		
		$leaderboard = Score::orderBy('score', 'descending')->get();
		return View::make('leaderboard')
		->with('leaderboard', $leaderboard);

	}

	public function getYourscores()
	{
		$leaderboard = Score::orderBy('score', 'descending')->get();
		return View::make('yourscores')
		->with('leaderboard', $leaderboard);
	}

	public function getErase()
	{
		$leaderboard = Score::All();
		foreach($leaderboard as $score)
		{
			foreach($score->user as $user)
			{
				if($user->id == Auth::user()->id)
				{
					$score->user()->detach($user->id);
				}
			}
		}
		return Redirect::to('/leaderboard');
	}
}