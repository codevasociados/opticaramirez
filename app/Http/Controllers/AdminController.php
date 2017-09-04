<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use optica\Event;
use optica\Debt;
use optica\Expense;

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
    public function expense(){
      $expense=Expense::get();
      return view('admin.expenses')->with('expenses',$expense);
    }
    public function debt(){
      $debt= Debt::get();
      return view('admin.debts')->with('debts',$debt);
    }
}
