<?php

namespace App\Http\Controllers;

use App\CmMonster;
use App\CmMission;
use App\CmAwarding;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class CmAwardingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
	 * Display a list of all of the user's task.
	 *
	 * @param  Request  $request
	 * @return Response
	*/
	public function show_form(Request $request)
	{
	    //$awarding = $request->user()->tasks()->get();
	    //$all_missions = CmMission::all(); 
	    $level_missions = CmMission::where('points', 100)->orderBy('points', 'asc')->get();

	    $awardings = CmAwarding::where('monster_id', 1)->get();

	    return view('awarding.add_form', 
	    	[
	    		'all_missions'=> $level_missions
	    		,'all_awardings' => $awardings
	    	]);
	}

	/**
	 * Add awarding to monster.
	 *
	 * @param  Request  $request
	 * @return Response
	*/
	public function submit_form(Request $request)
	{
	    // $this->validate($request, [
	    //     'name' => 'required|max:255',
	    // ]);

	    $awarding = new CmAwarding();

	    $awarding->monster_id = 1;
	    $awarding->mission_id = 1;
	    $awarding->day_achievement = $request->mission_points;
	    $awarding->achievement_comment = $request->achievement_comment;

	    $awarding->save();

	    return redirect('/awarding');
	}
}
