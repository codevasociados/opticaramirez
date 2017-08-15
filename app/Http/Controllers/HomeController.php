<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use optica\Profile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $id=Auth::user()->id;
       $level= Profile::where('id_user','=',$id)->first();
       if($level->lvl_pro==0)
       {
         $level='ADMINISTRADOR';
       }
       else
       {
         $level='USUARIO COMUN';
       }
        return view('home.dashboard')->with('level',$level);
    }
}
