<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CmMonster;
use App\Http\Controllers\Controller;

class MonsterController extends Controller {

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
        $all_monsters = CmMonster::all();

        return view('monster.monsters_list',
            [
                'all_monsters'=> $all_monsters
            ]);

    }

    public function submit_form(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'code' => 'required',
            'class' => 'required',
            'subject' => 'required'
        ]);



        $monster = new CmMonster;
        $monster->name = $request->name;
        $monster->code = $request->code;
        $monster->class = $request->class;
        $monster->subject = $request->subject;
        $monster->level = 1;
        $monster->points=0;
        $monster->pictureId = 1;
        $monster->picture = "monster0.jpg";

        $monster->save();

        return redirect('/monsters');
    }

    public function delete_data(CmMonster $monster){
        $monster->delete();

        return redirect('/monsters');
    }

}