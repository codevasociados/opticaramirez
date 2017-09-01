@extends('layout')

@section('title')
	Clientes - Optica ramirez
@endsection
@section('css')
	{!! Html::style('css/client.css')!!}
@endsection
@section('content')
<div class="container-fluid">
	<div class="col-md-5 well form">
		<fieldset>
			<legend>Optica Ramirez - Centro Optico Especializado</legend>
<form class="" action="index.html" method="post">
	<label for="" class="label label-warning">Datos de cliente</label>
</fieldset>
<fieldset style="border: 1;">
	<div class="col-lg-11 col-md-offset-1">
	<a type="button" href="{{route('recipe.index')}}" class="btn btn-danger btn-raised bmd-btn-fab">
  <i class="material-icons">grade</i>Receta
</a>
<button type="button" class="btn btn-warning btn-raised bmd-btn-fab">
  <i class="material-icons">grade</i>Boleta
</button>
<button type="button" class="btn btn-primary btn-raised bmd-btn-fab">
  <i class="material-icons">grade</i>Imprimir
</button>
</div>
@php
	$var='';
@endphp
	<div class="form-group">
		<input type="hidden" name="" value="">
		<p><b>Nombre del cliente:</b></p>
		<p><b>Edad:</b> {{Auth::user()->id}} años	</p>
		<p><b>Fecha: </b>{{\Carbon\Carbon::now()->toDateString()  }}</p>
		<p><b>Direccion del cliente:</b> Calle Montaño #358</p>
		<p><b>Telefono del cliente: </b></p>
	</div>
</fieldset>
	<label for="" class="label label-danger">Datos de lentes - Boleta</label>
	<form class="form-horizontal" action="" method="post">
	<div class="form-group">
		<label for="" class="lbl col-lg-2" style="color: #333; weight:bold">Cristales</label>
		<div class="col-lg-10">
			<input type="text" name="" class="form-control" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-2" style="color: #333; weight:bold">Armazon</label>
		<div class="col-lg-10">
			<input type="text" name="" class="form-control" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-2" style="color: #333; weight:bold">Medida</label>
		<div class="col-lg-10">
			<input type="text" name="" class="form-control" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-2" style="color: #333; weight:bold">Material</label>
		<div class="col-lg-10">
			<input type="text" name="" class="form-control" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-3" style="color: #333; weight:bold">N° de boleta</label>
		<div class="col-lg-9">
			<input type="text" name="" class="form-control" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-4" style="color: #333; weight:bold">Fecha de entrega</label>
		<div class="col-lg-8">
			<input type="date" name="" class="form-control" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-2" style="color: #333; weight:bold">Hora:</label>
		<div class="col-lg-10">
			<input type="time" name="" class="form-control" value="">
		</div>
	</div>
</form>
	</div>
	<div class="col-md-6 well">
		<fieldset>
			<legend>Listado de clientes</legend>
			<button type="button" class="btn btn-danger btn-raised" data-toggle="modal" data-target="#miModal" name="button"><i class="material-icons"></i> Registrar nuevo cliente</button>
			<br/>
			<br/>
			<div class="table-responsive">
			<table class="table table-striped table-hover" id="client">
  <thead>
    <tr>
      <th data-dynatable-column="ci_cli">C.I.</th>
      <th data-dynatable-column="nam_cli">Nombre</th>
      <th data-dynatable-column="lpa_cli">Paterno</th>
      <th data-dynatable-column="lma_cli">Materno</th>
      <th data-dynatable-column="button">Acciones</th>
    </tr>
  </thead>
  <tbody>
		<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>

	</tr>
  </tbody>
</table>
</div>
		</fieldset>
	</div>
</div>
<!-- Modal !-->

  <div class="modal fade" id="miModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Registrar nuevo paciente</h4>
      </div>
      <div class="modal-body">
				<div class="well col-lg-6" style="height:65vw">
			      <p><b>Datos del cliente:</b></p>

			    <div id='botonera' style="margin-left:7%;">
			        <button id='botonIniciar' style="padding-left:15px;" class="btn btn-raised btn-success" type='button'><i class="material-icons">play_circle_filled</i> Iniciar</button>
			        <button id='botonDetener' style="padding-left:15px;" class="btn btn-raised btn-danger" type='button'><i class="material-icons">stop</i> Detener</button>
			        <button id='botonFoto' type='button' style="padding-left:15px;" class="btn btn-raised btn-primary"><i class="material-icons">camera</i> Foto</button>
			        <button id='' type='button' style="padding-left:15px;" class="btn btn-raised btn-info"><i class="material-icons">check_circle</i> Guardar</button>
			    </div>
			    <div class="contenedor well">
			        <div class="titulo">Cámara</div>
			        <video id="camara" autoplay controls></video>
			    </div>
			    <div class="contenedor well">
			        <div class="titulo">Foto</div>
			        <canvas id="foto" ></canvas>
			    </div>
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

  <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Registrar nuevo paciente</h4>
      </div>
      <div class="modal-body">
				{!! Form::open(['route' => 'client.store']) !!}
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
@endsection

@section('scripts')
	<script type="text/javascript">
		$(document).on('ready', function(){
			var clients ={!! json_encode($clients->toArray()) !!};
			console.log(clients);
			for(var i=0; i<clients.length; i++)
			{
				clients[i].button='<a class="btn btn-raised btn-danger" href="#" style="margin-top:0px; padding: 8px;"><i class="material-icons">supervisor_account</i> Asignar</a>';
				JSON.stringify(clients);
				console.log(clients);
			}
			console.log(clients);
			$('#client').dynatable({
				dataset: {
    			records: clients
  			},
				inputs: {
    		 processingText: 'Loading <img src="{{ url('imagen/cargando.gif')}}" />'
  	 		}
			});
		});
	</script>
@endsection
