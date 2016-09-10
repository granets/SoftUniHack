<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CmMission;
use App\Http\Controllers\Controller;
use App\Http\Controllers\View;
use App\Http\Controllers\Input;
use App\CmLevel;
use Auth;

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
        if (Auth::check())
        {
            $user_id = Auth::user()->id;    
        }else{
            $user_id = 0;
        }

        $missions = CmMission::with('cmLevel')->where('created_by', $user_id)->orderBy('created_at', 'asc')->get();
        $levels_data = CmLevel::where('created_by', $user_id)->orderBy('created_at', 'asc')->get();
        $levels = array();
        foreach ($levels_data as $value) {
            $levels[$value['id']] = $value['number'] . '.' . $value['levels'];
        }

        return view('mission.add_form', [
            'missions' => $missions
            ,'levels' => $levels
        ]);

    }

    public function submit_form(Request $request)
    {
        $this->validate($request, [
            'mission' => 'required',
            'points' => 'required',
            'min_level' => 'required'
        ]);

        if (Auth::check())
        {
            $user_id = Auth::user()->id;    
        }else{
            $user_id = 0;
        }



        $mission = new CmMission;
        $mission->mission = $request->mission;
        $mission->points = $request->points;
        $mission->min_level = $request->min_level;
        $mission->created_by = $user_id;

        $mission->save();

        return redirect('/mission');
    }

    public function edit($id) {
    $mission = CmMission::find($id);
    if (Auth::check())
        {
            $user_id = Auth::user()->id;    
        }else{
            $user_id = 0;
        }
    $levels_data = CmLevel::where('created_by', $user_id)->orderBy('created_at', 'asc')->get();
        $levels = array();
        foreach ($levels_data as $value) {
            $levels[$value['id']] = $value['number'] . '.' . $value['levels'];
        }
    return view('mission.edit', [
            'mission' => $mission
            ,'levels' => $levels
        ]);

}

public function update(Request $request, CmMission $mission, $id) {

        $this->validate($request, [
            'mission' => 'required',
            'points' => 'required'
        ]);

        if (Auth::check())
        {
            $user_id = Auth::user()->id;    
        }else{
            $user_id = 0;
        }

        $mission = CmMission::find($id);

        $mission->mission = $request->Input('mission');
        $mission->points = $request->Input('points');
        $mission->created_by = $user_id;
        $mission->updated_by = $user_id;
        $mission->save();

        return redirect('/mission');

}

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'mision' => 'required',
            'points' => 'required',
            'min_level' => 'required',
                    ]);
    }

    public function delete_data(CmMission $mission){
        $mission->delete();

        return redirect('/mission');
    }

}