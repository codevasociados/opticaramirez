<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdf(){
      return view('pdf.reporte');
    }
}
