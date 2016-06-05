<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CmLevel;
use App\Http\Controllers\Controller;

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
        $levels = CmLevel::orderBy('created_at', 'asc')->get();

        return view('levels.add_level', [
            'levels' => $levels
        ]);

    }

    public function submit_form(Request $request)
    {
        $this->validate($request, [
            'levels' => 'required|min:10',
            'number' => 'required'
        ]);



        $level = new CmLevel;
        $level->number = $request->number;
        $level->levels = $request->levels;
        $level->save();

        return redirect('/level');
    }

    public function delete_data(CmLevel $level){
        $level->delete();

        return redirect('/level');
    }

}