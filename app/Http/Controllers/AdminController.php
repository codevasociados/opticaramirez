<?php

namespace optica\Http\Controllers;

use Illuminate\Http\Request;
use optica\Event;
use optica\Debt;
use optica\Expense;
use optica\Client;
use optica\Sale;
use optica\Arrays;
use optica\Profile;
use optica\User;
use Illuminate\Support\Facades\Auth; //component of autentication data

class AdminController extends Controller
{

    public function __construct(){
      $this->middleware(function ($request, $next) {
        $id = Auth::user()->id;
        $lvl= Profile::where('profile.id_user','=',$id)->select('lvl_pro')->first();
        if($lvl->lvl_pro== 0):
           return $next($request);
        else:
          abort(503);
        endif;
        });
    }
    public function index(){
      return view('admin.index');
    }
    public function calendar(){
      $events=Event::get();
      return view('admin.calendar')->with('events',$events);
    }
    public function admin(){
      $clients= Client::get();
      $sales= Sale::get();
      $arrays= Arrays::get();
      $users= User::get();
      $expenses= Expense::get();
      $debts= Debt::get();
      $events=Event::get();
      return view('admin.admin')->with('clients',$clients)->with('sales',$sales)->with('arrays',$arrays)->with('users',$users)->with('expenses',$expenses)->with('debts',$debts)->with('events',$events);
    }
    public function adminsale(){
    }
    public function adminarray(){
    }
    public function adminuser(){
    }
    public function adminexpense(){
    }
    public function admindebt(){

    }
    public function storeclient(Request $request)
    {
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
      $mensaje=" Cliente registrado exitosamente!";
    	 return redirect()->route('admin.admin')->with('mensaje',$mensaje);
    }
    public function storesale(Request $request){
      //Controller of store user Created by: Developer Luis Quisbert
      $sale= new Sale;
      $sale->fec_sale= $request->fec_sale;
      $sale->id_cli= Auth::user()->id;
      $sale->id_user= Auth::user()->id;
      $sale->save();
      $mensaje=" Venta registrada exitosamente!";
      return redirect()->route('admin.admin')->with('mensaje',$mensaje);
    }
    public function storearray(Request $request){
      //Controller of store user Created by: Developer Luis Quisbert
      $array= new Arrays;
      $array->dat_rec= $request->dat_rec;
      $array->dat_ent= $request->dat_ent;
      $array->des_array= $request->des_array;
      $array->num_bol= $request->num_bol;
      $array->id_cli= Auth::user()->id;
      $array->id_user= Auth::user()->id;
      $array->save();
      $mensaje=" Arreglo registrado exitosamente!";
      return redirect()->route('admin.admin')->with('mensaje',$mensaje);
    }
    public function storeuser(Request $request){
      //Controller of store user Created by: Developer Luis Quisbert
      $user= new User;
      $user->nam_user= $request->nam_user;
      $user->lpa_user= $request->lpa_user;
      $user->lma_user= $request->lma_user;
      $user->ci_user= $request->ci_user;
      $user->add_user= $request->add_user;
      $user->pho_user= $request->pho_user;
      $user->nic_user= $request->nic_user;

      $user->save();
      $mensaje=" Usuario registrado exitosamente!";
      return redirect()->route('admin.admin')->with('mensaje',$mensaje);
    }
    public function storeexpense(Request $request){
      //Controller of store user Created by: Developer Luis Quisbert
      $expense= new Expense;
      $expense->des_exp= $request->des_exp;
      $expense->mon_exp= $request->mon_exp;
      $expense->fec_exp= $request->fec_exp;
      $expense->id_user= Auth::user()->id;
      $expense->save();
      $mensaje=" Gasto registrado exitosamente!";
      return redirect()->route('admin.admin')->with('mensaje',$mensaje);
    }
    public function storedebt(Request $request){
      //Controller of store user Created by: Developer Luis Quisbert
      $debt= new Debt;
      $debt->nom_deb= $request->nom_deb;
      $debt->con_deb= $request->con_deb;
      $debt->mon_deb= $request->mon_deb;
      $debt->fec_deb= $request->fec_deb;
      $debt->fin_deb= $request->fin_deb;
      $debt->id_user= Auth::user()->id;
      $debt->save();
      $mensaje=" Deuda registrada exitosamente!";
      return redirect()->route('admin.admin')->with('mensaje',$mensaje);
    }
    public function storeevent(Request $request){
      //Controller of store user Created by: Developer Luis Quisbert
      $event= new Event;
      $event->title= $request->title;
      $event->body= $request->body;
      $event->url= $request->url;
      $event->class= $request->class;
      $event->start= $request->start;
      $event->end= $request->end;
      $event->color= $request->color;
      $event->id_user= Auth::user()->id;
      $event->save();
      $mensaje=" Evento registrado exitosamente!";
      return redirect()->route('admin.admin')->with('mensaje',$mensaje);
    }
    public function deleteclient(Request $request)
    {
        $id=$request->id;
        $client=Client::find($id);
        $client->delete();
        $mensaje2='Cliente eliminado exitosamente';
        return redirect()->route('admin.admin')->with('mensaje2',$mensaje2);
    }
    public function updateclient(Request $request)
    {
      $id=$request->id;
      $client=Client::Find($id);
      $client->nam_cli= $request->nam_cli;
      $client->lpa_cli= $request->lpa_cli;
      $client->lma_cli= $request->lma_cli;
      $client->ci_cli= $request->ci_cli.' '.$request->xp_cli;
      $client->add_cli= $request->add_cli;
      $client->pho_cli= $request->pho_cli;
      $client->old_cli= $request->old_cli;
      $client->id_user= Auth::user()->id;

      $client->save();
      $mensaje='Cliente actualizado exitosamente!';
      return redirect()->route('admin.admin')->with('mensaje',$mensaje);
    }
    public function deletesale(Request $request)
    {
        $id=$request->id;
        $sale=Sale::find($id);
        $sale->delete();
        $mensaje2='Venta eliminada exitosamente';
        return redirect()->route('admin.admin')->with('mensaje2',$mensaje2);
    }
    public function updatesale(Request $request)
    {
      $id=$request->id;
      $sale=Sale::Find($id);
      $sale->fec_sale= $request->fec_sale;
      $sale->id_cli= Auth::user()->id;
      $sale->id_user= Auth::user()->id;
      $sale->save();
      $mensaje=" Venta actualizada exitosamente!";
      return redirect()->route('admin.admin')->with('mensaje',$mensaje);
    }
    public function deletearray(Request $request)
    {
        $id=$request->id;
        $array=Arrays::find($id);
        $array->delete();
        $mensaje2='Arreglo eliminado exitosamente';
        return redirect()->route('admin.admin')->with('mensaje2',$mensaje2);
    }
    public function updatearray(Request $request){
      $id=$request->id;
      $array=Arrays::Find($id);
      $array->dat_rec= $request->dat_rec;
      $array->dat_ent= $request->dat_ent;
      $array->des_array= $request->des_array;
      $array->num_bol= $request->num_bol;
      $array->id_cli= Auth::user()->id;
      $array->id_user= Auth::user()->id;
      $array->save();
      $mensaje=" Arreglo registrado exitosamente!";
      return redirect()->route('admin.admin')->with('mensaje',$mensaje);
    }
    public function deleteuser(Request $request)
    {
        $id=$request->id;
        $user=User::find($id);
        $user->delete();
        $mensaje2='Usuario eliminado exitosamente';
        return redirect()->route('admin.admin')->with('mensaje2',$mensaje2);
    }

    public function deletegasto(Request $request)
    {
        $id=$request->id;
        $expense=Expense::find($id);
        $expense->delete();
        $mensaje2='Gasto eliminado exitosamente';
        return redirect()->route('admin.admin')->with('mensaje2',$mensaje2);
    }
    public function updateexpense(Request $request){
      $id=$request->id;
      $expense=Expense::Find($id);
      $expense->des_exp= $request->des_exp;
      $expense->mon_exp= $request->mon_exp;
      $expense->fec_exp= $request->fec_exp;
      $expense->id_user= Auth::user()->id;
      $expense->save();
      $mensaje=" Gasto actualizado exitosamente!";
      return redirect()->route('admin.admin')->with('mensaje',$mensaje);
    }
    public function deletedebt(Request $request)
    {
        $id=$request->id;
        $debt=Debt::find($id);
        $debt->delete();
        $mensaje2='Deuda eliminada exitosamente';
        return redirect()->route('admin.admin')->with('mensaje2',$mensaje2);
    }
    public function updatedebt(Request $request){
      //Controller of store user Created by: Developer Luis Quisbert
      $id=$request->id;
      $debt=Debt::Find($id);
      $debt->nom_deb= $request->nom_deb;
      $debt->con_deb= $request->con_deb;
      $debt->mon_deb= $request->mon_deb;
      $debt->fec_deb= $request->fec_deb;
      $debt->fin_deb= $request->fin_deb;
      $debt->id_user= Auth::user()->id;
      $debt->save();
      $mensaje=" Deuda registrada exitosamente!";
      return redirect()->route('admin.admin')->with('mensaje',$mensaje);
    }
    public function deleteevent(Request $request)
    {
        $id=$request->id;
        $event=Event::find($id);
        $event->delete();
        $mensaje2='Evento eliminado exitosamente';
        return redirect()->route('admin.admin')->with('mensaje2',$mensaje2);
    }
    public function updateevent(Request $request){
      //Controller of store user Created by: Developer Luis Quisbert
      $id=$request->id;
      $event=Event::Find($id);
      $event->title= $request->title;
      $event->body= $request->body;
      $event->url= $request->url;
      $event->class= $request->class;
      $event->start= $request->start;
      $event->end= $request->end;
      $event->color= $request->color;
      $event->id_user= Auth::user()->id;
      $event->save();
      $mensaje=" Evento registrado exitosamente!";
      return redirect()->route('admin.admin')->with('mensaje',$mensaje);
    }
    public function expense(){
      $expenses=Expense::get();
      return view('admin.admin')->with('expenses',$expenses);
    }
    public function debt(){
      $debt= Debt::get();
      return view('admin.debts')->with('debts',$debt);
    }
}
