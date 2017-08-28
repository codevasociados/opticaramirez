<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use optica\Client;
use Illuminate\Support\Facades\Auth; //component of autentication data
use DB;

class ClientController extends Controller
{

   public function index()
   {
     $clients= Client::get();
   	  return view('clients.client')->with('clients',$clients);
   }
   public function store(Request $request){
     //Controller of store user Created by: Developer Luis Quisbert
     $client= new Client;
     $client->nam_cli= $request->nam_cli;
     $client->lpa_cli= $request->lpa_cli;
     $client->lma_cli= $request->lma_cli;
     $client->ci_cli= $request->ci_cli.' '.$request->xp_cli;
     $client->add_cli= $request->add_cli;
     $client->pho_cli= $request->pho_cli;
     $client->old_cli= $request->old_cli;
     $client->id_user= Auth::user()->id;
     $client->save();
     $clients= Client::get();
   	 return view('clients.client')->with('clients',$clients);
   }
}
