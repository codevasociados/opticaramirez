<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use optica\Event;

class AdminController extends Controller
{
    public function index(){
      return view('admin.index');
    }
    public function calendar(){
      $events=Event::get();
      return view('admin.calendar')->with('events',$events);
    }
    public function admin(){
      return view('admin.admin');
    }
}
