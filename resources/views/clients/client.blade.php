@extends('layout')

@section('title')
	Clientes - Optica ramirez
@endsection
@section('css')
	{!! Html::style('css/client.css')!!}
	<style type="text/css">
	    .contenedor{ margin-left: 6%;float: left;}
	    .contenedor2{ margin-left: 6%;}
	    .titulo{ font-size: 12pt; font-weight: bold;}
	    #camara, #foto,#foto2{
	        width: 25vw;
	        min-height: 22vw;
	    }
	</style>
@endsection
@section('content')
<div class="container-fluid">
	<div class="col-md-6 well form">
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

	</tr>
  </tbody>
</table>
</div>
		</fieldset>
	</div>

<div class="col-md-5 well">
		<fieldset>
			<legend>Optica Ramirez - Centro Optico Especializado</legend>

</fieldset>
<fieldset >
	<div class="col-lg-12 ">
{!! Form::open(['route' => 'recipe.getter']) !!}
	<input type="hidden" id="cli2" name="cliente" value="">
	<button type="submit"  style="padding-left:10px;padding-right:10px;" class="btn btn-danger btn-raised bmd-btn-fab">
  <i class="material-icons">note</i> Receta
	</button>
{!! Form::close() !!}
{!! Form::open(['route' => 'ticket.store']) !!}
<button type="button" class="btn btn-warning btn-raised bmd-btn-fab" style="padding-left:10px;padding-right:10px;" data-toggle="modal" data-target="#miModal2">
  <i class="material-icons">photo_camera</i> Boleta
</button>
<a type="button" href="{{ route('pdf')}}" target="_blank" class="btn btn-primary btn-raised bmd-btn-fab" style="padding-left:10px;padding-right:10px;">
  <i class="material-icons">print</i> Imprimir
</a>
<button type="submit" class="btn btn-success btn-raised bmd-btn-fab" style="padding-left:10px;padding-right:10px;">
	<i class="material-icons">check</i> Guardar
</button>
</div><br/><br/><br/><br/>
<label for="" class="label label-warning">Datos de cliente</label>
	<div class="form-group">
		<input type="hidden" id="cli" name="cliente" value="">
		<input type="hidden" id="img" name="img" value="">
		<p><b>Nombre del cliente: </b><span id="nam"></span></p>
		<p><b>Edad: </b> <span id="old"></span> años	</p>
		<p><b>Fecha: </b>{{\Carbon\Carbon::now()->toDateString()  }}</p>
		<p><b>Direccion del cliente: </b><span id="add"></span></p>
		<p><b>Telefono del cliente: </b><span id="pho"></span></p>
	</div>
</fieldset>
	<label for="" class="label label-danger">Datos de lentes - Boleta</label>
	<div class="form-group">
		<label for="" class="lbl col-lg-2" style="color: #333; weight:bold">Cristales</label>
		<div class="col-lg-10">
			<input type="text" name="cri_tic" class="form-control" value="" required>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-2" style="color: #333; weight:bold">Armazon</label>
		<div class="col-lg-10">
			<input type="text" name="arm_tic" class="form-control" value="" required>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-2" style="color: #333; weight:bold">Medida</label>
		<div class="col-lg-10">
			<input type="text" name="med_tic" class="form-control" value="" required>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-2" style="color: #333; weight:bold">Material</label>
		<div class="col-lg-10">
			<input type="text" name="mat_tic" class="form-control" value="" required>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-2" style="color: #333; weight:bold">Saldo</label>
		<div class="col-lg-10">
			<input type="number" name="sal_tic" class="form-control" value="" required>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-2" style="color: #333; weight:bold">Total</label>
		<div class="col-lg-10">
			<input type="number" name="tot_tic" class="form-control" value="" required>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-3" style="color: #333; weight:bold">N° de boleta</label>
		<div class="col-lg-9">
			<input type="number" name="nro_tic" class="form-control" value="" required>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-4" style="color: #333; weight:bold">Fecha de entrega</label>
		<div class="col-lg-8">
			<input type="date" name="fec_tic" class="form-control" value="" required>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="lbl col-lg-2" style="color: #333; weight:bold">Hora:</label>
		<div class="col-lg-10">
			<input type="time" name="hor_tic" class="form-control" value="" required>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="contenedor2 well">
			<div class="titulo">Foto</div>
			<canvas id="foto2" ></canvas>
	</div>
	{!! Form::close() !!}
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
				<div class="well col-lg-12" style="height:65vw">
			      <p><b>Datos del cliente:</b></p>

			    <div id='botonera' style="margin-left:15%;">
			        <button id='botonIniciar' style="padding-left:15px;" class="btn btn-raised btn-success" type='button'><i class="material-icons">play_circle_filled</i> Iniciar</button>
			        <button id='botonDetener' style="padding-left:15px;" class="btn btn-raised btn-danger" type='button'><i class="material-icons">stop</i> Detener</button>
			        <button id='botonFoto' type='button' style="padding-left:15px;" class="btn btn-raised btn-primary"><i class="material-icons">camera</i> Foto</button>

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
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="material-icons">check</i>Listo</button>
      </div>
    </div>
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
<!-- Modal !-->
@endsection

@section('scripts')
	<script type="text/javascript">
		$(document).on('ready', function(){
			var clients ={!! json_encode($clients->toArray()) !!};
			console.log(clients);
			for(var i=0; i<clients.length; i++)
			{
				var click="javascript:pasar('"+ clients[i].nam_cli+"','"+ clients[i].lpa_cli+"','"+clients[i].lma_cli +"','"+clients[i].add_cli +"','"+clients[i].pho_cli +"','"+clients[i].id+"','"+clients[i].old_cli +"');";
				clients[i].button='<a class="btn btn-raised btn-danger" onclick="'+click+'"  href="#" style="margin-top:0px; padding: 8px;"><i class="material-icons">supervisor_account</i> Asignar</a>';
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

	<script type="text/javascript">
			//Nos aseguramos que estén definidas
//algunas funciones básicas
window.URL = window.URL || window.webkitURL;
navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || function(){alert('Su navegador no soporta navigator.getUserMedia().');};
jQuery(document).ready(function(){
	//Este objeto guardará algunos datos sobre la cámara
	window.datosVideo = {
			'StreamVideo': null,
			'url' : null
	};

	jQuery('#botonIniciar').on('click', function(e){
			//Pedimos al navegador que nos de acceso a
			//algún dispositivo de video (la webcam)
			navigator.getUserMedia({'audio':false, 'video':true}, function(streamVideo){
					datosVideo.StreamVideo = streamVideo;
					datosVideo.url = window.URL.createObjectURL(streamVideo);
					jQuery('#camara').attr('src', datosVideo.url);
			}, function(){
					alert('No fue posible obtener acceso a la cámara.');
			});
	});
	jQuery('#botonDetener').on('click', function(e){
			if(datosVideo.StreamVideo){
					datosVideo.StreamVideo.stop();
					window.URL.revokeObjectURL(datosVideo.url);
			};
	});

	jQuery('#botonFoto').on('click', function(e){
			var oCamara,
					oFoto,
					oContexto,
					w, h;

			oCamara = jQuery('#camara');
			oFoto = jQuery('#foto');
			oFoto2 = jQuery('#foto2');
			w = oCamara.width();
			h = oCamara.height();
			oFoto.attr({'width': w, 'height': h});
			oFoto2.attr({'width': w, 'height': h});
			oContexto = oFoto[0].getContext('2d');
			oContexto2 = oFoto2[0].getContext('2d');
			oContexto.drawImage(oCamara[0], 0, 0, w, h);
			oContexto2.drawImage(oCamara[0], 0, 0, w, h);
			foto= document.getElementById('foto2')
			img=foto.toDataURL();
			$('#img').val(img);

	});
});
	</script>
@endsection
