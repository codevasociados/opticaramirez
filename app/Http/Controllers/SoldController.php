<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;

class SoldController extends Controller
{
    public function index(){
      return view ('solds.solds');
    }
    public function report(){
      return view('solds.report');
    }
    public function graphics(){
      return view('solds.graphics');
    }
    public function inventory(){
      return view('solds.inventory');
    }
    public function smaller(){
      return view('solds.smaller');
    }
}
