@extends('../../layout')
@section('title')
  Arreglos - Optica Ramirez
@endsection
@section('css')

@endsection
@section('content')
<div class="container-fluid">
  <div class="well col-lg-11" style="margin-left:4%;">


    <!--desde aqui el codigo de la tabla!-->
    <button type="button" class="btn btn-warning btn-raised" data-toggle="modal" data-target="#modarray">Registro</button>

    <!-- Modal -->
  <div id="modarray" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registro de arreglos</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="{{route('admin.storearray')}}">
          {{csrf_field()}}
          <div class="form-group">
            <label name="nom_adm" for="nom_clie" class="col-lg-4 control-label">Fecha recibo: </label>
            <div class="col-lg-8">
              <input type="date" class="form-control" id="nom_clie" name="dat_rec">
            </div>
          </div>
          <div class="form-group">
            <label name="pat_adm" for="pat_cli" class="col-lg-4 control-label">Fecha entrega: </label>
            <div class="col-lg-8">
              <input type="date" class="form-control" id="pat_cli"  name="dat_ent">
            </div>
          </div>
          <div class="form-group">
            <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Descripcion: </label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="mat_cli"  name="des_array"
                     placeholder="descripcion">
            </div>
          </div>
          <div class="form-group">
            <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Num bol: </label>
            <div class="col-lg-8">
              <input type="number" class="form-control" id="mat_cli"  name="num_bol"
                     placeholder="num_bol">
            </div>
          </div>
          <div class="center-block">
            <button type="submit" class="btn btn-warning btn-raised" data-toggle="modal" data-target="#sale">Registrar</button>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
  </div>
  <!--fin del Modal content-->
  <!-- Modal -->
  <div id="modarraymodi" class="modal fade" role="dialog">
  <div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Registro de arreglos</h4>
  </div>
  <div class="modal-body">
    <form class="form-horizontal" role="form" method="POST" action="{{route('admin.updatearray')}}">
      {{csrf_field()}}
      <div class="form-group">
        <input type="hidden" class="form-control" id="id_array_up" name="id" value="">
        <label name="nom_adm" for="nom_clie" class="col-lg-4 control-label">Fecha recibo: </label>
        <div class="col-lg-8">
          <input type="datetime" class="form-control" id="datrec" name="dat_rec">
        </div>
      </div>
      <div class="form-group">
        <label name="pat_adm" for="pat_cli" class="col-lg-4 control-label">Fecha entrega: </label>
        <div class="col-lg-8">
          <input type="datetime" class="form-control" id="datent"  name="dat_ent">
        </div>
      </div>
      <div class="form-group">
        <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Descripcion: </label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="des"  name="des_array"
                 placeholder="descripcion">
        </div>
      </div>
      <div class="form-group">
        <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Num bol: </label>
        <div class="col-lg-8">
          <input type="number" class="form-control" id="num"  name="num_bol"
                 placeholder="num_bol">
        </div>
      </div>
      <div class="center-block">
        <button type="submit" class="btn btn-warning btn-raised" data-toggle="modal" data-target="#sale">Registrar</button>
      </div>
    </form>

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
  </div>

  </div>
  </div>
  <!--fin del Modal content-->
  <!-- Modal -->
  <div id="eliminaModArray" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <form class="" action="{{route('admin.deletearray')}}" method="post">
          {{csrf_field()}}
        <input type="hidden" class="form-control" id="id_array_del" name="id" value="">
        <h4 class="modal-title">ELIMINAR ARREGLO</h4>
      </div>
      <div class="modal-body">
        <p>Esta seguro de eliminar el arreglo?</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">ELIMINAR</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>

  </div>
  </div
  <!--fin del Modal content-->
    <div class="table-responsive">
      <table class="table" id="array">
        <thead>
          <tr class="warning" style="font-size:18px;">
            <th>ID</th>
            <th data-dynatable-column="dat_rec">NOMBRE</th>
            <th data-dynatable-column="dat_ent">FECHA ENTREGA</th>
            <th data-dynatable-column="des_array">DESCRIPCION</th>
            <th data-dynatable-column="num_bol">BOLETA</th>
            <th data-dynatable-column="id_user">USUARIO</th>
            <th data-dynatable-column="nam_cli">CLIENTE</th>
            <th data-dynatable-column="mon_arr">MONTO</th>
            <th data-dynatable-column="mat_arr">MATERIAL</th>
            <th data-dynatable-column="cue_arr">A CUENTA</th>
            <th data-dynatable-column="sal_arr">SALDO</th>
            <th data-dynatable-column="boton">ACCIONES</th>


          </tr>
        </thead>
        <tbody>
          <tr>
          </tr>
        </tbody>
      </table>
  </div>

      <!--hasta aqui las tablas!-->


</div>
</div>
@endsection
@section('scripts')
  <script type="text/javascript">
    $(document).on('ready', function(){
      var arrays ={!! json_encode($arrays->toArray()) !!};
      console.log(arrays);
      for(var i=0; i<arrays.length; i++)
      {
        arrays[i].button='<a class="btn btn-raised btn-warning" href="#" style="margin-top:0px; padding: 8px;"><i class="material-icons">supervisor_account</i> Ver</a><a class="btn btn-raised btn-primary" href="#" style="margin-top:0px; padding: 8px;"><i class="material-icons">print</i> Imprimir boleta</a>';
        JSON.stringify(arrays);
        console.log(arrays);
      }
      console.log(arrays);
      $('#array').dynatable({
        dataset: {
          records: arrays
        },
        inputs: {
         processingText: 'Loading <img src="{{ url('imagen/cargando.gif')}}" />'
        }
      });
    });
  </script>
@endsection















public function storearray(Request $request){
  //Controller of store user Created by: Developer Luis Quisbert
  $array= new Arrays;
  $array->dat_rec= $request->dat_rec;
  $array->dat_ent= $request->dat_ent;
  $array->des_array= $request->des_array;
  $array->num_bol= $request->num_bol;
  $array->id_user= Auth::user()->id;
  $array->nam_cli= $request->nam_cli;
  $array->mon_arr= $request->mon_arr;
  $array->mat_arr= $request->mat_arr;
  $array->cue_arr= $request->cue_arr;
  $array->sal_arr= $request->sal_arr;
  $array->save();
  $mensaje=" Arreglo registrado exitosamente!";
  return redirect()->route('arrangements.arrangements')->with('mensaje',$mensaje);
}
