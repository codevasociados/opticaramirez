<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use optica\Client;
use optica\Sale;
use optica\Sold;
use optica\Product;

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
      $product= Product::get();
      return view('solds.inventory')->with('product', $product);
    }
    public function smaller(){
      $sale= Sale::join('users','sale.id_user','=','users.id')->join('client','sale.id_cli','=','client.id')->get();
      return view('solds.smaller')->with('sale', $sale);
    }
}
