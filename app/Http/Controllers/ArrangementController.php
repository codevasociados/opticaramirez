<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use optica\Client;
use optica\Arrays;

class ArrangementController extends Controller
{
    public function index(){
      $arrays=Arrays::get();
      return  view('solds.arrangements.arrangements')->with('arrays',$arrays);
    }

}
