<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //component of autentication data

class AccessController extends Controller
{
    public function logout()
    {
    	$datos= Auth::user();
    	return view('home.lock')->with('datos',$datos);
    }
}
