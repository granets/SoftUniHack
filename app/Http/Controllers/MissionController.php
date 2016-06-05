<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CmMission;
use App\Http\Controllers\Controller;

class MissionController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show_form()
    {
        $missions = CmMission::orderBy('created_at', 'asc')->get();

        return view('mission.add_form', [
            'missions' => $missions
        ]);

    }

    public function submit_form(Request $request)
    {
        $this->validate($request, [
            'mission' => 'required|min:10',
            'points' => 'required'
        ]);



        $mission = new CmMission;
        $mission->mission = $request->mission;
        $mission->points = $request->points;

        $mission->save();

        return redirect('/mission');
    }

    public function delete_data(CmMission $mission){
        $mission->delete();

        return redirect('/mission');
    }

}