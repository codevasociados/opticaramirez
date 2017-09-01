<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use optica\Client;

class TicketsController extends Controller
{
    public function index(){
      $client= Client::get();
      return view('tickets.manually')->with('clients',$client);
    }
}
