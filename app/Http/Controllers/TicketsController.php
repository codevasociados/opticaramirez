<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use optica\Client;
use optica\Ticket;
use optica\Photography;
use optica\History;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; //component of autentication data

class TicketsController extends Controller
{
    public function index(){
      $client= Client::get();
      return view('tickets.manually')->with('clients',$client);
    }
    public function store(Request $request){
      if(isset($request->cliente)):
      $ticket= new Ticket;
      $photo= new Photography;

      if(isset($request->img)):
      $base=$request->img;
      $base_php=explode(',',$base);
      $data= base64_decode($base_php[1]);
      $nombre=Carbon::now()->toDateString().$request->nro_tic.'.jpg';
      \Storage::disk('local')->put($nombre, $data);

      $photo->url_pho='storage'.'/'.$nombre;
      $photo->des_pho='Fotografia';
      $photo->save();
      endif;
      $hist= History::find($request->cli);
      if(isset($hist)){
      }
      else{
        $hist= new History;
      }
      //First save History
      $hist->ini_hist= Carbon::now();
      $hist->id_cli=$request->cliente;
      $hist->id_user=Auth::user()->id;
      $hist->save();

      $ticket->cri_tic= $request->cri_tic;
      $ticket->arm_tic= $request->arm_tic;
      $ticket->med_tic= $request->med_tic;
      $ticket->mat_tic= $request->mat_tic;
      $ticket->sal_tic= $request->sal_tic;
      $ticket->tot_tic= $request->tot_tic;
      $ticket->nro_tic= $request->nro_tic;
      $ticket->fec_tic= $request->fec_tic;
      $ticket->hor_tic= $request->hor_tic;
      $ticket->id_cli= $request->cliente;
      if(isset($request->img)):
      $ticket->id_pho= $photo->id;
      else:
        $ticket->id_pho= 0;
      endif;
      $ticket->id_hist= $hist->id;
      $ticket->id_user= Auth::user()->id;
      $ticket->save();
      $mensaje=' Boleta registrada correctamente!';
      return redirect()->route('client.index')->with('mensaje',$mensaje);
      else:
        $mensaje=' Asigne un usuario primeramente!';
        return redirect()->route('client.index')->with('mensaje2',$mensaje);
      endif;
    }
}
