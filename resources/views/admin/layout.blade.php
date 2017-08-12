<!DOCTYPE html>
<!-- Developer: Luis Quisbert
 *  Date: 28-07-2017
 *	Hour: 13:36
 *	Comment: View layout with defined sections!-->
<html lang="es">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>@yield('title')</title>
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
<body style="background-image: url('imagen/layout2.png'); background-size: 120px;">
<!-- Animacion de cargar pagina, usar en los modulos que son necesarios!-->
		<div id="imgLOAD" style="text-align:center; position:absolute;">
			<b>Cargando...</b>
			<img src="{{ url('imagen/cargando.gif') }}" />
		</div>
		<!-- Fin del div de animacion !-->
		<!-- Menu vertical !-->

<div id="page" class="container col-lg-12"  style="position:relative; display: none;">
	<div class="navbar navbar-warning">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)"><img src="{{ url('imagen/optica_ramirez.png') }}" height="48px;"></a>
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
            <li><a href="/logout">Cerrar sesion</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
@yield('content')

<!--Recursos de la animacion de carga de pagina!-->
	<script type='text/javascript'>
			window.onload = detectarCarga;
			function detectarCarga(){
				document.getElementById("imgLOAD").style.display="none";
				document.getElementById("page").style.display="block";
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
