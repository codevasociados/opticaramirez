@extends('../layout')
@section('title')
  Formulario de registro de boletas manual - Optica Ramirez
@endsection
@section('css')
<style type="text/css">
    .contenedor{ margin-left: 6%;float: left;}
    .titulo{ font-size: 12pt; font-weight: bold;}
    #camara, #foto{
        width: 480px;
        min-height: 280px;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
  <div class="well col-lg-5" style="margin-right:2%; margin-left:3%;">
<fieldset>
  <legend>Control de pendientes</legend>
  <table  class="table table-striped table-hover" id="ticket">
    <thead>
      <tr>
        <th data-dynatable-column="ci_cli">Fecha</th>
        <th data-dynatable-column="ci_cli">C.I.</th>
        <th data-dynatable-column="nam_cli">Nombre</th>
        <th data-dynatable-column="lpa_cli">Paterno</th>
        <th data-dynatable-column="lma_cli">Materno</th>
        <th data-dynatable-column="button">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>

      </tr>
    </tbody>
  </table>
</fieldset>
  </div>
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
			$('#ticket').dynatable({
				dataset: {
    			records: clients
  			},
				inputs: {
    		 processingText: 'Loading <img src="{{ url('imagen/cargando.gif')}}" />'
  	 		}
			});
		});
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
      w = oCamara.width();
      h = oCamara.height();
      oFoto.attr({'width': w, 'height': h});
      oContexto = oFoto[0].getContext('2d');
      oContexto.drawImage(oCamara[0], 0, 0, w, h);

  });
});
  </script>
@endsection
