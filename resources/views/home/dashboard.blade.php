@extends('layout')

@section('title')

  Bienvenido  {{ Auth::user()->nam_user }} - Optica ramirez

@stop

@section('css')
  {!! Html::style('bower_components/bootstrap-calendar/css/calendar.min.css') !!}
  {!! Html::style('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')!!}
  {!! Html::style('css/dashboard.css')!!}
@endsection
@section('content')
<div class="row container-fluid">
    <a href="{{ route('client.index') }}"><div class="well register col-md-3" style="background-color: #2471A3">
      <div class="text">Registro de clientes</div>
    </div></a>
    <a href="{{ route('sold.index') }}"><div class="well sales col-md-5" style="background-color: #F39C12">
      <div class="text">Registro de ventas</div>
    </div></a>
    <div class="well admin col-md-3" style="background-color: #138D75">
      <div class="text">Administracion</div>
    </div>
</div>
<div class="container-fluid row">
  <div class="well eventos col-md-8" >
    <div class="text">Eventos</div>
  </div>
  <div class="well pendientes col-md-3" style="background-color: #C0392B">
    <div class="text">Registro manual de boletas</div>
  </div>
</div>
@stop

@section('scripts')

@endsection
