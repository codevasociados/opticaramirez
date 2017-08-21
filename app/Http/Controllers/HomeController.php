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

        return view('home.dashboard');
    }
}
