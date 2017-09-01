<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use optica\Client;


class ArrangementController extends Controller
{
    public function index(){
      $arrays=\optica\Arrays::get();
      return  view('solds.arrangements.arrangements')->with('arrays',$arrays);
    }

}
