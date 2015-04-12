<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\work;
use App\candidate;

class vote extends Controller {
	

	public function view(){
		/*
		$candidates = candidate::all()->toArray();
		usort($candidates, function ($a, $b) {
			if ($a['vote'] == $b['vote']) {
				return 0;
			} else {
				return ($a['vote'] < $b['vote']) ? 1 : -1;
			}
		});
		*/
		$winArray = [111, 112, 107, 67, 56, 57, 48, 30, 159, 148, 140];
		$wins = [];
		foreach ($winArray as $winId){
			$wins[] = candidate::find($winId);
		}
		$candidates = array_reverse(candidate::all()->toArray());
		#var_dump($candidates);
		return view('view', [
				"candidates" => $candidates,
				"wins" => $wins
		]);
	}
	
	public function vote(){
		$msg;
		$vote = 0;
		$v = Validator::make(Input::all(),[
				'id' => 'required|numeric'
		]);
		
		if ($v->fails() || candidate::find(Input::get('id')) == null){
			$msg = 'no, you can\'t vote for nobody';
		}
		
		else {
			$ip = \Illuminate\Support\Facades\Request::ip();
			
			if (\App\vote::where('ip', '=', $ip)->count() != 0){
				$msg = '你不能重复投票。';
			}
			else{

				$vote = new \App\vote();
				$vote->work_id = Input::get('id');
				$vote->ip = $ip;
				$vote->save();
					
				$work = candidate::find(Input::get('id'));
				$work->vote++;
				$work->save();
					
				$msg = '感谢参与~';
				$vote = $work->vote;
			}
		}
		
		return response()->json([
				"msg" => $msg,
				"vote" => $vote
		]);
	}

}
