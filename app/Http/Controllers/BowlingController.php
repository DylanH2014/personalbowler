<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Illuminate\Support\Facades\Input;

use App\Bowling;

class BowlingController extends Controller
{
    
	public function index() {

		return view('index');

	}

	public function addGame() {

		$input = Input::all();
		dd($input);
		
		$name = strtolower($input['name']);
		$score = $input['score'];
		// dd(gettype($score));

		$newGame = new Bowling;
		$newGame->user = $name;
		$newGame->score = $score;
		$newGame->save();

		return view('index');

	}

	// public function show($id) {

	// 	$game = Bowling::find($id);

	// 	return view('show', compact('game'));

	// }


	// public function showAll($user) {

	// 	$allGames = Bowling::where('user', $user)->get();

	// 	// $allGames = DB::table('bowling')->where('user', $user)->get();

	// 	return view('showAll', compact('allGames'));

	// }

}
