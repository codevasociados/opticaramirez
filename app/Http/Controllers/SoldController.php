<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;

class SoldController extends Controller
{
    public function index(){
      return view ('solds.solds');
    }
}
