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
	<div class="form-group">
		<input type="hidden" name="" value="">
		<p><b>Nombre del cliente:</b> {{Auth::user()->nam_user}}</p>
		<p><b>Edad:</b> {{Auth::user()->id}} </p>
		<p><b>Fecha: </b>{{\Carbon\Carbon::now()}}</p>
		<p><b>Direccion del cliente:</b> Calle Montaño #358</p>
		<p><b>Telefono del cliente: </b></p>
	</div>
</fieldset>
	<label for="" class="label label-danger">Datos de lentes - Boleta</label>
	<div class="form-group label-floating">
  <div class="input-group">
    <span class="input-group-addon"></span>
    <label class="control-label has-warning" for="addon3a">Montura</label>
    <input type="text" id="addon3a" class="form-control">
  </div>
	</div>
	<div class="form-group has-warning">
  <label class="control-label" for="inputWarning">A cuenta</label>
  <input type="text" class="form-control" id="inputWarning">
	</div>
	<div class="form-group has-warning">
  <label class="control-label" for="inputWarning">Saldo</label>
  <input type="text" class="form-control" id="inputWarning">
	</div>
	<div class="form-group has-warning">
  <label class="control-label" for="inputWarning">Input warning</label>
  <input type="text" class="form-control" id="inputWarning">
	</div>
</form>
	</div>
	<div class="col-md-6 well">
		<fieldset>
			<legend>Listado de clientes</legend>
			<button type="button" class="btn btn-danger btn-raised" name="button"><i class="material-icons"></i> Registrar nuevo cliente</button>
			<br/>
			<br/>
			<div class="table-responsive">
			<table class="table table-striped table-hover" id="client">
  <thead>
    <tr>
      <th>Name</th>
      <th>Hobby</th>
      <th>Favorite Music</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Fred</td>
      <td>Roller Skating</td>
      <td>Disco</td>
    </tr>
    <tr>
      <td>Helen</td>
      <td>Rock Climbing</td>
      <td>Alternative</td>
    </tr>
    <tr>
      <td>Glen</td>
      <td>Traveling</td>
      <td>Classical</td>
    </tr>
  </tbody>
</table>
</div>
		</fieldset>
	</div>
</div>
@endsection

@section('scripts')
	<script type="text/javascript">
		$(document).on('ready', function(){
			$('#client').dynatable();
		});
	</script>
@endsection
