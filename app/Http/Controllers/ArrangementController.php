<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;

class ArrangementController extends Controller
{
    public function index(){
      return  view('solds.arrangements.arrangements');
    }

}
