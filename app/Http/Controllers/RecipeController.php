<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use optica\Client;
use optica\Photography;
use optica\Recipe;
use optica\History;
use optica\Ticket;
use Illuminate\Support\Facades\Auth; //component of autentication data

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getter(Request $request)
    {
      if(isset($request->cliente)):
        $photo= Photography::join('ticket','photography.id','=','ticket.id_pho')->join('history','history.id','=','ticket.id_hist')->where('history.id_cli','=',$request->cliente)->orderBy('fec_tic','DESC')->get();
//      dd($photo);
        if(count($photo)==1):
        $photo[2]->url_pho='storage/null.jpg';
        elseif(count($photo)==1):
          $photo[3]->url_pho='storage/null.jpg';
        endif;
        $client=Client::find($request->cliente);
        return view('recipe.index')->with('client',$client)->with('photo',$photo);
      else:
        $mensaje2= 'Asigne un cliente primeramente!';
        return redirect()->route('client.index')->with('mensaje2',$mensaje2);
      endif;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = new Recipe;
        $recipe->dat_rec= Carbon::now()->toDateString();
        $recipe->lde_rec= $request->lde_rec;
        $recipe->ldc_rec= $request->ldc_rec;
        $recipe->ldj_rec= $request->ldj_rec;
        $recipe->lda_rec= $request->lda_rec;
        $recipe->lie_rec= $request->lie_rec;
        $recipe->lic_rec= $request->lic_rec;
        $recipe->lij_rec= $request->lij_rec;
        $recipe->lia_rec= $request->lia_rec;
        $recipe->dip_rec= $request->dip_rec;
        $recipe->add_rec= $request->add_rec;
        $recipe->cde_rec= $request->cde_rec;
        $recipe->cdc_rec= $request->cdc_rec;
        $recipe->cdj_rec= $request->cdj_rec;
        $recipe->cda_rec= $request->cda_rec;
        $recipe->cie_rec= $request->cie_rec;
        $recipe->cic_rec= $request->cic_rec;
        $recipe->cij_rec= $request->cij_rec;
        $recipe->cia_rec= $request->cia_rec;
        $recipe->tip_rec= $request->tip_rec;
        $recipe->use_rec= $request->use_rec;
        $recipe->con_rec= $request->con_rec;
        $recipe->obs_rec= $request->obs_rec;
        $recipe->id_cli= $request->clie;
        $recipe->id_user= Auth::user()->id;
        $recipe->save();
        $mensaje= 'Receta registrada exitosamente';
        return redirect()->route('client.index')->with('mensaje',$mensaje);
      }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
