<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
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

    public function index() {
        $data = Session::all();
        return view('admin',
            [
                'session_data'=> $data
            ]);
    }

}
