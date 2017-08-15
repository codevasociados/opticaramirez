@extends('admin/layout')

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
    <div class="well register col-md-3">
      <div class="text">Registro de clientes</div>
    </div>
    <div class="well sales col-md-5" >
      <div class="text">Registro de ventas</div>
    </div>
    <div class="well admin col-md-3">
      <div class="text">Administracion</div>
    </div>
</div>
<div class="container-fluid row">
  <div class="well eventos col-md-8" >
    <div class="text">Registro de clientes</div>
  </div>
  <div class="well pendientes col-md-3">
    <div class="text">Registrar pendientes</div>
  </div>
</div>
@stop

@section('scripts')

@endsection
