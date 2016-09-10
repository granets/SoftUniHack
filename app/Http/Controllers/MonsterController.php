<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\CmMonster;
use App\CmClass;
use App\ConUsersClasses;
use App\Http\Controllers\Controller;
use Session;

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
        if (Auth::check())
        {
            $user_id = Auth::user()->id;    
        }else{
            $user_id = 0;
        }

        $all_monsters = CmMonster::where('created_by', $user_id)->orderBy('created_at', 'asc')->get();

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

        if (Auth::check())
        {
            $user_id = Auth::user()->id;    
        }else{
            $user_id = 0;
        }

        $monster = new CmMonster;
        $monster->name = $request->name;
        $monster->code = $request->code;
        $monster->class = $request->class;
        $monster->subject = $request->subject;
        $monster->level = 1;
        $monster->points=0;
        $monster->pictureId = 1;
        $monster->picture = "monster0.jpg";
        $monster->created_by = $user_id;

        $monster->save();

        return redirect('/all-monsters');
    }

    public function delete_data(CmMonster $monster)
    {
        $monster->delete();

        return redirect('/monsters');
    }

    public function input_code_form()
    {
        return view('monster.code_form');
    }

    public function check_code(Request $request)
    {
        $cm_class = CmClass::where('class_code', $request->code)->first();
        
        return view('monster.approve_code',
            [
                'cm_class' => $cm_class
            ]);
    }

    public function add_code(Request $request)
    {
        $id = Auth::id();

        $con_user_class = new ConUsersClasses;
        $con_user_class->cm_class_id = $request->class_id;
        $con_user_class->user_id = $id;

        $con_user_class->save();

        return redirect('/monsters');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'code' => 'required|max:255',
            'class' => 'required',
            'subject' => 'required',
        ]);
    }

    public function edit($id) {
    $monster = CmMonster::find($id);
    return view('monster.edit', [
            'monster' => $monster
        ]);

}

    public function update(Request $request, CmMonster $monster, $id) {

        $this->validate($request, [
            'name' => 'required',
            'code' => 'required',
            'class' => 'required',
            'subject' => 'required'
        ]);


        if (Auth::check())
        {
            $user_id = Auth::user()->id;    
        }else{
            $user_id = 0;
        }
        
        $monster = CmMonster::find($id);

        $monster->name = $request->Input('name');
        $monster->code = $request->Input('code');
        $monster->class = $request->Input('class');
        $monster->subject = $request->Input('subject');
        $monster->created_by = $user_id;
        $monster->updated_by = $user_id;
        $monster->save();

        return redirect('/all-monsters');

}

    public function user_monsters()
    {
        
    }
}