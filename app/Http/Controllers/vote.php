<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\work;

class vote extends Controller {

	public function view(){
		return response('this is view ~</br><a href="./rule">rule</a>');
	}
	
	public function rule(){
		return response('this is rule ~</br><a href="./vote?id=1">vote</a></br><a href="./award">award</a>');
	}
	
	public function vote(){
		$v = Validator::make(Input::all(),[
				'id' => 'required|numeric'
		]);
		
		if ($v->fails() || work::find(Input::get('id')) == null){
			return response('no, you can\'t vote for nobody', 400);
		}
		
		$ip = \Illuminate\Support\Facades\Request::ip();
		
		if (\App\vote::where('ip', '=', $ip)->count() != 0){
			return response('no, you can\'t vote again', 400);
		}
		
		$vote = new \App\vote();
		$vote->work_id = Input::get('id');
		$vote->ip = $ip;
		$vote->save();
		
		$work = work::find(Input::get('id'));
		$work->votes++;
		$work->save();
		
		return response('You have successfully voted for ' . Input::get('id') . '. Your ip is ' . $ip);
	}
	
	public function award(){
		return response('Yoha~ I\'m award!</br>-uadmin</br>-p888888</br><a href="./admin/index.php">admin</a>');
	}

}
