@extends('../layout')
@section('title')
  Ventas menores - Optica Ramirez
@endsection
@section('content')
<div class="container-fluid">
  <div class="well">
    <fieldset>
    <legend>Ventas menores - Registro</legend>
    <button type="button" class="btn btn-danger btn-raised" data-toggle="modal" data-target="#miModal" name="button"><i class="material-icons"></i> Registrar venta</button><br><br>
    <table class="table table-striped table-hover" id="sales">
      <thead>
        <tr>
          <th data-dynatable-column="fec_sale">Fecha de venta</th>
          <th data-dynatable-column="nam_cli">Cliente</th>
          <th data-dynatable-column="nam_user">Usuario</th>
          <th data-dynatable-column="button">Acciones</th>
        </tr>
      </thead>
    </table>
  </fieldset>
  </div>
</div>
<!-- Modal !-->

  <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Registrar venta</h4>
      </div>
      <div class="modal-body">
				{!! Form::open(['route' => 'sales.store']) !!}
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Nombres</label>
        <div class="col-md-8" >
          <input type="text" name="nam_cli" class="form-control" required>
        </div></div>
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Apellido paterno</label>
        <div class="col-md-8" >
          <input type="text" name="lpa_cli" class="form-control" required>
        </div></div>
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Apellido materno</label>
        <div class="col-md-8" >
          <input type="text" name="lma_cli" class="form-control" required>
        </div></div>
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Carnet de identidad</label>
        <div class="col-md-8">
          <input type="number" name="ci_cli" class="form-control" required>
				</div></div>
				<div class="form-group has-danger">
					<label class="col-md-4 control-label">Expedido</label>
				<div class="col-md-8">
					<select class="form-control" name="xp_cli" required>
						<option value="">Seleccionar</option>
						<option value="LP">LP</option>
						<option value="OR">OR</option>
						<option value="PT">PT</option>
						<option value="CB">CB</option>
						<option value="CH">CH</option>
						<option value="TJ">TJ</option>
						<option value="BE">BE</option>
						<option value="PA">PA</option>
						<option value="SC">SC</option>
					</select>
        </div></div>
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Telefono</label>
        <div class="col-md-8" >
          <input type="number" name="pho_cli" min=6000000  class="form-control" required>
        </div></div>
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Direccion</label>
        <div class="col-md-8" >
          <textarea name="add_cli" class="form-control" rows="3" required></textarea>
        </div></div>
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Edad</label>
        <div class="col-md-8" >
          <input type="number" step="1" min="1" name="old_cli" class="form-control" required>
        </div>

        </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="material-icons">close</i>Cerrar</button>
        <button type="submit" class="btn btn-primary"><i class="material-icons">check</i>Guardar</button>
      </div>
    </div>
		{!! Form::close() !!}
  </div>
</div>

</div>
<!-- Modal !-->
@endsection
@section('scripts')
  <script type="text/javascript">

  $(document).on('ready', function(){
    var sale ={!! json_encode($sale->toArray()) !!};
    console.log(sale);
    for(var i=0; i<sale.length; i++)
    {
      var click="javascript:pasar('"+ sale[i].nam_cli+"','"+ sale[i].lpa_cli+"','"+sale[i].lma_cli +"','"+sale[i].add_cli +"','"+sale[i].pho_cli +"','"+sale[i].id+"','"+sale[i].old_cli +"');";
      sale[i].button='<a class="btn btn-raised btn-warning" onclick="'+click+'"  href="#" style="margin-top:0px; padding: 8px;"><i class="material-icons">supervisor_account</i> Ver detalles</a>';
      JSON.stringify(sale);
      console.log(sale);
    }
    console.log(sale);
    $('#sales').dynatable({
      dataset: {
        records: sale
      },
      inputs: {
       processingText: 'Loading <img src="{{ url('imagen/cargando.gif')}}" />'
      }
    });
  });
  function pasar(nam,lpa,lma,add,pho,id,old)
  {
    document.getElementById("nam").innerHTML = nam+' '+lpa+' '+lma;
    document.getElementById("old").innerHTML = old;
    document.getElementById("add").innerHTML = add;
    document.getElementById("pho").innerHTML = pho;
    $('#cli').val(id);
    $('#cli2').val(id);
  }
  </script>
@endsection
