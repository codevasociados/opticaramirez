<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use optica\Sale;
use optica\Sold;
class SalesController extends Controller
{
  public function index()
  {
    $sales= Sale::get();
     return view('admin.admin')->with('sales',$sales);

  }
  public function store(Request $request){
    //Controller of store user Created by: Developer Luis Quisbert
    $sale= new Sale;
    $sale->fec_sale= $request->fec_sale;
    $sale->id_user= Auth::user()->id;
    $sale->save();
    if ($request->num==0) {
      for ($i=0; $i <num ; $i++) {
        $sold=new Sold;

        $sold->save();
      }
    }
    $mensaje=" Venta registrada exitosamente!";
    return redirect()->route('admin.admin')->with('mensaje',$mensaje);
  }
}
