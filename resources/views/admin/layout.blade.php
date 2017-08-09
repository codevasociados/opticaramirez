<!DOCTYPE html>
<!-- Developer: Luis Quisbert
 *  Date: 28-07-2017
 *	Hour: 13:36
 *	Comment: View login with bootstrap-material-design without sections
 */!-->
<html lang="es">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>@yield('titulo')</title>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
<!--
		/** Elementos de hojas de estilo
		*		Bootstrap, material-design
		*/
!-->
	{{ Html::style('css/login.css') }}
    {{ Html::style('bower_components/bootstrap/css/bootstrap.min.css') }}
    {{ Html::style('bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.min.css') }}
		{{ Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') }}
	@yield('css')
</head>
<body style="background-image: url('imagen/layout2.png'); background-size: 150px;">
<!-- Animacion de cargar pagina, usar en los modulos que son necesarios!-->
		<div id="imgLOAD" style="text-align:center;">
			<b>Cargando...</b>
			<img src="{{ url('imagen/cargando.gif') }}" />
		</div>
		<!-- Fin del div de animacion !-->
		<!-- Menu vertical !-->

<div class="container col-lg-12">
	<div class="navbar navbar-warning">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)"><img src="{{ url('imagen/optica_ramirez.png') }}" height="42px;"></a>
    </div>
    <div class="navbar-collapse collapse navbar-warning-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="javascript:void(0)">Inicio</a></li>
        <li><a href="javascript:void(0)">Pacientes</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Historial
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Pendientes</a></li>
            <li><a href="javascript:void(0)">Ver todos</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Administrar historial</li>
			></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control col-lg-12" placeholder="Busqueda rapida">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
      	<li><a>Tipo de usuario: Administrador</a></li>
        <li><a href="javascript:void(0)"><i class="material-icons">lock</i>Bloquear </a> </li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">settings</i>Configuraciones
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Cambiar contraseña</a></li>
            <li><a href="javascript:void(0)">Editar perfil</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0)">Cerrar sesion</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="well col-lg-2">

</div>
<div class="panel panel-default col-lg-9 col-sm-offset-1">
  <div class="panel-body">
    <ul class="breadcrumb">
  <li class="active">Inicio</li>
</ul>
		@yield('content')

<fieldset>
<legend class="warning" style="height: 15px;">Clientes</legend>
<button class="btn btn-success btn-raised"><i class="material-icons">edit</i> Registrar nuevo </button>
<table class="table table-striped table-hover ">
  <thead>
  <tr>
    <th>#</th>
    <th>Nombre del paciente</th>
    <th width="40%">Datos personales</th>
    <th>Cantidad de fotografias</th>
    <th>Acciones</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>1</td>
    <td>Column content</td>
    <td>Column content</td>
    <td><label class="label label-success">1</label></td>
    <td><button class="btn btn-primary"><i class="material-icons">edit</i></button><button class="btn btn-default"><i class="material-icons">remove_red_eye</i></button><button class="btn btn-danger"><i class="material-icons">delete</i></button></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Column content</td>
    <td>Column content</td>
    <td><label class="label label-warning">2</label></td>
    <td><button class="btn btn-primary"><i class="material-icons">edit</i></button><button class="btn btn-default"><i class="material-icons">remove_red_eye</i></button><button class="btn btn-danger"><i class="material-icons">delete</i></button></td>
  </tr>
  <tr class="info">
    <td>3</td>
    <td>Column content</td>
    <td>Column content</td>
    <td><label class="label label-success">1</label></td>
    <td><button class="btn btn-primary"><i class="material-icons">edit</i></button><button class="btn btn-default"><i class="material-icons">remove_red_eye</i></button><button class="btn btn-danger"><i class="material-icons">delete</i></button></td>
  </tr>
  <tr class="success">
    <td>4</td>
    <td>Column content</td>
    <td>Column content</td>
    <td><label class="label label-success">1</label></td>
    <td><button class="btn btn-primary"><i class="material-icons">edit</i></button><button class="btn btn-default"><i class="material-icons">remove_red_eye</i></button><button class="btn btn-danger"><i class="material-icons">delete</i></button></td>
  </tr>
  <tr class="danger">
    <td>5</td>
    <td>Column content</td>
    <td>Column content</td>
    <td><label class="label label-danger">3</label></td>
    <td><button class="btn btn-primary"><i class="material-icons">edit</i></button><button class="btn btn-default"><i class="material-icons">remove_red_eye</i></button><button class="btn btn-danger"><i class="material-icons">delete</i></button></td>
  </tr>
  <tr class="warning">
    <td>6</td>
    <td>Column content</td>
    <td>Column content</td>
    <td><label class="label label-success">1</label></td>
    <td><button class="btn btn-primary"><i class="material-icons">edit</i></button><button class="btn btn-default"><i class="material-icons">remove_red_eye</i></button><button class="btn btn-danger"><i class="material-icons">delete</i></button></td>
  </tr>
  <tr class="active">
    <td>7</td>
    <td>Column content</td>
    <td>Column content</td>
    <td><label class="label label-primary">0</label></td>
    <td><button class="btn btn-primary"><i class="material-icons">edit</i></button><button class="btn btn-default"><i class="material-icons">remove_red_eye</i></button><button class="btn btn-danger"><i class="material-icons">delete</i></button></td>
  </tr>
  </tbody>
</table>
</fieldset>
  </div>
</div>

</div>
</div>
<!--Recursos de la animacion de carga de pagina!-->
	<script type='text/javascript'>
			window.onload = detectarCarga;
			function detectarCarga(){
				document.getElementById("imgLOAD").style.display="none";
			}
	</script>
    <!--  Elementos de javascript
    *   Bootstrap, material-design
     -->
    {{ Html::script('bower_components/jquery/dist/jquery.min.js') }}
    {{ Html::script('bower_components/bootstrap/js/bootstrap.min.js') }}
		{{ Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js') }}
    {{ Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js') }}
    <script type="text/javascript">
      $(document).on('ready', function(){
        $.material.init();
      });
    </script>
</body>
</html>