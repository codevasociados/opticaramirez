<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use optica\Ticket;
use optica\Client;
use optica\History;
use Illuminate\Support\Facades\Auth; //component of autentication data
use Carbon\Carbon;

class PdfController extends Controller
{
    public function pdf(Request $request){
      $com=Ticket::get();
      if(count($com)!=0):
        $ticket= Ticket::orderBy('id','DESC')->first();
        $h= History::orderBy('id','DESC')->first();
        $cli= Client::orderBy('id','DESC')->first();
        if ($ticket->imp_tic==1):
          $tic=new Ticket;
          $client= new Client;
          $hist= new History;
        else:
          $tic= Ticket::find($ticket->id);
          $client= Client::find($cli->id);
          $hist= History::find($h->id);
        endif;
      else:
        $tic=new Ticket;
        $client= new Client;
        $hist= new History;
      endif;
      $client->nam_cli= $request->nam_cli;
      $client->lpa_cli= $request->lpa_cli;
      $client->lma_cli= $request->lma_cli;
      $client->ci_cli= $request->ci_cli.' '.$request->xp_cli;
      $client->add_cli= $request->add_cli;
      $client->pho_cli= $request->pho_cli;
      $client->old_cli= $request->old_cli;
      $client->id_user= Auth::user()->id;
      $client->save();
      //First save History
      $hist->ini_hist= Carbon::now();
      $hist->id_cli=$client->id;
      $hist->id_user=Auth::user()->id;
      $hist->save();

      $tic->cri_tic= $request->cri_tic;
      $tic->arm_tic= $request->arm_tic;
      $tic->med_tic= $request->med_tic;
      $tic->mat_tic= '';
      $tic->sal_tic= $request->sal_tic;
      $tic->tot_tic= $request->acu_tic+$request->sal_tic;
      $tic->nro_tic= $request->nro_tic;
      $tic->fec_tic= $request->fec_tic;
      $tic->hor_tic= $request->hor_tic;
      $tic->id_cli= $client->id;
      $tic->imp_tic= 0;
      $tic->id_pho= 0;
      $tic->id_hist= $hist->id;
      $tic->id_user= Auth::user()->id;
      $tic->save();
      return view('pdf.reporte')->with('tic',$tic)->with('cli',$client);
    }
    public function end()
    {
      $ticket=Ticket::orderBy('id','DESC')->first();
      $ticket->imp_tic=1;
      $ticket->save();
      $mensaje=" Boleta registrada correctamente!";
    	 return redirect()->route('client.index')->with('mensaje',$mensaje);
    }
}
