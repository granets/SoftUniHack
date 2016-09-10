<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CmLevel;
use App\Http\Controllers\Controller;
use Auth;

class LevelController extends Controller {

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

        $levels = CmLevel::where('created_by', $user_id)->orderBy('created_at', 'asc')->get();

        return view('levels.add_level', [
            'levels' => $levels
        ]);

    }

    public function submit_form(Request $request)
    {
        $this->validate($request, [
            'levels' => 'required',
            'number' => 'required'
        ]);

        if (Auth::check())
        {
            $user_id = Auth::user()->id;    
        }else{
            $user_id = 0;
        }

        $level = new CmLevel;
        $level->number = $request->number;
        $level->levels = $request->levels;
        $level->created_by = $user_id;
        $level->save();

        return redirect('/level');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'levels' => 'required',
            'number' => 'required',
        ]);
    }

    public function edit($id) {
    $level = CmLevel::find($id);
    return view('levels.edit', [
            'level' => $level
        ]);

}

public function update(Request $request, CmLevel $level, $id) {

        $this->validate($request, [
            'levels' => 'required',
            'number' => 'required'
        ]);

        if (Auth::check())
        {
            $user_id = Auth::user()->id;    
        }else{
            $user_id = 0;
        }


        $level = CmLevel::find($id);

        $level->number = $request->Input('number');
        $level->levels = $request->Input('levels');
        $level->created_by = $user_id;
        $level->updated_by = $user_id;
        $level->save();

        return redirect('/level');

}
    public function delete_data(CmLevel $level){
        $level->delete();

        return redirect('/level');
    }

}