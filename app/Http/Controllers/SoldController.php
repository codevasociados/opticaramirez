<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use optica\Client;

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
      $client= Client::get();
      return view('solds.inventory')->with('clients', $client);
    }
    public function smaller(){
      return view('solds.smaller');
    }
}
