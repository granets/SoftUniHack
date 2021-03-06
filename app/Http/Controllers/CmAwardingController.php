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

    public function show_monsters(Request $request)
	{
		$all_monsters = CmMonster::all();

		return view('awarding.monsters_list', 
	    	[
	    		'all_monsters'=> $all_monsters
	    	]);
	}

    /**
	 * Display a list of all of the user's task.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	*/
	public function show_form(Request $request, $id)
	{
	    $total_points = CmAwarding::where('monster_id', $id)->sum('day_achievement');
	    $monster = CmMonster::where('id', $id)->first();
	    $level_missions = CmMission::where('min_level', '<=', $monster->level)->orderBy('points', 'asc')->get();

	    $awardings = CmAwarding::where('monster_id', $id)->get();

	    return view('awarding.add_form', 
	    	[
	    		'all_missions'=> $level_missions
	    		,'all_awardings' => $awardings
	    		,'monster' => $monster
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

	    $monster_id = $request->monster_id;
	    $mission_id = $request->mission_id;

	    $awarding->monster_id = $monster_id;
	    $awarding->mission_id = $mission_id;
	    $awarding->day_achievement = $request->mission_points;
	    $awarding->achievement_comment = $request->achievement_comment;

	    $awarding->save();
	    $total_points = CmAwarding::where('monster_id', $monster_id)->sum('day_achievement');

	    // $monster = CmMonster::where('id', 1)->get();
	    // $total_points = CmAwarding::where('monster_id', 1)->sum('day_achievement');
	    // $monster->total_points = $total_points;
	    // $monster->save();
	    $new_level = 1;
	    $new_picture = 'monster0.jpg';
	    if($total_points > 700)
	    {
	    	$new_level = 3;
			$new_picture = 'monster2.jpg';
	    }
	    else if($total_points > 300)
	    {
	    	$new_level = 2;
	    	$new_picture = 'monster1.jpg';
	    }
	    CmMonster::where('id', $monster_id)
          ->update([
          	'points' => $total_points
          	,'level' => $new_level
          	,'picture' => $new_picture
          	]);

	    return redirect('/awarding');
	}

	public function test(Request $request, $id)
	{
		return view('awarding.test', ['id'=>$id]);
	}
}
